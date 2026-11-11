<?php

test('the home page renders the ported bitrate landing page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Установка систем видеонаблюдения');
    $response->assertSee('Каталог оборудования');
    $response->assertSee('Наши проекты');
    $response->assertSee('Наши контакты');
});

test('the home page loads the theme styles and scripts', function () {
    $response = $this->get('/');

    $response->assertSee(asset('css/theme.css'), false);
    $response->assertSee(asset('css/vendor/slick.css'), false);
    $response->assertSee(asset('js/custom.js'), false);
    $response->assertSee(asset('js/vendor/slick.min.js'), false);
});

test('the home page links the local image assets', function () {
    $response = $this->get('/');

    $response->assertSee(asset('images/kamera.svg'), false);
    $response->assertSee(asset('images/cam-1.jpg'), false);
    $response->assertSee(asset('images/project-massaj-1.jpg'), false);
});

test('the home page does not reference the web archive', function () {
    $response = $this->get('/');

    $response->assertDontSee('web.archive.org', false);
});

test('every form of the home page is submitted with ajax', function () {
    $response = $this->get('/');

    $response->assertSee('data-lead-form', false);
    $response->assertSee(route('leads.store'), false);
    $response->assertSee('window.bitrateForms', false);

    $forms = substr_count($response->getContent(), 'data-lead-form');
    $this->assertSame(6, $forms);
});

test('the contact information is rendered from the config', function () {
    config()->set('contacts.phone.display', '+7 (999) 000-00-00');
    config()->set('contacts.phone.link', '+79990000000');
    config()->set('contacts.email', 'test@example.com');
    config()->set('contacts.address.full', 'г. Тест, ул. Примерная, д.1');

    $response = $this->get('/');

    $response->assertSee('+7 (999) 000-00-00');
    $response->assertSee('test@example.com');
    $response->assertSee('г. Тест, ул. Примерная, д.1');
    $response->assertSee('href="tel:+79990000000"', false);
    $response->assertSee('href="mailto:test@example.com"', false);
});

test('the header callback link points to the offer free section', function () {
    $response = $this->get('/');

    $response->assertSee('class="header-callback"', false);
    $response->assertSee('href="#offer-free"', false);
    $response->assertSee('id="offer-free"', false);
});
