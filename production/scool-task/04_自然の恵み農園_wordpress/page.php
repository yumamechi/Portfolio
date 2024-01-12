<!-- ヘッター -->
<?php get_header(); ?>

<!-- お問い合わせページ -->
<div class="contact__page">
      <div class="wrap">
       <nav>
      <ol class="breadcrumb y">
        <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
      </ol>
    </nav>
        <div class="section__ttl__wrap">
          <h2 class="section__ttl y bold">お問い合わせ</h2>
        </div>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>

<!-- フッター -->
<?php get_footer(); ?>