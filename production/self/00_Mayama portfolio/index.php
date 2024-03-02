<?php get_header(); ?>
<!-- メイン -->
<main>
  <!-- 制作実績 -->
  <section id="works" class="works">
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
                  <h2 class="item-ttl">
                    <?php the_title(); ?>
                  </h2>
                  <p class="item-txt">
                    <?php the_content(); ?>
                  </p>
                </a>
              </li>
              <!-- △ ループ終了 △ -->
            <?php endwhile; ?>
          <?php else : // 投稿がない場合
          ?>
            <p>まだ投稿がありません。</p>
          <?php endif;
          wp_reset_postdata(); ?>
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
  <!-- about -->
  <section id="about" class="about">
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
              <dl class="inner__item">
                <dt>出身・居住地</dt>
                <dd>岩手県盛岡市出身<br>横浜市在住</dd>
              </dl>
              <dl class="inner__item">
                <dt>職歴</dt>
                <dd>元岩手県職員（県税を担当）<br>現在はIT企業で事務サポート<br>SQLでの分析用データ抽出や入稿業務のサポート</dd>
              </dl>
              <dl class="inner__item school">
                <dt>スクール受講歴</dt>
                <dd>
                  <div>
                    <time datetime="2022-04">2022年4月</time>
                    <p>WEBマーケティング学習（BMP）</p>
                  </div>
                  <div>
                    <time datetime="2022-06">2022年6月</time>
                    <p>WEBデザイン学習（デイトラ）</p>
                  </div>
                  <div>
                    <time datetime="2023-06">2023年6月</time>
                    <p>WEB制作学習（A-TECH）</p>
                  </div>
                </dd>
              </dl>
            </div>
            <a class="btn more__btn" href="">もっとみる</a>
          </div>
        </div>
      </div>
      <div class="img__wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about_image01.png" alt="" width="360" height="480">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about_image02.png" alt="" width="481" height="336">
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>