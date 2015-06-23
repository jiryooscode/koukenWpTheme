<?php get_header(); ?>
      <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div id="center">
	<?php
  $url_encode=urlencode(get_permalink());
  $title_encode=urlencode(get_the_title());
?>
<!--ツイートボタン-->
<div>
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
<div id="mainBoxFlex">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); get_template_part('content');
?>

<?php
endwhile;
endif;
?>
</div>
<div id="sidebarFlex">
<?php get_template_part('singleWidget'); ?>
</div>
    <br class="clearboth" /><!--フロート解除 -->
</div>
<?php get_footer(); ?>