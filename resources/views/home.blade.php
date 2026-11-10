@extends('layouts.app')

@section('hero')
    <div class="header-bottom">
        <div class="container">
            <h1 class="h1">Установка систем видеонаблюдения<br>
                <span class="color-yellow">Аккуратно и профессионально. <br> Все под ключ.</span></h1>
            <div class="h1-subtitle">Постоплата</div>
            <ul class="header-advantages ul-clean">
                <li>Оборудованиие по оптовым ценам</li>
                <li>Работа по договору</li>
                <li>Возможен монтаж в ночную смену</li>
            </ul>
            <div class="header-now">Отправьте заявку сейчас и получите бесплатный расчет сметы уже через 15 минут</div>
            <div class="header-btn">
                <a href="#callback-modal" class="button popup-content" data-mailmsg="Заказ обратного звонка в баннере">Отправить заявку</a>
                <a href="#projects" class="link-projects">Наши проекты</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

  <section class="offer">
    <div class="container">
      <div class="offer-photo" style="background-image: url({{ asset('images/action.png') }})"></div>
      <div class="offer-content">
        <h2 class="section-title">При заказе от 4-х камер – еще 1 бесплатно!</h2>
        <div class="offer-descr">Количество товара по акции ограничено, успейте оформить заказ с выгодой для себя! В акции участвуют производители Esvi и Proxiscctv.</div>
        <div class="offer-text">Наши специалисты бесплатно проконсультируют Вас и помогут подобрать оптимальное решение по оборудованию и бюджету. Оставьте свой контактный телефон, и забронируйте скидку прямо сейчас!</div>
        <form action="{{ route('leads.store') }}">
          <input type="tel" placeholder="Ваш телефон:">
          <a href="#" class="button uniSendBtn" data-mailmsg="Заказ c блока При заказе от 4-х камер – еще 1 бесплатно">Отправить</a>
        </form>
        <div class="form-note">
          <input type="checkbox" checked="">
          <div class="form-note__text">
            <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="objects">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Какие объекты мы обслуживаем</div>
        <div class="section-header__title">Объекты</div>
      </div>
      <div class="objects-wrapper">
        <div class="objects-item">
          <div class="objects-item__photo" style="background-image: url({{ asset('images/uslugi-1.jpg') }})"></div>
          <div class="objects-item__content">
            <div class="objects-item__title">Видеонаблюдение для офиса</div>
            <div class="objects-item__text">Разработка, установка и обслуживание систем видеонаблюдения для офиса.</div>
          </div>
        </div>
        <div class="objects-item">
          <div class="objects-item__photo" style="background-image: url({{ asset('images/uslugi-2.jpg') }})"></div>
          <div class="objects-item__content">
            <div class="objects-item__title">Видеонаблюдение для склада</div>
            <div class="objects-item__text">Разработка, установка и обслуживание систем видеонаблюдения для офиса.</div>
          </div>
        </div>
        <div class="objects-item">
          <div class="objects-item__photo" style="background-image: url({{ asset('images/uslugi-3.jpg') }})"></div>
          <div class="objects-item__content">
            <div class="objects-item__title">Видеонаблюдение для дома</div>
            <div class="objects-item__text">Разработка, установка и обслуживание систем видеонаблюдения для квартир и домов.</div>
          </div>
        </div>
        <div class="objects-item">
          <div class="objects-item__photo" style="background-image: url({{ asset('images/uslugi-4.jpg') }})"></div>
          <div class="objects-item__content">
            <div class="objects-item__title">Видеонаблюдение для ресторана</div>
            <div class="objects-item__text">Разработка, установка и обслуживание систем видеонаблюдения для ресторанов и кафе.</div>
          </div>
        </div>
        <div class="objects-item">
          <div class="objects-item__photo" style="background-image: url({{ asset('images/uslugi-5.jpg') }})"></div>
          <div class="objects-item__content">
            <div class="objects-item__title">Видеонаблюдение для автомойки</div>
            <div class="objects-item__text">Разработка, установка и обслуживание систем видеонаблюдения для автомойки и сервисов.</div>
          </div>
        </div>
        <div class="objects-item">
          <div class="objects-item__photo" style="background-image: url({{ asset('images/uslugi-6.jpg') }})"></div>
          <div class="objects-item__content">
            <div class="objects-item__title">Видеонаблюдение для торгового центра</div>
            <div class="objects-item__text">Разработка, установка и обслуживание систем видеонаблюдения для торговых центров.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-dark">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Качество видео с различных видеокамер</div>
        <div class="section-header__title">Разрешение</div>
      </div>
      <div class="section-text">
        Чем больше разрешение у видеокамеры, тем лучше качество видео и тем с более большого расстояния можно рассмотреть мелкие детали на видеозаписи (номерные знаки у машин или лица людей). Так что разрешение - один из основных параметров, на которое стоит обращать внимание при выборе системы видеонаблюдения.
      </div>
      <div class="screen-wrapper">
        <div class="screen-item__20">
          <div class="screen-item__descr">Разрешение 1Mpx позволяет распознать номер с 7 метров</div>
          <div class="screen-item__photo" style="background-image: url({{ asset('images/quality-1.png') }})"></div>
        </div>
        <div class="screen-item__35">
          <div class="screen-item__descr">Разрешение 2Mpx позволяет распознать номер с 15 метров</div>
          <div class="screen-item__photo" style="background-image: url({{ asset('images/quality-2.png') }})"></div>
        </div>
        <div class="screen-item__45">
          <div class="screen-item__descr">Разрешение 4Mpx позволяет распознать номер с расстояния до 25 метров</div>
          <div class="screen-item__photo" style="background-image: url({{ asset('images/quality-3.jpg') }})"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-price">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Виды оборудования</div>
        <div class="section-header__title">и цены</div>
      </div>
      <div class="price-wrapper">
        <div class="price-item">
          <div class="price-item__title">CCTV-видеонаблюдение на 4 камеры</div>
          <div class="price-item__li price-item__li-yes">В стоимость включены оборудование и монтаж</div>
          <div class="price-item__li price-item__li-yes">4 камеры</div>
          <div class="price-item__li">Детализированное изображение</div>
          <div class="price-item__li">Возможность трансляции на смартфон или планшет</div>
          <div class="price-item__li">Видеоаналитика (распознование лиц, детектор движения, распознавание номеров и т.д.)</div>
          <div class="price-item__li">Запись с частотой 25 кадров в секунду</div>
          <div class="price-item__li">Full HD картинка</div>
          <div class="price-item__price">От <span>28 890</span> руб</div>
          <div class="price-item__callback">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Оставить заявку на CCTV-видеонаблюдение на 4 камеры">Оставить заявку</a>
          </div>
        </div>
        <div class="price-item">
          <div class="price-item__title">AHD-видеонаблюдение на 4 камеры</div>
          <div class="price-item__li price-item__li-yes">В стоимость включены оборудование и монтаж</div>
          <div class="price-item__li price-item__li-yes">4 камеры</div>
          <div class="price-item__li price-item__li-yes">Детализированное изображение</div>
          <div class="price-item__li price-item__li-yes">Возможность трансляции на смартфон или планшет</div>
          <div class="price-item__li">Видеоаналитика (распознование лиц, детектор движения, распознавание номеров и т.д.)</div>
          <div class="price-item__li">Запись с частотой 25 кадров в секунду</div>
          <div class="price-item__li">Full HD картинка</div>
          <div class="price-item__price">От <span>33 900</span> руб</div>
          <div class="price-item__callback">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Оставить заявку на AHD-видеонаблюдение на 4 камеры">Оставить заявку</a>
          </div>
        </div>
        <div class="price-item">
          <div class="price-item__title">IP-видеонаблюдение на 4 камеры</div>
          <div class="price-item__li price-item__li-yes">В стоимость включены оборудование и монтаж</div>
          <div class="price-item__li price-item__li-yes">4 камеры</div>
          <div class="price-item__li price-item__li-yes">Детализированное изображение</div>
          <div class="price-item__li price-item__li-yes">Возможность трансляции на смартфон или планшет</div>
          <div class="price-item__li price-item__li-yes">Видеоаналитика (распознование лиц, детектор движения, распознавание номеров и т.д.)</div>
          <div class="price-item__li price-item__li-yes">Запись с частотой 25 кадров в секунду</div>
          <div class="price-item__li price-item__li-yes">Full HD картинка</div>
          <div class="price-item__price">От <span>44 900</span> руб</div>
          <div class="price-item__callback">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Оставить заявку на IP-видеонаблюдение на 4 камеры">Оставить заявку</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="offer section-form">
    <div class="container">
      <div class="offer-photo" style="background-image: url({{ asset('images/team_new.png') }})"></div>
      <div class="offer-content">
        <h2 class="section-title">Не знаете, какое решение вам нужно?</h2>
        <div class="offer-text">Наши специалисты бесплатно проконсультируют Вас и помогут подобрать оптимальное решение по оборудованию и бюджету. Оставьте свой контактный телефон, и получите бесплатную консультацию прямо сейчас!</div>
        <form action="{{ route('leads.store') }}">
          <input type="tel" placeholder="Ваш телефон:">
          <a href="#" class="button uniSendBtn" data-mailmsg="Заявка с блока Не знаете, какое решение вам нужно">Отправить</a>
        </form>
        <div class="form-note">
          <input type="checkbox" checked="">
          <div class="form-note__text">
            <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="catalog">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Какое оборудование мы используем</div>
        <div class="section-header__title">Каталог оборудования</div>
      </div>
      <div class="catalog-wrapper">
        <div class="catalog-item">
          <div class="catalog-item__photo" style="background-image: url({{ asset('images/cam-1.jpg') }})"></div>
          <div class="catalog-item__title">IP-видеокамера Hiwatch DS-N241</div>
          <div class="catalog-item__char">
            <table>
              <tbody><tr>
                <td>Тип камеры:</td>
                <td>цветная</td>
              </tr>
              <tr>
                <td>Тип матрицы:</td>
                <td>CMOS</td>
              </tr>
              <tr>
                <td>Фокусное расстояние:</td>
                <td>2.8 мм</td>
              </tr>
              <tr>
                <td>Разрешение камеры:</td>
                <td>1Мп</td>
              </tr>
              <tr>
                <td>Исполнение:</td>
                <td>внутренняя</td>
              </tr>
            </tbody></table>
          </div>
          <div class="catalog-item__price-block">
            Цена: <span class="catalog-item__price">6790</span> <span class="color-yellow">руб.</span>
          </div>
          <div class="catalog-item__btn-wrap">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Заявка на товар IP-видеокамера Hiwatch DS-N241">Подробнее</a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-item__photo" style="background-image: url({{ asset('images/cam-2.jpg') }})"></div>
          <div class="catalog-item__title">IP-видеокамера Hikvision DS-2CD2042WD-I</div>
          <div class="catalog-item__char">
            <table>
              <tbody><tr>
                <td>Тип камеры:</td>
                <td>цветная</td>
              </tr>
              <tr>
                <td>Тип матрицы:</td>
                <td>CMOS</td>
              </tr>
              <tr>
                <td>Разрешение камеры:</td>
                <td>4 Мп</td>
              </tr>
              <tr>
                <td>Исполнение:</td>
                <td>Уличная</td>
              </tr>
              <tr>
                <td>Сетевые протоколы:</td>
                <td>TCP/IP, HTTP...</td>
              </tr>
            </tbody></table>
          </div>
          <div class="catalog-item__price-block">
            Цена: <span class="catalog-item__price">12490</span> <span class="color-yellow">руб.</span>
          </div>
          <div class="catalog-item__btn-wrap">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Заявка на товар IP-видеокамера Hikvision DS-2CD2042WD-I">Подробнее</a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-item__photo" style="background-image: url({{ asset('images/cam-3.png') }})"></div>
          <div class="catalog-item__title">Камера видеонаблюдения Hikvision DS-T101</div>
          <div class="catalog-item__char">
            <table>
              <tbody><tr>
                <td>Тип камеры:</td>
                <td>цветная</td>
              </tr>
              <tr>
                <td>Тип матрицы:</td>
                <td>CMOS</td>
              </tr>
              <tr>
                <td>Фокусное расстояние::</td>
                <td>2.8 мм</td>
              </tr>
              <tr>
                <td>Разрешение камеры:</td>
                <td>1 Мп</td>
              </tr>
              <tr>
                <td>Запись звука:</td>
                <td>Да</td>
              </tr>
            </tbody></table>
          </div>
          <div class="catalog-item__price-block">
            Цена: <span class="catalog-item__price">1800</span> <span class="color-yellow">руб.</span>
          </div>
          <div class="catalog-item__btn-wrap">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Заявка на товар Камера видеонаблюдения Hikvision DS-T101">Подробнее</a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-item__photo" style="background-image: url({{ asset('images/cam-4.jpg') }})"></div>
          <div class="catalog-item__title">IP-Видеокамера Hikvision DS-2DE-4220-AE3</div>
          <div class="catalog-item__char">
            <table>
              <tbody><tr>
                <td>Тип камеры:</td>
                <td>цветная</td>
              </tr>
              <tr>
                <td>Тип матрицы:</td>
                <td>CMOS</td>
              </tr>
              <tr>
                <td>Фокусное расстояние:</td>
                <td>4.7 - 94 мм</td>
              </tr>
              <tr>
                <td>Разрешение камеры:</td>
                <td>2 Мп</td>
              </tr>
              <tr>
                <td>Исполнение:</td>
                <td>уличная</td>
              </tr>
            </tbody></table>
          </div>
          <div class="catalog-item__price-block">
            Цена: <span class="catalog-item__price">44390</span> <span class="color-yellow">руб.</span>
          </div>
          <div class="catalog-item__btn-wrap">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Заявка на товар IP-Видеокамера Hikvision DS-2DE-4220-AE3">Подробнее</a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-item__photo" style="background-image: url({{ asset('images/cam-5.png') }})"></div>
          <div class="catalog-item__title">Сетевой видеорегистратор HiWatch DS-N104</div>
          <div class="catalog-item__char">
            <table>
              <tbody><tr>
                <td>Формат видеосжатия:</td>
                <td>H.264</td>
              </tr>
              <tr>
                <td>IP-камера</td>
                <td>4 канала</td>
              </tr>
              <tr>
                <td>Двусторонний</td>
                <td>1 канал, RCA</td>
              </tr>
              <tr>
                <td>аудиовход:</td>
                <td>(2.0 Vp-p, 1 kΩ)</td>
              </tr>
            </tbody></table>
          </div>
          <div class="catalog-item__price-block">
            Цена: <span class="catalog-item__price">5590</span> <span class="color-yellow">руб.</span>
          </div>
          <div class="catalog-item__btn-wrap">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Заявка на товар Сетевой видеорегистратор HiWatch DS-N104">Подробнее</a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-item__photo" style="background-image: url({{ asset('images/cam-6.jpg') }})"></div>
          <div class="catalog-item__title">Жесткий диск Western Digital WD10PURZ SATA</div>
          <div class="catalog-item__char">
            <table>
              <tbody><tr>
                <td>Объем HDD:</td>
                <td>1 ТБ</td>
              </tr>
              <tr>
                <td>Объем SSD буфера:</td>
                <td>нет</td>
              </tr>
              <tr>
                <td>Объем буфера</td>
                <td>32 МБ</td>
              </tr>
              <tr>
                <td>Скорость вращения</td>
                <td>7200 rpm</td>
              </tr>
              <tr>
                <td>Интерфейс:</td>
                <td>SATA III</td>
              </tr>
            </tbody></table>
          </div>
          <div class="catalog-item__price-block">
            Цена: <span class="catalog-item__price">3900</span> <span class="color-yellow">руб.</span>
          </div>
          <div class="catalog-item__btn-wrap">
            <a href="#callback-modal" class="button popup-content" data-mailmsg="Заявка на товар Жесткий диск Western Digital WD10PURZ SATA">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="offer offer-disk">
    <div class="container">
      <div class="offer-photo" style="background-image: url({{ asset('images/wd-action.png') }})"></div>
      <div class="offer-content">
        <h2 class="section-title">При заказе от 8 камер жесткий диск на 1 ТБ в подарок</h2>
        <div class="offer-text">Наши специалисты бесплатно проконсультируют Вас и помогут подобрать оптимальное решение по оборудованию и бюджету. Оставьте свой контактный телефон, и получите бесплатную консультацию прямо сейчас!</div>
        <form action="{{ route('leads.store') }}">
          <input type="tel" placeholder="Ваш телефон:">
          <a href="#" class="button uniSendBtn" data-mailmsg="Заявка блока При заказе от 8 камер жесткий диск на 1 ТБ в подарок">Отправить</a>
        </form>
        <div class="form-note">
          <input type="checkbox" checked="">
          <div class="form-note__text">
            <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Качественный монтаж от наших мастеров в кротчайшие сроки</div>
        <div class="section-header__title">Особенности систем видеонаблюдения</div>
      </div>
      <div class="features-wrapper">
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/features-1.jpg') }})"></div>
          <div class="features-item__title">Видеоконтроль и защита от краж</div>
          <div class="features-item__text">Видеокамеры записывают все события, попавшие в зону их видимости, что позволяет снизить риск краж и других инцидентов, а так же вести контроль за домом и офисом в реальном времени.</div>
        </div>
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/features-2.jpg') }})"></div>
          <div class="features-item__title">Удаленный просмотр</div>
          <div class="features-item__text">Для просмотра видео с камер наблюдения вам больше не нужно постоянно находиться за компьютером, достаточно иметь при себе любой гаджет (сотовый телефон или планшет) с подключенным интернетом.</div>
        </div>
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/features-3.jpg') }})"></div>
          <div class="features-item__title">Ведение архива видеозаписей</div>
          <div class="features-item__text">Запись видео в архив позволяет просматривать события, записанные за последние 7/14/30/60 дней.</div>
        </div>
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/features-4.jpg') }})"></div>
          <div class="features-item__title">Видеонаблюдение ночью</div>
          <div class="features-item__text">Наши видеокамеры снабжены ИК подсветкой и способны вести запись видео в полной темноте, сохранив способность идентифицировать личность.</div>
        </div>
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/features-5.jpg') }})"></div>
          <div class="features-item__title">Детектор движения</div>
          <div class="features-item__text">Видеокамеры снабжены детектором движения и способны оповещать вас по средствам электронного сообщения о всех перемещениях в зоне видимости камеры.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="manufacturers section-dark">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Гарантия минимальных цен и надежности</div>
        <div class="section-header__title">МЫ РАБОТАЕМ ТОЛЬКО С ПРОВЕРЕННЫМИ ПРОИЗВОДИТЕЛЯМИ</div>
      </div>
      <div class="manufacturers-wrapper">
        <div class="manufacturers-item">
          <div class="manufacturers-item__logo" style="background-image: url({{ asset('images/brand-1.png') }})"></div>
          <div class="manufacturers-item__text">Hikvision - признанный мировой лидер в производстве систем видеонаблюдения. Продукция Hikvision успешно применяется в более чем 150 странах.</div>
        </div>
        <div class="manufacturers-item">
          <div class="manufacturers-item__logo" style="background-image: url({{ asset('images/brand-2.png') }})"></div>
          <div class="manufacturers-item__text">HiWatch - бюджетный бренд, разработанный компанией Hikvision, мировым лидером по производству систем видеонаблюдения. особенностью HiWatch является сочетание конкурентной цены и высокого качества.</div>
        </div>
        <div class="manufacturers-item">
          <div class="manufacturers-item__logo" style="background-image: url({{ asset('images/brand-3.png') }})"></div>
          <div class="manufacturers-item__text">ActiveCam принадлежит крупной международной компании DSSL – разработчику, производителю и поставщику профессиональных систем видеонаблюдения.</div>
        </div>
        <div class="manufacturers-item">
          <div class="manufacturers-item__logo" style="background-image: url({{ asset('images/brand-4.png') }})"></div>
          <div class="manufacturers-item__text">Торговая марка PROXISCCTV представлена на российском рынке средств охранного видео-наблюдения с 2015 года. Оборудование отличается высокой надежностью.</div>
        </div>
        <div class="manufacturers-item">
          <div class="manufacturers-item__logo" style="background-image: url({{ asset('images/brand-5.png') }})"></div>
          <div class="manufacturers-item__text">ESVI — торговая марка, созданная в России. С 2013 года под этой маркой выпускается более 500 видов оборудования для безопасности: широкий спектр товаров видеонаблюдения.</div>
        </div>
        <div class="manufacturers-item">
          <div class="manufacturers-item__logo" style="background-image: url({{ asset('images/brand-6.png') }})"></div>
          <div class="manufacturers-item__text">Средства сетевого видеонаблюдения Axis устанавливаются в общественных учреждениях и зонах общественного пользования — розничных магазинах, аэропортах, поездах, автомагистралях.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="projects" id="projects">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Некоторые реализованные проекты за 2020 год</div>
        <div class="section-header__title">Наши проекты</div>
      </div>
      <div class="projects-wrapper">
        <div class="projects-item">
          <div class="projects-item__title">Установка системы видеонаблюдения в массажном салоне</div>
          <div class="projects-item__images">
            <a href="{{ asset('images/project-massaj-1.jpg') }}" class="projects-item__images-big" data-lightbox="project-1" style="background-image: url({{ asset('images/project-massaj-1.jpg') }})"></a>
            <div class="projects-item__images-min">
              <a href="{{ asset('images/project-massaj-2.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-1" style="background-image: url({{ asset('images/project-massaj-2.jpg') }})"></a>
              <a href="{{ asset('images/project-massaj-3.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-1" style="background-image: url({{ asset('images/project-massaj-3.jpg') }})"></a>
            </div>
          </div>
          <div class="projects-item__info">
            <div class="projects-item__info-city">г. Москва</div>
            <div class="projects-item__info-qty">1 шт</div>
            <div class="projects-item__info-time">2 часа</div>
          </div>
          <div class="projects-item__text">
            Произведена установка одной IP видеокамеры в массажном салоне. Работа была сделана менее чем за 2 часа. По пожеланию заказчика, камера была подобрана по дизайну помещения.
          </div>
        </div>
        <div class="projects-item">
          <div class="projects-item__title">Установка системы видеонаблюдения в салоне красоты</div>
          <div class="projects-item__images">
            <a href="{{ asset('images/project-salon-1.jpg') }}" class="projects-item__images-big" data-lightbox="project-2" style="background-image: url({{ asset('images/project-salon-1.jpg') }})"></a>
            <div class="projects-item__images-min">
              <a href="{{ asset('images/project-salon-2.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-2" style="background-image: url({{ asset('images/project-salon-2.jpg') }})"></a>
              <a href="{{ asset('images/project-salon-3.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-3" style="background-image: url({{ asset('images/project-salon-3.jpg') }})"></a>
            </div>
          </div>
          <div class="projects-item__info">
            <div class="projects-item__info-city">г. Москва</div>
            <div class="projects-item__info-qty">4 шт</div>
            <div class="projects-item__info-time">1 день</div>
          </div>
          <div class="projects-item__text">
            Произведена установка четырех IP видеокамер в салоне красоты. Работа была сделана менее чем за 1 день (ночью), чтобы не нарушать работу сотрудников.
          </div>
        </div>
        <div class="projects-item">
          <div class="projects-item__title">Установка системы видеонаблюдения в медицинском центре</div>
          <div class="projects-item__images">
            <a href="{{ asset('images/project-med-1.jpg') }}" class="projects-item__images-big" data-lightbox="project-3" style="background-image: url({{ asset('images/project-med-1.jpg') }})"></a>
            <div class="projects-item__images-min">
              <a href="{{ asset('images/project-med-2.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-3" style="background-image: url({{ asset('images/project-med-2.jpg') }})"></a>
              <a href="{{ asset('images/project-med-3.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-3" style="background-image: url({{ asset('images/project-med-3.jpg') }})"></a>
            </div>
          </div>
          <div class="projects-item__info">
            <div class="projects-item__info-city">г. Москва</div>
            <div class="projects-item__info-qty">8 шт</div>
            <div class="projects-item__info-time">2 дня</div>
          </div>
          <div class="projects-item__text">
            Произведена установка восьми IP видеокамер в медицинском центре. Работа была выполнена всего за 2 дня.
          </div>
        </div>
        <div class="projects-item">
          <div class="projects-item__title">Установка системы видеонаблюдения на складе</div>
          <div class="projects-item__images">
            <a href="{{ asset('images/project-sklad-1.jpg') }}" class="projects-item__images-big" data-lightbox="project-4" style="background-image: url({{ asset('images/project-sklad-1.jpg') }})"></a>
            <div class="projects-item__images-min">
              <a href="{{ asset('images/project-sklad-2.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-4" style="background-image: url({{ asset('images/project-sklad-2.jpg') }})"></a>
              <a href="{{ asset('images/project-sklad-3.jpg') }}" class="projects-item__images-min-item" data-lightbox="project-4" style="background-image: url({{ asset('images/project-sklad-3.jpg') }})"></a>
            </div>
          </div>
          <div class="projects-item__info">
            <div class="projects-item__info-city">г. Москва</div>
            <div class="projects-item__info-qty">120 шт</div>
            <div class="projects-item__info-time">3 месяца</div>
          </div>
          <div class="projects-item__text">
            Установлено более 120 камер видеонаблюдения на складе. Работа ведется по текущий момент, т.к. по желанию заказчика со временем мы добавляем еще больше камер.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="advantages">
    <div class="container">
      <div class="advantages-item">
        <div class="advantages-item__number">1148</div>
        <div class="advantages-item__text">Камер мы установили с 2016 года</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__number">12</div>
        <div class="advantages-item__text">Сотрудников в штате<br> компании</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__number">70%</div>
        <div class="advantages-item__text">Клиентов приходят к нам по <br>рекомендации</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__number">6</div>
        <div class="advantages-item__text">Надежных поставщиков<br> систем видеонаблюдения</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__number">100+</div>
        <div class="advantages-item__text">Положительных отзывов от <br>наших клиентов</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__number">95%</div>
        <div class="advantages-item__text">Клиентов обращаются к нам<br> повторно</div>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Видеонаблюдение под ключ</div>
        <div class="section-header__title">Наши услуги</div>
      </div>
      <div class="features-wrapper">
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/services-1.jpg') }})"></div>
          <div class="features-item__title">Видеонаблюдение</div>
          <div class="features-item__text">Проектирование, установка и обслуживание систем видеонаблюдения различного назначения.</div>
        </div>
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/services-2.jpg') }})"></div>
          <div class="features-item__title">Система контроля и управления доступом</div>
          <div class="features-item__text">Проектирование, качественный монтаж систем контроля доступа (Вход по карточкам, контроль рабочего времени, фото идентификация, биометрия). Монтаж и обслуживание автоматических шлагбаумов.</div>
        </div>
        <div class="features-item">
          <div class="features-item__photo" style="background-image: url({{ asset('images/services-3.jpg') }})"></div>
          <div class="features-item__title">Охранные системы</div>
          <div class="features-item__text">Монтаж систем охранным и пожарных сигнализаций.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-dark reviews">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Благодарности наших клиентов</div>
        <div class="section-header__title">Отзывы о нашей работе</div>
      </div>

      <div class="slider-nav">
        <div class="reviews-nav__item" style="background-image: url({{ asset('images/review-block1.png') }})"></div>
        <div class="reviews-nav__item" style="background-image: url({{ asset('images/review-block2.png') }})"></div>
      </div>

      <div class="slider-for">
        <div class="slider-for__slide">
          <div class="slider-for__slide-img">
            <a href="{{ asset('images/review-1.jpg') }}" data-lightbox="reviews"><img src="{{ asset('images/review-1.jpg') }}" alt=""></a>
            <a href="{{ asset('images/review-2.jpg') }}" data-lightbox="reviews"><img src="{{ asset('images/review-2.jpg') }}" alt=""></a>
            <a href="{{ asset('images/review-3.jpg') }}" data-lightbox="reviews"><img src="{{ asset('images/review-3.jpg') }}" alt=""></a>
          </div>
        </div>
        <div class="slider-for__slide">
          <div class="slider-for__slide-img">
            <a href="{{ asset('images/review-4.jpg') }}" data-lightbox="reviews"><img src="{{ asset('images/review-4.jpg') }}" alt=""></a>
            <a href="{{ asset('images/review-5.jpg') }}" data-lightbox="reviews"><img src="{{ asset('images/review-5.jpg') }}" alt=""></a>
            <a href="{{ asset('images/review-6.jpg') }}" data-lightbox="reviews"><img src="{{ asset('images/review-6.jpg') }}" alt=""></a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="team">
    <div class="container">
      <div class="section-header">
        <div class="section-header__img"></div>
        <div class="section-header__subtitle">Команда профессионалов</div>
        <div class="section-header__title">Наши сотрудники</div>
      </div>
      <div class="team-wrapper">
        <div class="team-item">
          <div class="team-item__photo" style="background-image: url({{ asset('images/team-1.jpg') }})"></div>
          <div class="team-item__name">Николай Рыков</div>
          <div class="team-item__info">
            <div class="team-item__info-item">6 сертификатов</div>
            <div class="team-item__info-item">174 проекта</div>
          </div>
        </div>
        <div class="team-item">
          <div class="team-item__photo" style="background-image: url({{ asset('images/team-2.jpg') }})"></div>
          <div class="team-item__name">Роман Петренко</div>
          <div class="team-item__info">
            <div class="team-item__info-item">6 сертификатов</div>
            <div class="team-item__info-item">142 проекта</div>
          </div>
        </div>
        <div class="team-item">
          <div class="team-item__photo" style="background-image: url({{ asset('images/team-3.jpg') }})"></div>
          <div class="team-item__name">Вячеслав Казаков</div>
          <div class="team-item__info">
            <div class="team-item__info-item">2 сертификатa</div>
            <div class="team-item__info-item">71 проект</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="offer offer-free section-form">
    <div class="container">
      <div class="offer-photo" style="background-image: url({{ asset('images/team_new.png') }})"></div>
      <div class="offer-content">
        <h2 class="section-title">Закажите бесплатный подбор оборудования</h2>
        <div class="offer-text">Наши специалисты бесплатно проконсультируют Вас и помогут подобрать оптимальное решение по оборудованию и бюджету. Оставьте свой контактный телефон, и получите бесплатную консультацию прямо сейчас!</div>
        <form action="{{ route('leads.store') }}">
          <input type="tel" placeholder="Ваш телефон:">
          <a href="#" class="button uniSendBtn" data-mailmsg="Заявка блока Закажите бесплатный подбор оборудования">Отправить</a>
        </form>
        <div class="form-note">
          <input type="checkbox" checked="">
          <div class="form-note__text">
            <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contacts" id="contacts">
    <div class="container">
      <div class="contacts-block">
        <div class="contacts-title">Наши контакты</div>
        <div class="contacts-item">
          <strong>Станция метро Хорошево</strong>
          <span>г. Москва, проспект Маршала Жукова, д.2</span>
        </div>
        <div class="contacts-item">
          <span>E-mail:</span>
          <strong>bitrate.msk.ru@ya.ru</strong>
        </div>
        <div class="contacts-item">
          <span>Телефон:</span>
          <strong class="mgo-number">+7 (499) 110-46-13</strong>
        </div>
        <a href="https://yandex.ru/maps/?text=Москва, проспект Маршала Жукова, 2" class="contacts-button button" target="_blank" rel="noopener">Как до нас добраться?</a>
      </div>
    </div>
    <div id="yandex-map" style="width: 100%; height: 500px;"></div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        if (window.ymaps) {
            ymaps.ready(init);

            function init() {
                var myMap = new ymaps.Map("yandex-map", {
                        center: [55.77724106897233, 37.50389949999997],
                        zoom: 14,
                        controls: ['zoomControl']
                    }),
                    myPlacemarkAdr = new ymaps.Placemark([55.77724106897233, 37.50389949999997], {
                        iconContent: '',
                        balloonContent: 'Наш адрес: <b>Москва, проспект Маршала Жукова, д.2</b><br/>Телефон: <b>+7 (499) 110-46-13</b>',
                        hintContent: 'Наш адрес: <b>Москва, проспект Маршала Жукова, д.2</b><br/>Телефон: <b>+7 (499) 110-46-13</b>',
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '{{ asset('images/map.svg') }}',
                        iconImageSize: [30, 54],
                        iconImageOffset: [-15, -54]
                    });

                myMap.geoObjects.add(myPlacemarkAdr);
                myMap.behaviors.disable('scrollZoom');
            }
        }
    </script>
  </section>

@endsection
