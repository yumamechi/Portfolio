<!-- ヘッター -->
<?php get_header(); ?>
<!-- ファーストビュー -->
<section id="fv" class="fv">
  <div class="content__wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-2.svg" alt="" width="203" height="157">
    <h2 class="main__copy bold">自然の恵みを感じ、<span class="sp__only">豊かな未来を。</span></h2>
  </div>
  <div class="pickup__news">
    <div class="pickup__news__inner">
      <?php
      $args = [
        'post_type' => 'post', // 投稿タイプ：投稿
        'posts_per_page' => 1, // 表示する数
      ];
      $the_query = new WP_Query($args); ?>
      <?php if ($the_query->have_posts()) : // 投稿がある場合 
      ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="flex-b">
            <p class="pickup__news__ttl">News</p>
            <p class="pickup__news__date"><?php echo get_the_date(); ?></p>
          </div>
          <a class="pickup__news__txt y bold" href="<?php echo home_url("news"); ?>"><span><?php
                                                                                            if (mb_strlen($post->post_title, 'UTF-8') > 15) {
                                                                                              $title = mb_substr($post->post_title, 0, 15, 'UTF-8');
                                                                                              echo $title . '...';
                                                                                            } else {
                                                                                              echo $post->post_title;
                                                                                            }
                                                                                            ?></span></a>
    </div>
  <?php endwhile; ?>
<?php else : // 投稿がない場合
?>

  <p>まだ投稿がありません。</p>

<?php endif;
      wp_reset_postdata(); ?>

  </div>
  <div class="scrolldown4 pc__only">
    <span>SCROLL</span>
  </div>
</section>
<!-- 恵み農園紹介 -->
<section id="about" class="about">
  <div class="wrap">
    <div class="decorate__wrap group_animate">
      <div class="decorate-img group-fadein">
        <img class="about-img01" src="<?php echo get_template_directory_uri(); ?>/img/about-image01.png" alt="" width="400" height="504">
      </div>
      <div class="decorate-img group-fadein">
        <img class="about-img02" src="<?php echo get_template_directory_uri(); ?>/img/about-image02.png" alt="" width="362" height="434">
      </div>
      <div class="decorate-img group-fadein">
        <img class="about-img03" src="<?php echo get_template_directory_uri(); ?>/img/about-image03.png" alt="" width="400" height="400">
      </div>
      <div class="decorate-img group-fadein">
        <img class="about-img04" src="<?php echo get_template_directory_uri(); ?>/img/about-image04.png" alt="" width="470" height="538">
      </div>
    </div>
    <div class="txt__wrap">
      <h2>
        <img class="about__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="自然の恵み農園ロゴ" width="169" height="29">
      </h2>
      <div class="about__txt y bold">
        <p>自然の恵み農園は、<br>自然の恵みと動物の尊さが調和する<br class="sp__only">特別な場所です。<br>新鮮で美味しい農産物を栽培し、<br class="sp__only">心温まる動物たちと触れ合える場所<br class="sp__only">でもあります。</p>
        <p>自然の恵みを受け、<br class="sp__only">動物たちとの特別なひとときを<br class="sp__only">楽しんでいただける場所として、<br>私たちは誇りを持って活動をしています。<br>一緒に自然と動物の美しさを共有しましょう。</p>
      </div>
    </div>
  </div>
</section>
<!-- 活動紹介 -->
<section id="works" class="activity">
  <div class="activty__wrap">
    <div class="section__ttl__wrap">
      <h2 class="section__ttl y bold">活動紹介</h2>
    </div>
    <!-- タブ -->
    <ul class="tab__area">
      <li class="tab active">農園</li>
      <li class="tab">牧場</li>
      <li class="tab ec">オンライン販売</li>
    </ul>
    <!-- 農園タブ -->
    <div class="panel active">
      <p class="tab__txt y">私たちは、「持続可能な農業」を掲げて、自然の恵みに感謝しながら、農作物を育てています。<br>無農薬で、体にも環境にも優しく、季節ごとに異なる品種を育て、提供しています。
        <br>ぜひ一度、農園にお越し頂き、自分の手で収穫した新鮮な野菜、果物をお召し上がりください。
      </p>
      <div class="slide-container">
        <ul class="slide-items" dir="rtl">
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-nouen01.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-nouen02.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-nouen03.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-nouen04.png" alt=""></li>
        </ul>
      </div>
    </div>
    <!-- 牧場タブ -->
    <div class="panel">
      <p class="tab__txt">
        私たちの牧場は、自然と動物との共存を尊重し、持続可能な農業の原則に基づいて運営されています。<br>広々とした環境で、動物たちとのふれ合いを通じて、自然の恵みと動物の尊さを感じ、<br>心温まるひとときを過ごしていただけます。
      </p>
      <div class="slide-container">
        <ul class="slide-items" dir="rtl">
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo01.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo02.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo03.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo04.png" alt=""></li>
        </ul>
      </div>
    </div>
    <!-- オンライン販売タブ -->
    <div class="panel">
      <p class="tab__txt">自然の恵み農園から直接お届けする、新鮮で美味しい農産物と<br>手作りのジャムやバターなどの加工品を提供しています。<br>自然の恩恵をご自宅でお楽しみいただけます。
      </p>
      <div class="slide-container">
        <ul class="slide-items" dir="rtl">
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-ec01.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-ec02.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-ec03.png" alt=""></li>
          <li class="slide-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/work-ec04.png" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- よくあるご質問 -->
<section id="faq" class="faq">
  <div class="wrap">
    <div class="section__ttl__wrap">
      <h2 class="section__ttl y bold">よくあるご質問</h2>
    </div>
    <dl class="accordion__area">
      <dl class="inner__item open">
        <dt class="is-show flex-c">
          <span>Q</span>
          <p class="y bold faq-q">農園の野菜や果物は有機栽培ですか？</p>
        </dt>
        <dd>
          <div class=" faq-a flex-c">
            <span>A</span>
            <p>はい、私たちの農園では有機栽培の原則に従って野菜と果物を栽培しています。<br>化学肥料や農薬を極力使用せず、土壌と作物の健康を第一に考えております。</p>
          </div>
        </dd>
      </dl>
      <dl class="inner__item">
        <dt class="is-show flex-c">
          <span>Q</span>
          <p class="y bold faq-q">農園での見学や体験ツアーは行っていますか？</p>
        </dt>
        <dd>
          <div class="faq-a flex-c">
            <span>A</span>
            <p>はい、農園での見学や体験ツアーを随時開催しています。<br>農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。</p>
          </div>
        </dd>
      </dl>
      <dl class="inner__item">
        <dt class="is-show flex-c">
          <span>Q</span>
          <p class="y bold faq-q">オンラインで注文した農産物はどのように配送されますか？</p>
        </dt>
        <dd>
          <div class="faq-a flex-c">
            <span>A</span>
            <p>オンラインで注文いただいた農産物は、専用の梱包で新鮮さを保ったまま、<br>指定された配送先にお届けします。</p>
          </div>
        </dd>
      </dl>
      <dl class="inner__item">
        <dt class="is-show flex-c">
          <span>Q</span>
          <p class="y bold faq-q">農園で提供される季節ごとの野菜や果物の品種は何ですか？</p>
        </dt>
        <dd>
          <div class="faq-a flex-c">
            <span>A</span>
            <p>春にはイチゴ、夏にはトマトや茄子、秋にはカボチャやリンゴ、冬にはブロッコリーやみかんなど、季節に応じた野菜、果物を提供、収穫体験することができます。</p>
          </div>
        </dd>
      </dl>
    </dl>
  </div>
</section>
<!-- お知らせ -->
<section id="news" class="news">
  <div class="news__wrap flex-c">
    <div class="news__main">
      <div class="section__ttl__wrap">
        <h2 class="section__ttl y bold">お知らせ</h2>
      </div>
      <p class="news__top__desc">季節の農作物のお知らせ、見学ツアーのご案内、<br class="pc__only">オンライン販売セールのお知らせなど、自然の恵み農園の最新情報をお届けします。
      </p>
    </div>
    <a class="more__btn" href="<?php echo home_url("news"); ?>">
      <div class="btn">View More</div>
    </a>
    <ul class="news__article__list">

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
          <li class="news__article__item">
            <div class="flex-c">
              <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
              <div class="category">
                <?php
                $categories = get_the_category();
                if ($categories) {
                  foreach ($categories as $category) {
                ?>
                    <div><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></div>
                <?php
                  }
                }
                ?>
              </div>
            </div>
            <div class="news__content y"><?php
                                          if (mb_strlen($post->post_title, 'UTF-8') > 15) {
                                            $title = mb_substr($post->post_title, 0, 15, 'UTF-8');
                                            echo $title . '...';
                                          } else {
                                            echo $post->post_title;
                                          }
                                          ?></div>
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
</section>
<!-- アクセス -->
<section id="access" class="access">
  <div class="wrap">
    <div class="section__ttl__wrap">
      <h2 class="section__ttl y bold">アクセス</h2>
    </div>
    <div class="content__area">
      <div class="content__inner">
        <dl class="inner__item flex-s">
          <dt>会社名</dt>
          <dd>株式会社自然の恵み農園</dd>
        </dl>
        <dl class="inner__item flex-s">
          <dt>所在地</dt>
          <dd>〒123-4567<br class="sp__only">千葉県〇〇市××町<br class="sp__only">1丁目23-45</dd>
        </dl>
        <dl class="inner__item flex-s">
          <dt>電話番号</dt>
          <dd>012-3456-7890</dd>
        </dl>
        <dl class="inner__item flex-s">
          <dt>営業時間</dt>
          <dd>10:00〜18:00<br class="sp__only">（土日祝を除く）</dd>
        </dl>
        <dl class="inner__item flex-s map">
          <dt>Googleマップ
            <div class="scale-up y bold"><a href="">拡大地図を表示</a></div>
          </dt>
          <dd><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.880911554844!2d139.88029457622272!3d35.6306622327495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187d19d0d3a2cd%3A0xda29db8ad489735f!2z5p2x5Lqs44OH44Kj44K644OL44O844Oq44K-44O844OI!5e0!3m2!1sja!2sjp!4v1699663424968!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></dd>
        </dl>
      </div>
    </div>
  </div>
</section>
<!-- お問い合わせ -->
<section id="contact" class="contact">
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