<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="modalline" id="lineIcon"></div>
        <div class="modalline" id="lineMsg"></div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal callback-modal" id="callback-modal">
        <div class="box-modal_close arcticmodal-close">Закрыть</div>
        <div class="modalline" id="lineIcon"></div>
        <div class="modalline" id="lineMsg">
            <h2>Обратный звонок</h2>
            <div class="modal-text">Заполните форму ниже и наши менеджеры свяжутся с вами и ответят на все, интересующие вас вопросы</div>
            <form action="{{ route('leads.store') }}" class="callback-form">
                <label for="">Введите ваш телефон</label>
                <input type="tel" name="tel" placeholder="+7 123 4567890">
                <a href="#" class="callback-link uniSendBtn">Отправить</a>
                <div class="form-note">
                    <input type="checkbox" checked="">
                    <div class="form-note__text">
                        <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal order-modal" id="order-modal">
        <div class="box-modal_close arcticmodal-close">Закрыть</div>
        <div class="modalline" id="lineIcon"></div>
        <div class="modalline" id="lineMsg">
            <h2>Обратный звонок</h2>
            <div class="modal-text">Укажите Ваши контактные данные в форме ниже, и мы свяжемся с Вами в ближайшие 15 минут</div>
            <form action="{{ route('leads.store') }}" class="order-form">
                <input type="tel" name="tel" placeholder="Ваш телефон">
                <a href="#" class="uniSendBtn button">Отправить</a>
                <div class="form-note">
                    <input type="checkbox" checked="">
                    <div class="form-note__text">
                        <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
