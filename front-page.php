<?php
/*
Template Name: frontpage
*/
?>
<?php get_template_part('frontHeader'); ?>
    <div id="js-flickity">
        <h2 class="brueboxh2">オモシロイ！を発信する広研メディア</h2>
        <div class="headChilBox">
            <img src="<?php bloginfo('template_url'); ?>/item/logo2.png" width=200/>
            <p class="logoundertext">成蹊大学広告研究会</p>
        </div>
        
    <div class="gallery-cell gc1"></div>
  <div class="gallery-cell gc2"></div>
</div>

<div id="center">
<div id="mainBoxFlex">
<?php get_template_part('topWidget'); ?>
        <secttion>

        <h2 class="midashi2 lsf-icon" title="flag">新着エントリー</h2>
            
          <?php
  global $post;
  $args = array( 'posts_per_page' => 5 );
  $myposts = get_posts( $args );
  foreach( $myposts as $post ) {
    setup_postdata($post);
    ?>
<?php
//現在の記事の投稿者情報を取得
$blogusers = get_users();

//ブログIDを指定して投稿者情報をゲット
$blogusers = get_users('blog_id=1');

?>
            
<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, true);
?>
<?php
$cat = get_the_category();
$catslug = $cat[0]->slug;
?>
    <article class="topArticle height240"style="background-size:cover;
    background-position:center;background-image:url(<?php bloginfo('template_url'); ?>/item/bg2.png),url(<?php echo $image_url[0]?>)">
   <a href="<?php the_author_meta('user_url'); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 70);?></a>
     <span class="arBar3">by <?php the_author_meta('nickname'); ?></span>
     
     <div class="timeBox"><span class="arBar <?php echo $catslug; ?>"><?php echo get_the_category_list( ' ,' ); ?></span><time class="arBar2"><?php the_time('Y/m/d'); ?></time>
                        </div>

                    <div class="generalRight">
                        <section>
                        <h3 class="midashi3"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>

    </section>

                    </div>
                     <br class="clearboth" /><!--フロート解除 -->
            </article>
    <?php
  }
  wp_reset_postdata();
  ?>





        </secttion>
       <a href="<?php echo home_url('/'); ?>/wordpress/all/"><p class="button1">すべてのエントリーを見る</p></a>
    
       <a href="<?php echo home_url('/'); ?>/aboutus-2/"><p class="button2"><img src="<?php bloginfo('template_url'); ?>/item/homeimg.png" style="vertical-align:-15px" width="50px"> ＞＞成蹊大学広告研究会の活動について</p></a>

</div>
<div id="sidebarFlex">
    <?php get_sidebar(); ?>
</div>
  <br class="clearboth" /><!--フロート解除 -->
 <?php get_template_part('frontWidget'); ?>    
</div>

<?php get_footer(); ?>