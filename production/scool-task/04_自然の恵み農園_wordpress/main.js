//ヘッダー、フッターの読み込み
$(function () {
  $("#header").load("header.html");
  $("#footer").load("footer.html");
});

//ヘッダーメニュー
$(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass('active');
    $(".gnav__nav").toggleClass('active');
    $("body").toggleClass("active");//ハンバーガーメニュー展開時背景をスクロールさせない
    $('.hamburger a[href]').on('click', function (event) {
      $(".gnav__nav").removeClass("active");
    });
  });
});

//タブ切り替え
$(function () {
  $('.activity .tab').on('click', function () {
    $('.activity .tab, .panel').removeClass('active');

    $(this).addClass('active');

    var index = $('.activity .tab').index(this);
    $('.activity .panel').eq(index).addClass('active');
  });
});


//slick
$(document).ready(function () {
  $('.slide-items').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3000,
    cssEase: 'linear',
    slidesToShow: 3.5,
    swipe: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
    rtl: true,
    responsive: [
      {
        breakpoint: 600, 
        settings: {
          slidesToShow: 1.5,
          centerMode: false,
          centerPadding: "15%",
        },
      },
    ],
    responsive: [
      {
        breakpoint: 400, 
        settings: {
          slidesToShow: 1,
          adaptiveHeight: true,
          centerMode: true,
          centerPadding: "15%",
        },
      },
    ],
    respondTo: 'slider'
  });
  $('.tab__area > li').on('click', function () {
    slider.slick('setPosition');
  });
});


//アコーディオン
$(document).ready(function () {
  $('.inner__item:first-child').addClass('open').find('dd').slideDown();
  $('.inner__item:first-child .is-show').addClass('open');
  $('.is-show').click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass("open");
    $(this).parent().toggleClass("open");
    $('.is-show').not($(this)).next().slideUp();
    $('.is-show').not($(this)).removeClass('open');
  });
});


/* フェードイン表示 */
$(window).on('scroll load', function (i) {
  var scTop = $(this).scrollTop();
  var scBottom = scTop + $(this).height();
  $('.fadein').each(function (i) {
    var thisPos = $(this).offset().top + 100;
    if (thisPos < scBottom) {
      $(this).addClass('animate');
    }
  });
  $('.group_animate').each(function (i) {
    var thisPos = $(this).offset().top + 100;
    if (thisPos < scBottom) {
      $(".group-fadein", this).each(function (i) {
        $(this).delay(i * 300).queue(function (next) {
          $(this).addClass('group-active');
          next();
        });
      });
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

//お問い合わせ種別プルダウンリスト
$(".custom-select").each(function () {
  var classes = $(this).attr("class"),
    id = $(this).attr("id"),
    name = $(this).attr("name");
  var defaultText = "選択してください"; // デフォルトの表示テキスト

  var template = '<div class="' + classes + '">';
  template += '<span class="custom-select-trigger">' + defaultText + '</span>';
  template += '<div class="custom-options">';
  $(this).find("option").each(function () {
    template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
  });
  template += '</div></div>';

  $(this).wrap('<div class="custom-select-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$(".custom-option:first-of-type").hover(function () {
  $(this).parents(".custom-options").addClass("option-hover");
}, function () {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function () {
  $('html').one('click', function () {
    $(".custom-select").removeClass("opened");
  });
  $(this).parents(".custom-select").toggleClass("opened");
  event.stopPropagation();
});
$(".custom-option").on("click", function () {
  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select").removeClass("opened");
  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
  $(this).parents(".custom-select-wrapper").find(".custom-select-trigger").css('color', '#555555'); // 選択された後の文字色を黒に変更
});



//お問い合わせ種別プルダウン選択なしの場合のエラー
$('.wpcf7-form').on('submit', function (e) {
  var customSelect = $(this).find('.custom-select');
  var selectedText = customSelect.find('.custom-select-trigger').text().trim();
  var errorMessageContainer = customSelect.find('.wpcf7-not-valid-tip');

  if (selectedText !== '選択してください') {
    // 選択がされている場合でエラーメッセージが表示されている場合は削除
    customSelect.removeClass('has-error');
    errorMessageContainer.remove();

  } else if (selectedText === '選択してください' && !errorMessageContainer.length) {
    // 選択がされていない場合でエラーメッセージが表示されていない場合は新しいエラーメッセージを追加
    var errorMessage = $('<span class="wpcf7-not-valid-tip" aria-hidden="true">入力は必須です</span>');
    customSelect.addClass('has-error');
    customSelect.append(errorMessage);
  }
});






