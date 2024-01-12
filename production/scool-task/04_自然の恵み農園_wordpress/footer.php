</main>
<!-- フッター -->
<footer>
  <div class="footer__inner y">
    <div class="footer__flex flex">
      <div class="footer__left">
        <div class="footer__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="自然の恵み農園ロゴ" width="169" height="29"></a></div>
        <div>〒123-4567<br>千葉県〇〇市××町1丁目23-45</div>
        <div class="phone">TEL:123-4567-8910<br>FAX:12-345-6789</div>
      </div>
      <div class="footer__right bold">
        <nav>
          <ul class="footer__gnav__nav flex-c">
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>">ホーム</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#about">私たちについて</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#works">活動紹介</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#faq">よくあるご質問</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#news">お知らせ</a></li>
            <li><a class="gnav__nav__item" href="<?php echo home_url(""); ?>#access">アクセス</a></li>
          </ul>
        </nav>
        <div class="sns-icons">
          <a class="circle" href="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/x-icon.svg" alt="Xアイコン" width="25" height="25">
          </a>
          <a class="circle" href="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/insta-icon.svg" alt="インスタグラムアイコン" width="25" height="25">
          </a>
          <a class="circle" href="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/youtube-icon.svg" alt="youtubeアイコン" width="25" height="25">
          </a>
        </div>
      </div>
    </div>
    <div class="copy-right a">&copy;shizen-no-megumi-nouen Inc .2023</div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/main.js"></script>
</body>

</html>