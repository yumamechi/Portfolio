<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A-TECHテクノロジー</title>

  <!-- css読み込み -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

  <!-- icon -->
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

  <!-- font -->
  <link rel="stylesheet" href="https://use.typekit.net/lzm4uwi.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500&display=swap" rel="stylesheet">

  <!-- jquery用 -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="A-TECH テクノロジーロゴ" width="80" height="80">A-TECH&nbsp;テクノロジー
        </a>
      </h1>
      <div class="header__right">
        <nav>
          <ul class="gnav__nav">
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#about">私たちについて</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#service">サービス</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#news">お知らせ</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#access">アクセス</a></li>
            <li>
              <div class="sp__only contact__detail">
                <dl class="flex-c">
                  <dt>問い合わせ電話：</dt>
                  <dd class="phone-number">123-4567-8910</dd>
                </dl>
                <dl class="flex-c">
                  <dt>【受付時間】</dt>
                  <dd>10:00 ~ 18:00（土日祝を除く）</dd>
                </dl>
              </div>
              <a class="btn gnav__nav__item gnav__nav__contact" href="<?php echo home_url("contact"); ?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <a class="hamburger sp__only" href="#">
          <span class="hamburger__bar"></span>
          <span class="hamburger__bar"></span>
          <span class="hamburger__bar"></span>
        </a>
      </div>
    </div>
  </header>
  <main>