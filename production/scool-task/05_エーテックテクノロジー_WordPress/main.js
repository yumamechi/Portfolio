// //ヘッダー、フッターの読み込み
// $(function () {
//   $("#header").load("header.html");
//   $("#footer").load("footer.html");
// });

//ヘッダーメニュー
$(function () {
  $(".hamburger").click(function (e) {
    e.preventDefault();
    
    if ($(this).hasClass('active')) {
      // ハンバーガーメニューが閉じられるとき
      closeMenu();
      enableScroll(); // スクロールを再有効化
    } else {
      // ハンバーガーメニューが開かれるとき
      openMenu();
      disableScroll(); // スクロールを禁止
    }
  });

  $('.gnav__nav li').on('click', function (event) {
    // メニュー項目がクリックされたとき
    closeMenu();
    enableScroll(); // スクロールを再有効化
  });

  function openMenu() {
    $(".hamburger").addClass('active');
    $(".gnav__nav").addClass('active');
    $("body").addClass("active");
  }

  function closeMenu() {
    $(".hamburger").removeClass('active');
    $(".gnav__nav").removeClass('active');
    $("body").removeClass("active");
  }

  function disableScroll() {
    // スクロール禁止
    $("body").css("overflow", "hidden");
  }

  function enableScroll() {
    // スクロールを再有効化
    $("body").css("overflow", "");
  }
});



// フェードイン表示
$(window).on('scroll load', function (i) {
  var scTop = $(this).scrollTop();
  var scBottom = scTop + $(this).height();
  $('.fadein').each(function (i) {
    var thisPos = $(this).offset().top + 300;
    if (thisPos < scBottom) {
      $(this).addClass('animate');
    }
  });
});

//最新お知らせ非表示
$(function () {
  var pagetop = $('#pickup__news');
  var scrollThreshold = $(window).width() < 765 ? 400 : 250;
  $(window).scroll(function () {
    if ($(this).scrollTop() > scrollThreshold) {
      pagetop.fadeOut();
    } else {
      pagetop.fadeIn();
    }
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