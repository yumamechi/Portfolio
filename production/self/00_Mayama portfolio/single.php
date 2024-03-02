<?php get_header(); ?>
<!-- メイン -->
<main>
  <!-- 制作実績 -->
  <section class="single works">
    <div class="inner">
      <div class="breadcrumbs">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
      <div class="single__ttl">
        <h2><?php echo $post->post_title; ?></h2>
      </div>
      <div class="single_thumbnail">
        <?php the_post_thumbnail('medium'); ?>
      </div>
      <div class="content__area">
        <div class="content__inner">
          <!-- カスタムフィールドループ -->
          <?php
          $fields = $cfs->get('loop');

          foreach ($fields as $field) :
            // site_content フィールドが入力されている場合のみ表示
            if (!empty($field['site_content'])) :
          ?>
              <dl class="inner__item">
                <dt><?php echo $field['site_midashi']; ?></dt>
                <dd><?php echo $field['site_content']; ?></dd>
              </dl>
            <?php endif; ?>

            <!-- basic_contentフィールドが入力されている場合のみ表示 -->
            <?php if (!empty($field['basic_content'])) :
            ?>
              <dl class="inner__item">
                <dt><?php echo $field['basic_midashi']; ?></dt>
                <dd><?php echo $field['basic_content']; ?></dd>
              </dl>
            <?php endif; ?>

            <!-- github_content フィールドが入力されている場合のみ表示 -->
            <?php if (!empty($field['github_content'])) : ?>
              <dl class="inner__item">
                <dt><?php echo $field['github_midashi']; ?></dt>
                <dd><?php echo $field['github_content']; ?></dd>
              </dl>
            <?php endif; ?>

            <!-- period_content フィールドが入力されている場合のみ表示 -->
            <?php if (!empty($field['period_content'])) : ?>
              <dl class="inner__item">
                <dt><?php echo $field['period_midashi']; ?></dt>
                <dd><?php echo $field['period_content']; ?></dd>
              </dl>
            <?php endif; ?>

            <!-- works_about_content フィールドが入力されている場合のみ表示 -->
            <?php if (!empty($field['works_about_content'])) : ?>
              <dl class="inner__item">
                <dt><?php echo $field['works__about_midashi']; ?></dt>
                <dd><?php echo $field['works_about_content']; ?></dd>
              </dl>
            <?php endif; ?>
          <?php endforeach; ?>
          <!-- ループ終了 -->
          <dl class="inner__item">
            <dt>カテゴリー</dt>
            <dd>
              <?php
              $cats = get_the_category();
              foreach ($cats as $cat) {
                echo '<div class="category">' . $cat->cat_name . '</div>';
              }
              ?>
            </dd>
          </dl>
        </div>
      </div>
      <?php if (!empty(CFS()->get('pc_img')) && !empty(CFS()->get('sp_img'))) : ?>
        <h4>サイトイメージ</h4>
        <div class="site__image__content">
          <div class="pc_img">
            <h5>PC</h5>
            <div class="img_box scrollbar">
              <img src="<?php echo CFS()->get('pc_img'); ?>" alt="PCサイトイメージ図">
            </div>
          </div>
          <div class="sp_img">
            <h5>SP</h5>
            <div class="img_box scrollbar">
              <img src="<?php echo CFS()->get('sp_img'); ?>" alt="スマホサイトイメージ図">
            </div>
          </div>
        </div>
      <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>