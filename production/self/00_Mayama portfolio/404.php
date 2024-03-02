<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>
<!-- 404エラー -->
<section class="not-found-404">
  <div class="section__wrap">
    <p class="announce-404">申し訳ございませんが、<br class="sp__only">お探しのページが見つかりません。</p>
    <p class="announce-404-txt">お探しのページは移動、または、削除された可能性がございます。<br>
      もしくは、ご指定のURLが間違っていたかもしれません。
      <br>
      ヘッダーのリンクからご覧になりたいページをご指定ください。
    </p>
    <div class="btn__wrap-center">
      <a href="<?php echo home_url(); ?>#" class="top__btn btn">Homeに戻る
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>