<?php
//現在の記事の投稿者情報を取得
$blogusers = get_users();
$author_id = $post->post_author;
?>
<article class="single">
<header class="singleHeader">
    <section>
    <time class="genetime"><?php the_time('Y年m月d日（D）'); ?></time>
        <span class="cateBox"><?php echo get_the_category_list( ' ,' ); ?></span><br>
              <?php
      $arr = get_the_tags();
      if ($arr) {
         foreach ( $arr as $tag ) {
   echo '<a href="/tag/'.$tag->slug.'"><span class="tags">'.$tag->name.'</span></a>';
}
      }

 ?>
    <h1 class="singleh1"><?php echo get_the_title(); ?></h1>
    </header>
    </section>
    <div class="contentArea">
        <a href="<?php the_author_meta('user_url'); ?>">
        <div class="profBox">
            <div class="avp">
                <?php echo get_avatar(get_the_author_meta('ID'), 60);?>
            </div>
        <p class="name">書いた人：<?php the_author_meta('nickname'); ?></p>
        <p class="des"><?php the_author_meta('description'); ?></p>
             <br class="clearboth" /><!--フロート解除 -->
        </div>

            </a>

    <?php the_content(); ?>
</div>
<?php wp_link_pages( ); ?>
<footer class="contentFooter">


<?php
  $url_encode=urlencode(get_permalink());
  $title_encode=urlencode(get_the_title());
?>
<!--ツイートボタン-->
<div>
<p><span class="lsf-icon" title="sns"></span>この記事をシェアする</p>
<div class="sns-icon">
  <a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton">
    <div class="lsf" style="color:#00acee">twitter</div>
    <div class="sns-count">
        <?php if(function_exists('scc_get_share_twitter')) echo scc_get_share_twitter(); ?></div>
  </a>
</div>
<!--Facebookいいね！/シェアボタン-->
<div class="sns-icon">
  <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>">
    <div class="lsf" style="color:#4561b0">facebook</div>
    <div class="sns-count"><?php if(function_exists('scc_get_share_facebook')) echo scc_get_share_facebook(); ?></div>
  </a>
</div>
  <!--Google+1ボタン-->
<div class="sns-icon">
  <a href="https://plus.google.com/share?url=<?php echo $url_encode;?>">
    <div class="lsf" style="color:#dd4b30">google</div>
    <div class="sns-count"><?php if(function_exists('scc_get_share_gplus')) echo scc_get_share_gplus(); ?></div>
  </a>
</div>
<!--はてブボタン-->
<div class="sns-icon">
  <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>">
    <div class="lsf" style="color:#00a4de">hatenabookmark</div>
    <div class="sns-count"><?php if(function_exists('scc_get_share_hatebu')) echo scc_get_share_hatebu(); ?></div>
  </a>
  </div>
<!--LINEボタン-->
<div class="sns-icon">
  <a href="http://line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>">
    <div class="lsf" style="color:#00c300">line</div>
  </a>
</div>
<br class="clearboth"/>
</div>

    <?php
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
    $cat_id = $category[0]->cat_ID;
?>

    <a href="<?php echo get_category_link( $cat_id ); ?>"><p class="catlink lsf-icon" title="checkbox"><?php echo $cat_name; ?>カテゴリーの記事をもっと見る</p></a>

</footer>

</article>