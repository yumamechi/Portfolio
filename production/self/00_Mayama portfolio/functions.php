<?php
// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'works'; // 任意のスラッグ名
    $args['label'] = '制作実績一覧'; //「投稿」から変更
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
  wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/main.js', array('jquery'), '1.0.0', true);
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

/**
 * Contact Form 7 "フリガナ"のバリデーション追加
 */
function custom_wpcf7_validate_kana($result, $tag)
{
  $tag   = new WPCF7_Shortcode($tag);
  $name  = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

  //全角カタカナ又は平仮名の入力チェック
  if ($name === "your-name-kana") {
    if (!preg_match("/^[ア-ヶーぁ-ん 　]+$/u", $value)) {
      $result->invalidate($tag, "カタカナ又は平仮名で入力してください。");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);


function change_breadcrumbs($bcnObj)
{
  // 投稿詳細ページかどうか
  if (is_single()) {
    // パンくずリストに「カテゴリーB」が含まれる場合、パンくずリストを作り直す
    $isHit = false;
    foreach ($bcnObj->trail as $bread) {
      if ($bread->get_title() == "コーディング" || "デザイン") {
        $isHit = true;
        break;
      }
    }

    if ($isHit) {
      // 最初の要素(投稿タイトル)と最後の要素(TOPページ)を取得する
      $postBread = $bcnObj->trail[0];
      $topBread = $bcnObj->trail[count($bcnObj->trail) - 1];

      // パンくずリストをいったんすべて削除
      array_splice($bcnObj->trail, 0);

      // 投稿のカテゴリーのデータを取得
      $categories = get_the_category();
      $cat = null;
      foreach ($categories as $category) {
        // カテゴリーB以外を取得
        if ($category->parent == 0 || get_categories(array('parent' => $category->term_id))) {
          $cat = $category;
          break;
        }
      }

      // パンくずリストに投稿タイトルを追加
      array_push($bcnObj->trail, $postBread);

      // カテゴリーをパンくずリストに追加
      if ($cat) {
        $breadcrumb = new bcn_breadcrumb(
          $cat->cat_name,
          null,
          array('archive'),
          get_category_link($cat->cat_ID),
          null,
          true
        );
        $bcnObj->add($breadcrumb);
      }

      // パンくずリストにTOPページを追加
      array_push($bcnObj->trail, $topBread);
    }
  }
}
add_action('bcn_after_fill', 'change_breadcrumbs');

add_action('bcn_after_fill', 'bc_limit');
function bc_limit($trail)
{
  $max = count($trail->breadcrumbs);
  for ($i = 2; $i < $max - 1; $i++) {
    unset($trail->trail[$i]);
  }
}
