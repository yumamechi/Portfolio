<?php
// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'news'; // 任意のスラッグ名
    $args['label'] = 'お知らせ一覧'; //「投稿」から変更
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// アイキャッチ用コード
add_theme_support('post-thumbnails');

//jsの読み込み
function my_theme_enqueue_scripts()
{
  // jQueryの読み込み
  wp_enqueue_script('jquery');

  // ハンバーガーメニューのJavaScriptを読み込む
  wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}


// 記事の自動整形を無効化
add_action('init', function () {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function ($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = true;
  return $init;
});
