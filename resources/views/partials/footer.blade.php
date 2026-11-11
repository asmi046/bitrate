<footer class="footer">
    <div class="container">
        <div class="footer-logo__wrap">
            <a href="{{ route('home') }}" class="footer-logo" style="background-image: url({{ asset('images/logo2.svg') }})"></a>
            <div class="logo-text__title">Бит <span class="color-yellow">Рейт</span></div>
        </div>
        <div class="footer-copy">© Все права защищены. Использование материалов сайта только с согласия правообладателей
            <a href="/politika-konfidenczialnosti/" class="color-yellow">Политика конфиденциальности</a></div>
        <div class="footer-contacts">
            <a href="tel:{{ config('contacts.phone.link') }}" class="footer-phone mgo-number">{{ config('contacts.phone.display') }}</a>
            <a href="mailto:{{ config('contacts.email') }}" class="footer-mail">{{ config('contacts.email') }}</a>
            <span>{{ config('contacts.labels.general_questions') }}</span>
        </div>
    </div>
</footer>
