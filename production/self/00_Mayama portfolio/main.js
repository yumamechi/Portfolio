$(function () {
  $(".hamburger").click(function () {
    // メニューの開閉状態をトグル
    $(this).toggleClass('active');
    $(".gnav__nav").toggleClass('active');
    $("body").toggleClass("menu-active");

    // メニューが開かれたときの処理
    if ($("body").hasClass("menu-active")) {
      disableBodyScroll();
    } else {
      // メニューが閉じられたときの処理
      enableBodyScroll();
    }
  });

  // ハンバーガーメニュー内のリンククリック時の動作
  $('.gnav__nav a[href]').on('click', function (event) {
    // メニューが閉じられたときの処理
    $(".hamburger").removeClass('active');
    $(".gnav__nav").removeClass("active");
    $("body").removeClass("menu-active");
    enableBodyScroll();
  });

  // bodyのスクロールを無効にする処理
  function disableBodyScroll() {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    $("body").data("scroll-top", scrollTop);
    $("body").css({
      height: "100%",
      overflow: "hidden"
    });
  }

  // bodyのスクロールを有効にする処理
  function enableBodyScroll() {
    var scrollTop = $("body").data("scroll-top") || 0;
    $("body").css({
      height: "",
      overflow: ""
    });
    window.scrollTo(0, scrollTop);
  }
});

//スリックスライド
$(function () {
  $(".slide-items").slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2500,
    adaptiveHeight: true,
    // centerMode: true,
    centerPadding: "15%",
    dots: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 701,
        settings: {
          slidesToShow: 1,
          centerPadding: "13%",
          centerMode: true,
        },
      },
    ],
  });
});

//カテゴリーページでカレント表示
$(function () {
  let currentUrl = window.location.href;
  $('.js-category-link').each(function () {
    let linkUrl = $(this).attr('href');
    if (currentUrl === linkUrl) {
      $(this).parent().toggleClass('is-active');
    }
  });
});

//トップへ戻る
$(function () {
  var pagetop = $('#page__top');
  // ボタン非表示
  pagetop.hide();
  // 200px スクロールしたらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 300);
    return false;
  });
});

