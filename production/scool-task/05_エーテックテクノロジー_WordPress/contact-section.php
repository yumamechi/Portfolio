<!-- お問い合わせ -->
<section id="contact" class="contact <?php echo (is_home() || is_front_page()) ? 'fadein' : ''; ?>">
  <div class="contact__ttl__wrap">
    <h2 class="contact__ttl">お問い合わせ</h2>
  </div>
  <p class="contact__txt">お仕事のご相談やその他ご質問<br>お気軽にお問い合わせください。</p>
  <a class="contact__btn btn-slide" href="<?php echo home_url("contact"); ?>">
    <div class="btn">お問い合わせ</div>
  </a>
  <div class="contact__detail">
    <dl>
      <dt>問い合わせ電話：</dt>
      <dd class="phone-number">123-4567-8910</dd>
    </dl>
    <dl>
      <dt>【受付時間】</dt>
      <dd>10:00 ~ 18:00（土日祝を除く）</dd>
    </dl>
  </div>
</section>