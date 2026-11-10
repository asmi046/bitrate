<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'БитРейт - Продажа и установка систем безопасности')</title>
    <meta name="description" content="@yield('description', 'Продажа и установка систем безопасности')">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    {{-- Styles, in the same cascade order the WordPress theme used --}}
    <link rel="stylesheet" href="{{ asset('css/vendor/wp-block-library.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/arcticmodal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-1.4.1.min.js') }}"></script>
</head>
<body class="home blog hfeed">

@include('partials.modals')

<div id="page" class="site">

    @include('partials.header')

    <main id="primary" class="site-main">
        @yield('content')
    </main>

    @include('partials.footer')

</div><!-- #page -->

{{-- Scripts --}}
<script src="{{ asset('js/navigation.js') }}"></script>
<script src="{{ asset('js/skip-link-focus-fix.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/vendor/lazyload.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-youtube.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-gestures.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-slideshow.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-fullscreen.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-thumbs.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-share.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-hash.min.js') }}"></script>
<script src="{{ asset('js/vendor/fancybox-wheel.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask-jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask-date.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask-autojump.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask-numeric.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask-phone.min.js') }}"></script>
<script src="{{ asset('js/vendor/inputmask-regex.min.js') }}"></script>
<script src="{{ asset('js/vendor/magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/vendor/lightbox.min.js') }}"></script>
<script src="{{ asset('js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.scrolltofixed.min.js') }}"></script>
<script src="{{ asset('js/vendor/arcticmodal-0.3.min.js') }}"></script>
<script>
    var allAjax = {"ajaxurl": "{{ route('leads.store') }}", "nonce": "{{ csrf_token() }}"};
    jQuery(document).ajaxSend(function (event, jqxhr, settings) {
        if (settings.type === 'POST' && settings.url === allAjax.ajaxurl) {
            jqxhr.setRequestHeader('X-CSRF-TOKEN', allAjax.nonce);
        }
    });
</script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/vendor/wp-embed.min.js') }}"></script>

</body>
</html>
