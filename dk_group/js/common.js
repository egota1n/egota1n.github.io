$(function() {
  $('.s_docs__list').slick({
    slidesToShow: 3,
    prevArrow: '<button type="button" class="slick-prev slick-arrow"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.656 23.9995L31.556 33.8995L28.728 36.7275L16 23.9995L28.728 11.2715L31.556 14.0995L21.656 23.9995Z" fill="#FFE500"/></svg></button>',
    nextArrow: '<button type="button" class="slick-next slick-arrow"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.344 24.0005L16.444 14.1005L19.272 11.2725L32 24.0005L19.272 36.7285L16.444 33.9005L26.344 24.0005Z" fill="#FFE500"/></svg></button>',
    responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  $('.s_docs__list .slick-slide:not(.slick-cloned) [data-fancybox]').fancybox({})

  $('.s_faq__title').on('click', function(event) {
    let $parent = $(this).closest('.s_faq__itm');
    $('.s_faq__itm').not($parent).removeClass('active')
    $('.s_faq__itm').not($parent).find('.s_faq__descr').slideUp(350)
    $parent.toggleClass('active');
    $parent.find('.s_faq__descr').slideToggle(350);
  });



  $('[data-fancybox]').fancybox({
    closeExisting: true,
    autoFocus: false,
    touch: false
  });


    //form send
  $(".ajax-form").submit(function(event) {
    var form = $(this);
    var data = new FormData(form[0]);
    form.addClass('no-submit');
    $.ajax({
      type: "POST",
      url: "./php/contact.php",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      success: function(msg) {
        if (msg) {
          form.removeClass('no-submit');
          form.trigger('reset');
          document.location.href = "success.html"
        }
      }
    });
    return false
  });


  // INPUT FOCUS
  $('.popup__field input').each(function() {
    var _this = $(this);
    if (_this.val() == "") {
      _this.closest('.popup__field').removeClass('isFocus')
    } else {
      _this.closest('.popup__field').addClass('isFocus')
    }
  })

  $('.popup__field input')
    .on('focus', function() {
      var _this = $(this);
      _this.closest('.popup__field').addClass('isFocus').removeClass('hasData');
    })
    .on('blur', function() {
      var _this = $(this);
      _this.closest('.popup__field').removeClass('isFocus');
      if (_this.val() == "") {} else {
        _this.closest('.popup__field').addClass('hasData');
      }
    });



  typeof(ymaps) != "undefined" ? ymaps.ready(function() {
    if ($('#map').length != 0) {
      var myMap = new ymaps.Map('map', {
          center: [55.73063356900151, 37.62819050000001],
          zoom: 15,
          controls: []
        }),
        myPlacemarkWithContent = new ymaps.Placemark([55.73063356900151, 37.62819050000001], {}, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#imageWithContent',
          // // Своё изображение иконки метки.
          iconImageHref: 'img/placeholder.svg',
          // // Размеры метки.
          iconImageSize: [82, 110],
          // // Смещение левого верхнего угла иконки относительно
          // // её "ножки" (точки привязки).
          iconImageOffset: [-41, -110],
          // // Смещение слоя с содержимым относительно слоя с картинкой.
          iconContentOffset: [0, 0],
        });
      myMap.geoObjects.add(myPlacemarkWithContent);
    }
  }): true;



});