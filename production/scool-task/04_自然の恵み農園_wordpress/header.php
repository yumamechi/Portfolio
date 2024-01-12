<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる</title>
  <meta name="format-detection" content="telephone=no" />
  <!-- <meta name="robots" content="noindex,nofollow"> -->
  <meta name="description" content="自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />

  <!-- favicon/webclipicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" />

  <!-- ogp -->
  <meta property="og:site_name" content="自然の恵み農園" />
  <meta property="og:url" content="https://ymweb0122.xsrv.jp/a-tech-test-cordhing/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる" />
  <meta property="og:description" content="自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
  <meta property="og:locale" content="ja_JP" />
  <!-- <meta property="fb:app_id" content="AppID"> -->
  <meta name="twitter:card" content="summary" />
  <!-- <meta name="twitter:site" content="" /> -->
  <meta name="twitter:description" content="自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />
  <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?<?php echo filemtime(get_stylesheet_directory() . '/css/style.css'); ?>">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&family=Noto+Sans+JP&display=swap" rel="stylesheet">

  <!-- css slick -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

  <!-- jquery用 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--Query slick-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header class="header">
    <div class="header__inner y">
      <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="自然の恵み農園ロゴ" width="169" height="29"></a></h1>
      <div class="header__right">
        <nav>
          <ul class="gnav__nav bold">
            <li class="sp__only"><a class="gnav__nav__item" href="<?php echo home_url(""); ?>">トップ<span>TOP</span></a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#about">私たちについて<span class="sp__only">ABOUT</span></a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#works">活動紹介<span class="sp__only">WORKS</span></a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#faq">よくあるご質問<span class="sp__only">FAQ</span></a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#news">お知らせ<span class="sp__only">NEWS</span></a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#access">アクセス<span class="sp__only">ACCESS</span></a></li>
            <li>
              <div class="sp__only contact__detail">
                <dl class="flex-c y bold">
                  <dt>問い合わせ電話<span class="pc__only">：</span></dt>
                  <dd class="phone-number">123-4567-8910</dd>
                </dl>
                <dl class="flex-c y bold">
                  <dt>【受付時間】</dt>
                  <dd>10:00 ~ 18:00（土日祝を除く）</dd>
                </dl>
              </div><a class="gnav__nav__item gnav__nav__contact" href="<?php echo home_url("contact"); ?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <a class="hamburger sp__only" href="#">
          <span class="hamburger__bar"></span>
          <span class="hamburger__bar"></span>
          <span class="hamburger__bar__menu"></span>
        </a>
      </div>
    </div>
  </header>
  <main>