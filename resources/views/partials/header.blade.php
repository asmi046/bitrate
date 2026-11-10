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
                        <a href="tel:+74991104613" class="header-phone mgo-number">+7 (499) 110-46-13</a>
                        <a href="#callback-modal" class="header-callback">Заказать звонок</a>
                    </div>
                </div>
                <a href="mailto:bitrate.msk.ru@ya.ru" class="header-email">bitrate.msk.ru@ya.ru</a>
            </div>
        </div>
    </div>

    @yield('hero')
</header>
