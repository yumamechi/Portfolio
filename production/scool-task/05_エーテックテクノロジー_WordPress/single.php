<!-- ヘッター -->
<?php get_header(); ?>
<!-- single -->
<section id="single" class="single-news">
  <article>
    <div class="news__content__txt">
      <?php
      if (have_posts()) : // 投稿があれば処理に入る
        while (have_posts()) : // 投稿の数だけ繰り返す
          the_post(); // 回数に応じた投稿の情報を取得
      ?>

          <!-- ▽ ループ開始 ▽ -->
          <p class="news__ttl">
            <span><?php the_title(); ?></span>
          </p>
          <div class="flex">
            <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
            <div class="category">
              <?php
              $categories = get_the_category();
              if ($categories) {
                foreach ($categories as $category) {
              ?>
                  <div>
                    <a href="<?php echo get_category_link($category->term_id); ?>">
                      <?php echo $category->name; ?>
                    </a>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
    </div>
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('medium'); ?>
    <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="サムネイル" width="2732" height="1782">
    <?php endif; ?>
    <p class="txt">
      <?php echo cfs()->get('news-txt-1'); ?></p>
    <h2 class="ttl"><?php echo cfs()->get('news-ttl-2'); ?></h2>
    <p class="txt">
      <?php echo cfs()->get('news-txt-2'); ?>
    </p>
    <a href="<?php echo home_url("news"); ?>" class="btn archive__btn btn-slide">一覧に戻る</a>
    <!-- △ ループ終了 △ -->
  <?php endwhile; ?>
<?php else : // 投稿がない場合
?>
  <p>まだ投稿がありません。</p>
<?php endif;
      wp_reset_postdata(); ?>
  </article>
</section>
<?php get_template_part('contact-section'); ?>
<!-- フッター -->
<?php get_footer(); ?>