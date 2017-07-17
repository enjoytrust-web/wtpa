// ヘッダー｜ページトップへ戻るボタン スクロール量で表示切替
$(window).scroll(function(){
  if ($(window).scrollTop() > 100) {
    $('.g-header').addClass('scrolled');
    $('.topback').addClass('scrolled');
  } else {
    $('.g-header').removeClass('scrolled');
    $('.topback').removeClass('scrolled');
  }
});

// ページトップへ戻るボタン アクション
$(function(){
  $('.topback').click(function(){
    $('body,html').animate({
      scrollTop: 0},500, 'swing');
    return false;
  });
});

// ナビゲーショントリガーアクション
// $(function(){
//   $('.trigger-wrapper').click(function(){
//     $(this).toggleClass('active');
//     $('.g-nav').toggleClass('active');
//   });
// });

// フッターメニューのアコーディオン化（スマートフォンのみ）
$(function(){
  $('.dropmenu-list').click(function(){
    $(this).toggleClass('active');
    $(this).next().slideToggle();
  });
});



$(document).ready(function(){
  $('#js-top-mainvisual').on('init', function(){
    $('.top-mainvisual').addClass('initialized');
  });
  $('#js-top-mainvisual').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    // responsive: [
    //   {
    //     breakpoint: 768,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '40px',
    //       slidesToShow: 1
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '40px',
    //       slidesToShow: 1
    //     }
    //   }
    // ]
  });
});



