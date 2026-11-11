<header class="header">
    <div class="header-top">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <div class="logo-img" style="background-image: url({{ asset('images/kamera.svg') }})"></div>
                <div class="logo-text">
                    <div class="logo-text__title">Бит <span class="color-yellow">Рейт</span></div>
                    <div class="logo-text__descr">Продажа и установка систем безопасности</div>
                </div>
            </a>
            <div class="header-menu">
                <ul id="menu-menu-1" class="ul-clean">
                    <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12"><a href="{{ route('home') }}" aria-current="page">Видеонаблюдение</a></li>
                    <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="/usilenie-signala/">Усиление сигнала</a></li>
                    <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/ohrannye-sistemy/">Охранные системы</a></li>
                    <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="/internet-v-zagodornyj-dom/">Интернет в загородный дом</a></li>
                </ul>
            </div>
            <div class="header-contacts">
                <div class="header-contacts__top">
                    <div class="phone-button" data-mailmsg="Заказ обратного звонка в шапке"></div>
                    <div class="header-contacts__phones">
                        <a href="tel:{{ config('contacts.phone.link') }}" class="header-phone mgo-number">{{ config('contacts.phone.display') }}</a>
                        <a href="#offer-free" class="header-callback">{{ config('contacts.labels.callback') }}</a>
                    </div>
                </div>
                <a href="mailto:{{ config('contacts.email') }}" class="header-email">{{ config('contacts.email') }}</a>
            </div>
        </div>
    </div>

    @yield('hero')
</header>
