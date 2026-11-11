<?php

use App\Models\Lead;
use App\Notifications\LeadNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;

uses(RefreshDatabase::class);

beforeEach(function () {
    config()->set('leads.recipients', ['sales@example.com', 'office@example.com']);
});

test('a lead submitted from a form is stored and the recipients are notified', function () {
    Notification::fake();

    $response = $this->postJson('/leads', [
        'tel' => '+7 (916) 123-45-67',
        'msg' => 'Заказ обратного звонка в шапке',
        'source' => 'callback-modal',
        'page_url' => 'http://localhost/',
    ]);

    $response->assertOk();
    $response->assertJsonPath('status', 'ok');
    $response->assertJsonStructure(['status', 'message', 'data' => ['id']]);

    $this->assertDatabaseHas('leads', [
        'tel' => '+79161234567',
        'msg' => 'Заказ обратного звонка в шапке',
        'source' => 'callback-modal',
    ]);

    Notification::assertSentOnDemand(
        LeadNotification::class,
        function (LeadNotification $notification, array $channels, $notifiable) {
            return $channels === ['mail']
                && $notifiable->routes['mail'] === ['sales@example.com', 'office@example.com'];
        }
    );
});

test('the phone number is normalized before it is stored', function () {
    Notification::fake();

    $this->postJson('/leads', ['tel' => '916 123 45 67'])->assertOk();

    $this->assertDatabaseHas('leads', ['tel' => '+79161234567']);
});

test('a lead without a phone number is rejected', function () {
    Notification::fake();

    $response = $this->postJson('/leads', ['msg' => 'без телефона']);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors('tel');
    $response->assertJsonFragment(['Укажите номер телефона.']);

    $this->assertSame(0, Lead::count());
    Notification::assertNothingSent();
});

test('a lead with a malformed phone number is rejected', function () {
    Notification::fake();

    $response = $this->postJson('/leads', ['tel' => '123']);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors('tel');

    $this->assertSame(0, Lead::count());
    Notification::assertNothingSent();
});

test('a lead submitted without javascript is stored and redirects back', function () {
    Notification::fake();

    $response = $this->post('/leads', ['tel' => '+79161234567']);

    $response->assertRedirect();
    $response->assertSessionHas('status', 'ok');

    $this->assertDatabaseHas('leads', ['tel' => '+79161234567']);
});

test('the lead is stored even when no recipient is configured', function () {
    Notification::fake();
    config()->set('leads.recipients', []);

    $this->postJson('/leads', ['tel' => '+79161234567'])->assertOk();

    $this->assertDatabaseHas('leads', ['tel' => '+79161234567']);
    Notification::assertNothingSent();
});

test('the submissions are rate limited', function () {
    Notification::fake();
    config()->set('leads.rate_limit.per_minute', 2);

    foreach (range(1, 2) as $attempt) {
        $this->postJson('/leads', ['tel' => '+79161234567'])->assertOk();
    }

    $this->postJson('/leads', ['tel' => '+79161234567'])->assertStatus(429);
});
