<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company
    |--------------------------------------------------------------------------
    |
    | Name of the company that is rendered in the header, in the footer and in
    | the notifications sent for the leads.
    |
    */

    'company' => env('CONTACTS_COMPANY', 'БитРейт'),

    /*
    |--------------------------------------------------------------------------
    | Phone
    |--------------------------------------------------------------------------
    |
    | "display" is shown to the visitor, "link" is used in the tel: links.
    |
    */

    'phone' => [
        'display' => env('CONTACTS_PHONE', '+7 (499) 110-46-13'),
        'link' => env('CONTACTS_PHONE_LINK', '+74991104613'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Email
    |--------------------------------------------------------------------------
    */

    'email' => env('CONTACTS_EMAIL', 'bitrate.msk.ru@ya.ru'),

    /*
    |--------------------------------------------------------------------------
    | Address
    |--------------------------------------------------------------------------
    |
    | "metro" is the landmark next to the office, "full" is the address of the
    | company itself.
    |
    */

    'address' => [
        'metro' => env('CONTACTS_ADDRESS_METRO', 'Станция метро Хорошево'),
        'full' => env('CONTACTS_ADDRESS', 'г. Москва, проспект Маршала Жукова, д.2'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Map
    |--------------------------------------------------------------------------
    |
    | Coordinates of the office and the link to the yandex maps.
    |
    */

    'map' => [
        'url' => env('CONTACTS_MAP_URL', 'https://yandex.ru/maps/?text=Москва, проспект Маршала Жукова, 2'),
        'latitude' => (float) env('CONTACTS_MAP_LATITUDE', 55.77724106897233),
        'longitude' => (float) env('CONTACTS_MAP_LONGITUDE', 37.50389949999997),
        'zoom' => (int) env('CONTACTS_MAP_ZOOM', 14),
        'icon' => 'images/map.svg',
    ],

    /*
    |--------------------------------------------------------------------------
    | Labels
    |--------------------------------------------------------------------------
    |
    | Labels of the contact blocks of the page.
    |
    */

    'labels' => [
        'email' => 'E-mail:',
        'phone' => 'Телефон:',
        'callback' => 'Заказать звонок',
        'general_questions' => 'По общим вопросам',
        'route' => 'Как до нас добраться?',
    ],

];
