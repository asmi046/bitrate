@component('mail::message')
# Новая заявка с сайта

**Телефон:** {{ $lead->tel }}

@if ($lead->msg)
**Сообщение:** {{ $lead->msg }}
@endif

@if ($lead->source)
**Источник:** {{ $lead->source }}
@endif

@if ($lead->page_url)
**Страница:** {{ $lead->page_url }}
@endif

@if ($lead->ip_address)
**IP:** {{ $lead->ip_address }}
@endif

@if ($lead->user_agent)
**Браузер:** {{ $lead->user_agent }}
@endif

@component('mail::button', ['url' => $lead->page_url ?? url('/')])
Позвонить клиенту
@endcomponent

Спасибо,<br>
{{ config('app.name') }}
@endcomponent
