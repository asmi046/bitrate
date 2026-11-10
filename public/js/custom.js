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

  $(".phone-button, .header-callback, .popup-content").click(function(e) {
    e.preventDefault();
    var mailmsg = $(this).data('mailmsg');
    $('#callback-modal .uniSendBtn').attr('data-mailmsg', mailmsg);
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
  jQuery(".uniSendBtn").click(function(e){ 
      e.preventDefault();
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = jQuery(this).siblings('input[type=tel]');
      
      if ((phone.val() == "")||(phone.val().indexOf("_")>0)) {
        phone.css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            msg: message,
            tel: phone.val()
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          $.arcticmodal('close');
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });
  var $page = $('html, body');
    $('.link-projects').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
        return false;
    });
});
