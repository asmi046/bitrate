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
