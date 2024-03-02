<?php get_header(); ?>
<!-- メイン -->
<main>
  <!-- 制作実績 -->
  <section class="archive works">
    <div class="inner">
      <div class="breadcrumbs">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
      <!-- カテゴリ -->
      <ul class="category__area">
        <li>
          <a href="<?php echo home_url('works'); ?>" class="category <?php if (!is_category()) {
                                                                        echo 'is-active';
                                                                      } ?>">全て
          </a>
        </li>
        <?php
        $all_categories = get_categories();

        foreach ($all_categories as $category) {
          // 親カテゴリーまたはサブカテゴリーを持つ親カテゴリーのみを表示
          if ($category->parent == 0 || get_categories(array('parent' => $category->term_id))) {
            echo '<li><a class="category js-category-link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
          }
        }
        ?>
      </ul>
      <div class="container">
        <div class="works__content__wrap">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="works__article-link hover-color">
                <div class="works__article-link-inner">
                  <div class="archive_thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                  <!-- <div class="works__content__txt"> -->
                  <p class="works__ttl">
                    <?php echo $post->post_title; ?>
                  </p>
                  <div class="category__wrap flex">
                    <?php
                    $cats = get_the_category();
                    foreach ($cats as $cat) {
                      echo '<div class="category">' . $cat->cat_name . '</div>';
                    }
                    ?>
                  </div>
                  <p class="date">
                    <?php
                    $fields = $cfs->get('loop');

                    foreach ($fields as $field) :
                      // works-date フィールドが入力されている場合のみ表示
                      if (!empty($field['works-date'])) :
                    ?>
                        <?php echo $field['works-date']; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </p>
                </div>
              </a>
          <?php
            } // end while
          } // end if
          ?>
        </div>
      </div>
      <!-- ページネーション -->
      <?php wp_pagenavi(); ?>
  </section>
</main>
<?php get_footer(); ?>