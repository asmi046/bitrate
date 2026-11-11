/* Theme behaviour: sliders, phone mask, modals, FAQ accordion, lead form.
   Source: custom.js. */

jQuery(document).ready(function ($) {
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    focusOnSelect: true
  });
  $('.packages-slider').slick({
    slidesToShow: 3,
    infinite: false,
    // fade: true,
    arrows: true,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
    centerPadding: '20px',
    responsive: [
      {
        breakpoint: 1040,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 880,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $(".phone-button, .popup-content").click(function(e) {
    e.preventDefault();
    var mailmsg = $(this).data('mailmsg');
    if (mailmsg) {
      $('#callback-modal input[name="msg"]').val(mailmsg);
      $('#order-modal input[name="msg"]').val(mailmsg);
    }
    $('#callback-modal').arcticmodal();
  });
  // $(".popup-content").click(function(e) {
  //   e.preventDefault();
  //   var mailmsg = $(this).data('mailmsg');
  //   $('#order-modal .uniSendBtn').attr('data-mailmsg', mailmsg);
  //   $('#order-modal').arcticmodal();
  // });
  $('.section-faq__item-answer').css('display', 'none');
  $(".section-faq__item-question").click(function() {
    $('.section-faq__item-answer').slideUp();
    $(".section-faq__item-question").removeClass('active');
    if($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      $(this).addClass('active');
      $(this).next().slideDown();
    }
  });

    lightbox.option({
      'albumLabel': '',
    })
  /* Lead forms are submitted with ajax, the result is shown in a popup window. */
  var leadForms = window.bitrateForms || {};
  var leadMessages = leadForms.messages || {};

  function escapeHtml(text) {
    return $('<div>').text(text === undefined || text === null ? '' : text).html();
  }

  function showLeadMessage(type, text) {
    var $modal = $('#messgeModal');
    if (!$modal.length) {
      return;
    }

    var isSuccess = (type === 'success');

    $modal
      .removeClass('message-modal--success message-modal--error')
      .addClass(isSuccess ? 'message-modal--success' : 'message-modal--error');

    $modal.find('#lineIcon').text(isSuccess ? '✓' : '!');
    $modal.find('#lineMsg').html(
      '<h2>' + (isSuccess ? 'Спасибо!' : 'Ошибка') + '</h2><p>' + escapeHtml(text) + '</p>'
    );

    $modal.arcticmodal();
  }

  $('form[data-lead-form]').on('submit', function (e) {
    e.preventDefault();

    var $form = $(this);
    var $phone = $form.find('input[type="tel"]').first();
    var $button = $form.find('button[type="submit"], .uniSendBtn');
    var value = $phone.val() || '';
    var digits = value.replace(/\D/g, '');
    var buttonLabel = $button.text();

    if (!digits) {
      $phone.css('background-color', '#ff91a4');
      showLeadMessage('error', leadMessages.emptyPhone);
      $phone.trigger('focus');
      return;
    }

    if (digits.length < 10 || value.indexOf('_') !== -1) {
      $phone.css('background-color', '#ff91a4');
      showLeadMessage('error', leadMessages.invalidPhone);
      $phone.trigger('focus');
      return;
    }

    $phone.css('background-color', '');

    /* The consent checkbox may live outside of the form, next to it. */
    var $consent = $form.find('input[name="consent"]');
    if (!$consent.length) {
      $consent = $form.parent().find('.form-note input[name="consent"]').first();
    }

    var data = $.grep($form.serializeArray(), function (field) {
      return field.name !== 'consent';
    });
    data.push({name: 'consent', value: $consent.is(':checked') ? '1' : '0'});
    data.push({name: 'page_url', value: window.location.href});

    $button.prop('disabled', true).addClass('is-loading').text(leadMessages.sending || buttonLabel);

    jQuery.ajax({
      url: leadForms.url,
      type: 'POST',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': leadForms.token,
        'X-Requested-With': 'XMLHttpRequest',
        'Accept': 'application/json'
      },
      data: data
    }).done(function (response) {
      $form[0].reset();
      $form.find('input[name="consent"]').prop('checked', true);

      if ($form.closest('.arcticmodal-container').length) {
        $.arcticmodal('close');
      }

      showLeadMessage('success', (response && response.message) || leadMessages.success);
    }).fail(function (xhr) {
      var text = leadMessages.error;

      if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
        var errors = xhr.responseJSON.errors;
        var first = errors[Object.keys(errors)[0]];
        if (first && first.length) {
          text = first[0];
        }
      }

      showLeadMessage('error', text);
    }).always(function () {
      $button.prop('disabled', false).removeClass('is-loading').text(buttonLabel);
    });
  });

  /* Smooth scrolling for the links that point to a section of the page. */
  $('a[href^="#"]:not([href="#callback-modal"]):not(.link-projects)').click(function(e) {
    var $target = $($(this).attr('href'));

    if (!$target.length || $target[0].offsetParent === null) {
      return;
    }

    e.preventDefault();

    $('html, body').animate({
      scrollTop: $target.offset().top
    }, 400);
  });

  var $page = $('html, body');

    $('.link-projects').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
        return false;
    });
});
