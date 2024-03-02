<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mayama Portfolio</title>
  <!-- css font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dee3a8d68b.js" crossorigin="anonymous"></script>
  <!-- css slick -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <!-- mycss -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <link rel="icon" href="../images/mayama-icon.png">
  <!-- jquery用 -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!--jQuery slick-->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?php wp_head(); ?>
</head>

<body><?php
      global $post;
      $slug = ($post && property_exists($post, 'post_name')) ? $post->post_name : '';

      // フロントページのとき
      if (is_front_page()) : ?>
    <div class="header page fv-section">
      <div class="header__ttl">
        <section class="fv">
          <!-- ここにフロントページの内容を追加 -->
        </section>
      </div>
    </div>
    <!-- アーカイブページのとき -->
  <?php elseif (is_archive() || is_single()) : ?>
    <div class="header page">
      <div class="header__ttl">
        <div class="header__ttl__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/works_section__ttl.png" alt="Works Image">
        </div>
        <div>
          <h2 class="section__ttl">制作実績</h2>
          <p>これまでのスクールの課題や自主制作をまとめております。</p>
        </div>
      </div>
    </div>
    <!-- 固定ページのとき -->
  <?php elseif ($slug === 'about') : ?>
    <div class="header page">
      <div class="header__ttl">
        <div class="header__ttl__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/About-me_section_ttl.png" alt="About Me Image">
        </div>
        <div>
          <h2 class="section__ttl">わたしについて</h2>
          <p>これまでの経歴やスキル、私自身についてまとめております</p>
        </div>
      </div>
    </div>
    <!-- お問い合わせページまたはThanksページのとき -->
  <?php elseif ($slug === 'contact' || $slug === 'contact-confirm' ||'contact-thanks') : ?>
    <div class="header page">
      <div class="header__ttl">
        <div class="header__ttl__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact_section_ttl.png" alt="Contact Image">
        </div>
        <div>
          <h2 class="section__ttl">お問い合わせ</h2>
        </div>
      </div>
    </div>
    <!-- それ以外（else）のとき -->
  <?php else : ?>
    <div class="header page">
      <div class="header__ttl">
        <div class="header__ttl__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/error_section__ttl.png" alt="error Image">
        </div>
        <div>
          <h2 class="section__ttl">エラー</h2>
        </div>
      </div>
    </div>
    <!-- 何も表示しない -->
  <?php endif; ?>
  <!-- ヘッダー -->
  <header id="header" class="header">
    <div class="header__inner">
      <h1><a class="header__logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mayama-icon.png" alt="Mayama-icon" width="767" height="767"></a>
      </h1>
      <div class="header__right">
        <nav>
          <ul class="gnav__nav">
            <li><a class="gnav__nav__item" href="<?php echo home_url(); ?>#">Home</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url("works"); ?>">Works</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(); ?>#skills">Skills</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url('about'); ?>#about">About me</a></li>
            <li><a class="gnav__nav__item contact__btn" href="<?php echo home_url('contact'); ?>"><img src="<?php echo get_template_directory_uri('contact'); ?>/images/contact-mail.png" alt="mail">Contact</a>
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