<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lead Recipients
    |--------------------------------------------------------------------------
    |
    | Addresses that receive a notification for every lead submitted through
    | the site forms. The list may be defined right here or overridden with
    | the LEADS_RECIPIENTS environment variable (comma separated).
    |
    */

    'recipients' => array_values(array_filter(array_map(
        'trim',
        explode(',', (string) env('LEADS_RECIPIENTS', 'bitrate.msk.ru@ya.ru'))
    ))),

    /*
    |--------------------------------------------------------------------------
    | Lead Notification
    |--------------------------------------------------------------------------
    |
    | Settings of the notification that is sent to the recipients above.
    | Set "queue" to true to deliver the mail in the background through the
    | queue worker, otherwise the mail is sent synchronously with the request.
    |
    */

    'notification' => [
        'subject' => env('LEADS_SUBJECT', 'Новая заявка с сайта bitrate.msk.ru'),
        'queue' => (bool) env('LEADS_QUEUE', false),
        'queue_name' => env('LEADS_QUEUE_NAME', 'default'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Rate Limiting
    |--------------------------------------------------------------------------
    |
    | Maximum amount of lead submissions allowed from a single IP address
    | per minute.
    |
    */

    'rate_limit' => [
        'per_minute' => (int) env('LEADS_RATE_LIMIT', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | User Facing Messages
    |--------------------------------------------------------------------------
    |
    | Messages shown to the visitor in the popup window after the form has been
    | submitted. They are rendered both in the json answer of the endpoint and
    | in the javascript of the page.
    |
    */

    'messages' => [
        'success' => 'Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.',
        'error' => 'Произошла ошибка! Попробуйте позже.',
        'empty_phone' => 'Укажите номер телефона.',
        'invalid_phone' => 'Номер телефона указан в неверном формате.',
        'sending' => 'Отправляем заявку...',
    ],

];
