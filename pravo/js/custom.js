$(document).ready(function(){
  // Инициализация слайдера в первом экране
  $('.slider').slick({
    infinite: false
  });

  // Инициализация слайдера с партнерами
  $('.partners__slider').slick({
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          rows: 2,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

  // Инициализация слайдера с отзывами
  $('.reviews__list').slick({
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 1,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  // Меню
  $('.burger-menu').click(function() {
    $('.header').toggleClass('header--open-menu');
  });

  //Подменю
  $('.main-menu__link--open-submenu').click(function() {
    if ($(window).width() <= '767') {
      event.preventDefault();
      $('.main-menu__item--with-submenu').toggleClass('main-menu__item--active-submenu');
    }
  });
});
