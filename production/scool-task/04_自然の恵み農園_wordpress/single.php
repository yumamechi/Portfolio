<!-- ヘッター -->
<?php get_header(); ?>
<!-- ニュース詳細ページ -->
<div id="news__detail" class="news__page news__detail">
  <div class="wrap">
    <nav>
      <ol class="breadcrumb y">
        <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
      </ol>
    </nav>
    <div class="detail__ttl__wrap">
      <?php
      if (have_posts()) : // 投稿があれば処理に入る
        while (have_posts()) : // 投稿の数だけ繰り返す
          the_post(); // 回数に応じた投稿の情報を取得
      ?>

          <!-- ▽ ループ開始 ▽ -->
          <h2 class="news__ttl y bold"><?php the_title(); ?></h2>
          <div class="flex-c">
            <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
            <div class="category">
              <?php
              $categories = get_the_category();
              if ($categories) {
                foreach ($categories as $category) {
              ?>
                  <div>
                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
    </div>
    <article class="news__article">
      <div class="news__article__inner">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" width="2732" height="1782">
        <?php endif; ?>
        <div class="txt__wrap">
          <div class="index__wrap">
            <p class="index__ttl y bold">目次</p>
            <ol class="index y bold">
              <li class="index-number"><?php echo cfs()->get('news-ttl1'); ?></li>
              <ul>
                <li class="bullet-points"><?php echo cfs()->get('news-ttl1-2'); ?></li>
              </ul>
              <li class="index-number"><?php echo cfs()->get('news-ttl2'); ?></li>
              <ul>
                <li class="bullet-points"><?php echo cfs()->get('news-ttl2-2'); ?></li>
              </ul>
            </ol>
          </div>
          <div class="news__article__txt y">
            <div class="news__article__txt-1">
              <h3 class="news__article__txt__ttl-1"><?php echo cfs()->get('news-ttl1'); ?></h3>
              <div class="news__article__txt__body-1">
                <?php echo cfs()->get('news-txt1'); ?>
              </div>
              <h4 class="news__article__txt__ttl-2"><?php echo cfs()->get('news-ttl1-2'); ?></h4>
              <ul>
                <li class="news__article__txt__list">リスト項目</li>
                <li class="news__article__txt__list">リスト項目</li>
                <li class="news__article__txt__list">リスト項目</li>
                <li class="news__article__txt__list">リスト項目</li>
                <li class="news__article__txt__list">リスト項目</li>
              </ul>
              <div class="news__article__txt__body-2">
                <?php echo cfs()->get('news-txt1-2'); ?>
              </div>
            </div>
          </div>
          <div class="news__article__txt y">
            <div class="news__article__txt-2">
              <h3 class="news__article__txt__ttl-1"><?php echo cfs()->get('news-ttl2'); ?></h3>
              <div class="news__article__img__wrap flex-c">
                <div class="news__article__txt__body-1">
                  <?php echo cfs()->get('news-txt2'); ?>
                </div>
                <?php if (get_post_meta($post->ID, 'image', true)) : ?>
                  <img src="<?php echo cfs()->get('image'); ?>">
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" width="2732" height="1782">
                <?php endif; ?>
              </div>
              <h4 class="news__article__txt__ttl-2"><?php echo cfs()->get('news-ttl2-2'); ?></h4>
              <div class="news__article__txt__body-2">
                <?php echo cfs()->get('news-txt2-2'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- △ ループ終了 △ -->
    <?php endwhile; ?>
  <?php else : // 投稿がない場合
  ?>
    <p>まだ投稿がありません。</p>
  <?php endif;
      wp_reset_postdata(); ?>
  <a class="y archive-top__btn" href="<?php echo home_url("news"); ?>">
    <div class="btn">一覧に戻る</div>
  </a>
    </article>
  </div>
</div>
<!-- お問い合わせ -->
<section class="contact">
  <div class="wrap">
    <div class="contact__ttl__wrap">
      <h2 class="contact__ttl y bold">お問い合わせ</h2>
    </div>
    <p class="contact__txt y">お仕事のご相談、農園体験、牧場の見学,その他ご質問<br>お気軽にお問い合わせください。</p>
    <a class="contact__btn" href="<?php echo home_url("contact"); ?>">
      <div class="btn">お問い合わせ</div>
    </a>
    <div class="contact__detail">
      <dl class="flex-c y bold">
        <dt>問い合わせ電話：</dt>
        <dd class="phone-number">123-4567-8910</dd>
      </dl>
      <dl class="flex-c y bold">
        <dt>【受付時間】</dt>
        <dd>10:00 ~ 18:00（土日祝を除く）</dd>
      </dl>
    </div>
  </div>
</section>
<!-- フッター -->
<?php get_footer(); ?>