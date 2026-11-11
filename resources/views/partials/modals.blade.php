<div style="display: none;">
    <div class="box-modal message-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="modalline message-modal__icon" id="lineIcon"></div>
        <div class="modalline message-modal__text" id="lineMsg"></div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal callback-modal" id="callback-modal">
        <div class="box-modal_close arcticmodal-close">Закрыть</div>
        <div class="modalline" id="lineIcon"></div>
        <div class="modalline" id="lineMsg">
            <h2>Обратный звонок</h2>
            <div class="modal-text">Заполните форму ниже и наши менеджеры свяжутся с вами и ответят на все, интересующие вас вопросы</div>
            <form action="{{ route('leads.store') }}" method="post" class="callback-form" data-lead-form>
                @csrf
                <input type="hidden" name="source" value="callback-modal">
                <input type="hidden" name="msg" value="Заказ обратного звонка">
                <label for="">Введите ваш телефон</label>
                <input type="tel" name="tel" placeholder="+7 123 4567890" required>
                <button type="submit" class="callback-link uniSendBtn">Отправить</button>
                <div class="form-note">
                    <input type="checkbox" name="consent" value="1" checked="">
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
            <form action="{{ route('leads.store') }}" method="post" class="order-form" data-lead-form>
                @csrf
                <input type="hidden" name="source" value="order-modal">
                <input type="hidden" name="msg" value="Заказ обратного звонка">
                <input type="tel" name="tel" placeholder="Ваш телефон" required>
                <button type="submit" class="uniSendBtn button">Отправить</button>
                <div class="form-note">
                    <input type="checkbox" name="consent" value="1" checked="">
                    <div class="form-note__text">
                        <span>Нажимая на кнопку "Оставить заявку", я даю согласие на обработку персональных данных и соглашаюсь c <a href="/politika-konfidenczialnosti/" target="_blank">политикой конфиденциальности</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
