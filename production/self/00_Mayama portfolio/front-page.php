<?php get_header(); ?>
<!-- メイン -->
<main>
  <!-- 制作実績 -->
  <section id="works" class="works">
    <div id="page__top" class="page__top__btn">
      <i class="fa-solid fa-arrow-up"></i>
    </div>
    <div class="inner">
      <div class="ttl__wrap">
        <h2 class="section__ttl-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/works_section__ttl_sp.png" alt="works画像" media="(max-width: 960px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/works_section__ttl.png" alt="works画像" width="218" height="217">
          </picture>
        </h2>
        <h3 class="section__ttl">制作実績</h3>
        <p>これまでのスクールの課題や自主制作をまとめております。</p>
        <a class="btn more__btn" href="<?php echo home_url("works"); ?>">もっとみる</a>
      </div>
      <div class="container">
        <!-- slick -->
        <ul class="slide-items">
          <?php
          $args = [
            'post_type' => 'post', // 投稿タイプ：投稿
            'posts_per_page' => 4, // 表示する数
          ];
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()) : // 投稿がある場合 
          ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <!-- ▽ ループ開始 ▽ -->
              <li>
                <a class="item" href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="works-image">
                      <?php the_post_thumbnail('medium'); ?>
                    </div>
                  <?php endif; ?>
                  <div class="hover-color">
                    <h2 class="item-ttl">
                      <?php the_title(); ?>
                    </h2>
                    <p class="item-txt">
                      <?php the_content(); ?>
                    </p>
                  </div>
                </a>
              </li>
              <!-- △ ループ終了 △ -->
            <?php endwhile; ?>
          <?php else : // 投稿がない場合
          ?>
            <p>まだ投稿がありません。</p>
          <?php endif;
          wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
  </section>
  <!-- Skills -->
  <section id="skills" class="skills">
    <div class="wrap">
      <h2 class="section__ttl-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/skills_section__ttl.png" alt="skills画像" width="130" height="107">
      </h2>
      <ul class="skills__content">
        <li>
          <h3 class="skills__content__ttl">デザイン</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/skills-design-img.png" alt="デザイン" width="180" height="180">
          <p>figmaを使用したデザイン制作、コーディング時にデザインカンプからの画像の書き出しを行うことが可能です。</p>
        </li>
        <li>
          <h3 class="skills__content__ttl">コーディング</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/skils-cordhing-img.png" alt="コーディング" width="180" height="180">
          <p>HTML/CSSでのサイト制作が可能です。
            レスポンシブ対応はもちろん、jQueryやJavascriptを使用して動きをつけたサイトの制作も可能ですのでご相談ください。</p>
        </li>
        <li>
          <h3 class="skills__content__ttl">WordPress</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/skills-wordpress-img.png" alt="WordPress" width="165" height="165">
          <p>WordPressのカスタマイズが可能です。0からWordPressのテーマを制作し、お客様に合ったデザイン、カスタマイズを行い、より更新しやすいサイトを制作します。</p>
        </li>
      </ul>
    </div>
  </section>
  <section id="about" class="about">
    <?php
    $args = [
      'post_type' => 'page', // 投稿タイプ：固定ページ
      // 'posts_per_page' => 3, // 表示する数
      'pagename' => 'about', // 該当の固定ページのスラッグ
    ];
    $the_query = new WP_Query($args); ?>
    <div class="wrap">
      <div class="about__txt">
        <h2 class="section__ttl-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/About-me_section_ttl_sp.png" media="(max-width: 960px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/About-me_section_ttl.png" alt="" width="218" height="217">
          </picture>
        </h2>
        <div class="about__txt__detail">
          <h3 class="section__ttl">わたしについて</h3>
          <div class="content__area">
            <div class="content__inner">
              <?php
              $page_id = get_page_by_path('about')->ID;
              $about_loop = CFS()->get('about_loop', $page_id);
              if ($about_loop) {
                $max_items = 3; // 最大表示数
                $count = 0; // カウンター変数

                foreach ($about_loop as $item) {
                  if ($count >= $max_items) {
                    break; // 最大表示数に達したらループ終了
                  }

                  if (isset($item['midashi']) && isset($item['content'])) {
                    $midashi = esc_html($item['midashi']);
                    $content = nl2br(esc_html($item['content']));
                    echo '<dl class="inner__item">';
                    echo '<dt>' . $midashi . '</dt>';
                    echo '<dd>' . $content . '</dd>';
                    echo '</dl>';
                    $count++;
                  }
                }
              } else {
                echo '<p>No custom fields found.</p>';
              }
              ?>
              </dl>
            </div>
            <a class="btn more__btn" href="<?php echo home_url('about'); ?>">もっとみる</a>
          </div>
        </div>
      </div>
      <div class="tweet-box">
        <a class="twitter-timeline" data-height="500" href="https://twitter.com/yuma_webst?ref_src=twsrc%5Etfw">Tweets by yuma_webst</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>