</main>
<!-- フッター -->
<footer <?php if (is_home() || is_front_page()) : ?> class="fadein" <?php endif; ?>>
  <div class="footer__inner">
    <div class="footer__left">
      <div class="footer__logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="A-TECH テクノロジーロゴ" width="80" height="80">
        </a>
      </div>
      <div class="address">〒123-4567<br>&nbsp;東京都新宿区○○7丁目○○ビル309</div>
      <div class="phone">TEL:123-4567-8910<br>FAX:12-345-6789</div>
    </div>
    <div class="footer__right">
      <nav>
        <ul class="footer__gnav__nav">
          <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>">ホーム</a></li>
          <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#about">私たちについて</a></li>
          <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#service">サービス</a></li>
          <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#news">お知らせ</a></li>
          <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#access">アクセス</a></li>
        </ul>
      </nav>
      <div class="sns-icons">
        <a class="circle" href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/x-icon.svg" alt="Xアイコン" width="25" height="25">
        </a>
        <a class="circle" href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/insta-icon.svg" alt="インスタグラムアイコン" width="25" height="25">
        </a>
        <a class="circle" href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.svg" alt="youtubeアイコン" width="25" height="25">
        </a>
      </div>
    </div>
    <div class="copy-right">&copy;a-tech technology Inc .2023</div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/main.js"></script>
</body>

</html>