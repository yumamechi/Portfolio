<?php get_header(); ?>
<!-- ニュースページ -->
<div id="news__page" class="news__page">
  <div class="wrap">
    <nav>
      <ol class="breadcrumb y">
        <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
      </ol>
    </nav>
    <div class="section__ttl__wrap">
      <h2 class="section__ttl y bold">お知らせ一覧</h2>
    </div>
    <!-- タブ -->
    <ul class="tab__area y bold">
      <li class="tab <?php if (!is_category()) {
                    echo 'is-active';
                  } ?>">
        <a href="<?php echo home_url('news'); ?>">すべて
        </a>
      </li>
      <?php
      $categories = get_categories();
      foreach ($categories as $category) {
        echo '<li class="tab"><a class="js-category-link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      ?>
    </ul>
    <!-- すべてタブ -->
    <div class="panel active">
      <div>
        <!-- スマホ用 すべて-->
        <ul class="news__article__list sp__only">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
          ?>
              <li class="news__article__item flex-c">
                <?php if (has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full'); ?>
                  </a>
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" width="2732" height="1782">
                  </a>
                <?php endif; ?>
                <div class="category y">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    foreach ($categories as $category) {
                  ?>
                      <div><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></div>
                  <?php
                    }
                  }
                  ?>
                </div>
                <div class="txt__wrap">
                  <div class="flex-c">
                    <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
                  </div>
                  <div class="news__content y">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                      if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </a>
                  </div>
                  <div class="pc__only news__content__txt y">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_content(); ?>
                    </a>
                  </div>
                </div>
              </li>
          <?php
            } // end while
          } // end if
          ?>
          <?php wp_pagenavi(); ?>
        </ul>

        <!-- PC用 すべて-->
        <ul class="news__article__list pc__only">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
          ?>
              <li class="news__article__item flex-c">
                <div class="news__thumbnail">
                  <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('full'); ?>
                    </a>
                  <?php else : ?>
                    <a href="<?php the_permalink(); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" width="2732" height="1782">
                    </a>
                  <?php endif; ?>
                </div>
                <div class="txt__wrap">
                  <div class="flex-c">
                    <div class="date"><?php echo get_the_date(); ?></div>
                    <div class="category y">
                      <?php
                      $categories = get_the_category();
                      if ($categories) {
                        foreach ($categories as $category) {
                      ?>
                          <div><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></div>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </div>
                  <div class="news__content y">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                      if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </a>
                  </div>
                  <div class="pc__only news__content__txt y">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_content(); ?>
                    </a>
                  </div>
                </div>
              </li>
          <?php
            } // end while
          } // end if
          ?>
          <?php wp_pagenavi(); ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- お問い合わせ -->
  <section class="contact">
    <div class="wrap">
      <div class="contact__ttl__wrap">
        <h2 class="contact__ttl y bold">お問い合わせ</h2>
      </div>
      <p class="contact__txt y">お仕事のご相談、農園体験、牧場の見学,その他ご質問<br>お気軽にお問い合わせください。</p>
      <a class="contact__btn" href="<?php echo home_url("contact"); ?>"><div class="btn">お問い合わせ</div></a>
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
  <?php get_footer(); ?>