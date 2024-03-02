<!-- ヘッター -->
<?php get_header(); ?>
<!-- fv -->
<section class="fv">
  <h2 class="fv__ttl">未来を形にする<br class="sp__only">テクノロジー</h2>
  <div class="scrolldown4 circle pc__only">
    <img src="<?php echo get_template_directory_uri(); ?>/images/↓.png" alt="スクロールダウン">
  </div>

  <!-- ピックアップニュース -->
  <div id="pickup__news" class="pickup__news">
    <?php
    $args = [
      'post_type' => 'post', // 投稿タイプ：投稿
      'posts_per_page' => 1, // 表示する数
    ];
    $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : // 投稿がある場合 
    ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a class="pickup__news__inner" href="<?php echo home_url("news"); ?>">
          <p class="pickup__news__ttl">News</p>
          <p class="pickup__news__date"><?php echo get_the_date(); ?></p>
          <div class="pickup__news__txt">
            <span>
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 17) {
                $title = mb_substr($post->post_title, 0, 17, 'UTF-8');
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
              ?>
            </span>
          </div>
        </a>
      <?php endwhile; ?>
    <?php else : // 投稿がない場合
    ?>
      <p>まだ投稿がありません。</p>
    <?php endif;
    wp_reset_postdata(); ?>
  </div>
</section>

<!-- 私たちについて -->
<section id="about" class="about fadein">
  <div class="wrap">
    <h3 class="about__ttl">
      <span>A-TECH</span>
      <span>テクノロジーについて</span>
    </h3>
    <p>
      A-TECH テクノロジーは、<br>テクノロジーの力でビジネスの未来を形作る<br class="sp__only">イノベーションリーダーです。<br>私たちは革新的なITソリューションを提供し、お客様のビジョンを現実にするお手伝いをしています。
    </p>
    <p>
      最新のセキュリティテクノロジーを活用し、お客様のデータとシステムを確実に守ります。<br>未来を共に切り拓くためのパートナーシップの一環として、私たちと一緒に進んでいきませんか？
    </p>
  </div>
</section>
<!-- サービス -->
<section id="service" class="service fadein">
  <div class="section__separator">
    <span>Our Services.</span>
    <span>サービス</span>
  </div>
  <article class="service__content fadein">
    <div class="service__content__txt">
      <span class="counter"></span>
      <div class="service__content__ttl__wrap">
        <h2 class="service__content__ttl">Digital Transformation</h2>
        <span class="service__content__ttl-sub">デジタルトランスフォーメーション</span>
      </div>
      <p>ビジネスを次のレベルに引き上げるための<br>包括的なデジタル変革戦略を提供します。</p>
    </div>
    <div class="service__img__container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img01.png" alt="デジタルトランスフォーメーション" width="820" height="600">
    </div>
  </article>
  <article class="service__content-reverse fadein">
    <div class="service__content__txt">
      <span class="counter-reverse"></span>
      <div class="service__content__ttl__wrap">
        <h2 class="service__content__ttl">CustomSoftware</h2>
        <span class="service__content__ttl-sub">カスタムソフトウェア開発</span>
      </div>
      <p>お客様のニーズに合わせてデザインされた<br>ソフトウェアソリューションを提供し、<br>業績向上を実現します。</p>
      <div class="service__img__container-reverse">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img02.png" alt="カスタムソフトウェア開発" width="820" height="600">
      </div>
    </div>
  </article>
  <article class="service__content fadein">
    <div class="service__content__txt">
      <span class="counter"></span>
      <div class="service__content__ttl__wrap">
        <h2 class="service__content__ttl">Cyber Security</h2>
        <span class="service__content__ttl-sub">サイバーセキュリティ</span>
      </div>
      <p>最新のセキュリティテクノロジーを活用し、<br>お客様のデータとシステムを<br class="pc__only">確実に守ります。​</p>
    </div>
    <div class="service__img__container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img03.png" alt="サイバーセキュリティ" width="820" height="600">
    </div>
  </article>
</section>
<!-- お知らせ -->
<section id="news" class="news fadein">
  <div class="section__separator">
    <span>News.</span>
    <span>お知らせ</span>
  </div>
  <div class="news__content__wrap">
    <?php
    $args = [
      'post_type' => 'post', // 投稿タイプ：投稿
      'posts_per_page' => 3, // 表示する数
    ];
    $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : // 投稿がある場合 
    ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- ▽ ループ開始 ▽ -->
        <article>
          <a href="<?php the_permalink(); ?>" class="news__article-link">
            <div class="news__content__txt">
              <div class="flex">
                <p class="date"><?php echo get_the_date(); ?></p>
                <div class="category">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    foreach ($categories as $category) {
                  ?>
                      <div>
                        <!-- <a href="<?php echo get_category_link($category->term_id); ?>"> -->
                          <?php echo $category->name; ?>
                        <!-- </a> -->
                      </div>
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
                  if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                    $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
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
        </article>
        <!-- △ ループ終了 △ -->
      <?php endwhile; ?>
    <?php else : // 投稿がない場合
    ?>
      <p>まだ投稿がありません。</p>
    <?php endif;
    wp_reset_postdata(); ?>
    <a class="more__btn" href="<?php echo home_url("news"); ?>">View All</a>
  </div>
</section>
<!-- 会社概要 -->
<section id="overview" class="overview fadein">
  <div class="section__separator">
    <span>Overview.</span>
    <span>会社概要</span>
  </div>
  <div class="content__area">
    <div class="content__inner">
      <?php
      $page_id = get_page_by_path('company')->ID; // 'company' スラッグを持つ固定ページのIDを取得
      $company_loop = CFS()->get('company_loop', $page_id); // 'company_loop' カスタムフィールドの値を取得

      if ($company_loop) {
        foreach ($company_loop as $item) {
          if (isset($item['midashi']) && isset($item['content'])) {
            $midashi = esc_html($item['midashi']);
            $content = esc_html($item['content']);

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
  </div>
</section>
<!-- アクセス -->
<section id="access" class="access fadein">
  <div class="section__separator">
    <span>Map.</span>
    <span>アクセス</span>
  </div>
  <div class="map">
    <a class="map-bg" href="https://www.google.com/maps/place/%E3%83%97%E3%83%A9%E3%82%B6%E8%A5%BF%E6%96%B0%E5%AE%BF/@35.696433,139.698453,18z/data=!4m6!3m5!1s0x60188d47b933b8a9:0xc55e469bec7f242!8m2!3d35.6964328!4d139.6984526!16s%2Fg%2F11l6y4_g_w?hl=ja&entry=ttu">拡大地図を表示</a>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003.6819825009846!2d139.6975300659564!3d35.69664808343915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d29c9477d93%3A0xc630f2235e00f45e!2z44CSMTYwLTAwMjMg5p2x5Lqs6YO95paw5a6_5Yy66KW_5paw5a6_77yX5LiB55uu77yV4oiS77yVIOODl-ODqeOCtuilv-aWsOWuvw!5e0!3m2!1sja!2sjp!4v1704687906360!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<?php get_template_part('contact-section'); ?>
<!-- フッター -->
<?php get_footer(); ?>