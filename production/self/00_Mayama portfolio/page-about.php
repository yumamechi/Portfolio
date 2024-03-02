<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>
<!-- メイン -->
<main>
  <!-- about -->
  <section class="about page">
    <div class="wrap">
      <div class="about__page__detail">
        <h3>わたしの説明</h3>
        <div class="content__area">
          <div class="content__inner">
            <?php
            $page_id = get_page_by_path('about')->ID;
            $about_loop = CFS()->get('about_loop', $page_id);
            if ($about_loop) {
              foreach ($about_loop as $item) {
                if (isset($item['midashi']) && isset($item['content'])) {
                  $midashi = esc_html($item['midashi']);
                  $content = nl2br(esc_html($item['content']));
                  echo '<dl class="inner__item">';
                  echo '<dt>' . $midashi . '</dt>';
                  echo '<dd>' . $content . '</dd>';
                  echo '</dl>';
                }
              }
            } else {
              echo '<p>No custom fields found.</p>';
            }
            ?>
          </div>
          <div class="img__wrap">
            <?php the_post_thumbnail('medium'); ?>
          </div>
        </div>
        <!-- slick -->
        <ul class="slide-items">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/snow-board.jpg" alt="snow-board"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/mountain.png" alt="mountain"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/hawaii-hibiscus.jpg" alt="hawaii-hibiscus"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/monkey.jpg" alt="monkey"></li>
        </ul>
        <div class="tweet-box">
          <a class="twitter-timeline" data-height="500" href="https://twitter.com/yuma_webst?ref_src=twsrc%5Etfw">Tweets by yuma_webst</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </section>
  <!-- Skills -->
  <section class="skills page">
    <div class="wrap">
      <h2 class="section__ttl-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/skills_section__ttl.png" alt="" width="130" height="107">
      </h2>
      <ul class="skills__content">
        <li>
          <h3 class="skills__content__ttl">デザイン</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/skills-design-img.png" alt="" width="180" height="180">
          <p>figmaを使用したデザイン制作、コーディング時にデザインカンプからの画像の書き出しを行うことが可能です。</p>
        </li>
        <li>
          <h3 class="skills__content__ttl">コーディング</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/skils-cordhing-img.png" alt="" width="180" height="180">
          <p>HTML/CSSでのサイト制作が可能です。
            レスポンシブ対応はもちろん、jQueryやJavascriptを使用して動きをつけたサイトの制作も可能ですのでご相談ください。</p>
        </li>
        <li>
          <h3 class="skills__content__ttl">WordPress</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/skills-wordpress-img.png" alt="" width="165" height="165">
          <p>WordPressのカスタマイズが可能です。0からWordPressのテーマを制作し、お客様に合ったデザイン、カスタマイズを行い、より更新しやすいサイトを制作します。</p>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>