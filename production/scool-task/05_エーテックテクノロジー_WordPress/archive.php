<!-- ヘッター -->
<?php get_header(); ?>
<!-- archive -->
<section id="archive" class="archive-news page">
  <div class="section__separator">
    <span>News.</span>
    <span>お知らせ一覧</span>
  </div>
  <!-- カテゴリ -->
  <ul class="category__area">
    <li class="category <?php if (!is_category()) {
                          echo 'is-active';
                        } ?>">
      <a href="<?php echo home_url('news'); ?>">全て</a>
    </li>
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
      echo '<li class="category"><a class="js-category-link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    ?>
  </ul>
  <ul class="news__content__wrap">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
        <li class="news__article">
          <a href="<?php the_permalink(); ?>" class="news__article-link">
            <div class="news__content__txt">
              <div class="flex">
                <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                <div class="category">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    foreach ($categories as $category) {
                  ?>
                      <!-- <a href="<?php echo get_category_link($category->term_id); ?>"> -->
                        <?php echo $category->name; ?>
                      <!-- </a> -->
                  <?php
                    }
                  }
                  ?>
                </div>
              </div>
              <p class="news__ttl">
                <span>
                  <!-- <a href="<?php the_permalink(); ?>"> -->
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  <!-- </a> -->
                </span>
              </p>
            </div>
            <span class="dli-arrow-right pc__only"></span>
          </a>
        </li>
    <?php
      } // end while
    } // end if
    ?>
    <!-- ページネーション -->
    <?php wp_pagenavi(); ?>
  </ul>
</section>
<?php get_template_part('contact-section'); ?>
<!-- フッター -->
<?php get_footer(); ?>