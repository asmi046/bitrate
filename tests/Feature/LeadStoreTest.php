<?php

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a lead submitted from the callback form is stored', function () {
    $response = $this->postJson('/leads', [
        'tel' => '+7(916)123-45-67',
        'msg' => 'Заказ обратного звонка в шапке',
        'action' => 'universal_send',
    ]);

    $response->assertOk();
    $response->assertJson(['status' => 'ok']);

    $this->assertDatabaseHas('leads', [
        'tel' => '+7(916)123-45-67',
        'msg' => 'Заказ обратного звонка в шапке',
        'source' => 'universal_send',
    ]);
});

test('a lead without a phone number is rejected', function () {
    $response = $this->postJson('/leads', ['msg' => 'без телефона']);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors('tel');

    $this->assertSame(0, Lead::count());
});

test('a lead submitted without javascript is stored and redirects back', function () {
    $response = $this->post('/leads', ['tel' => '+7(916)123-45-67']);

    $response->assertRedirect();
    $this->assertDatabaseHas('leads', ['tel' => '+7(916)123-45-67']);
});
