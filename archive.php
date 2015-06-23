<?php get_header(); ?>
        <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div id="center">
<h2 class="midashi2"><?php single_cat_title(); ?>カテゴリー</h2>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        get_template_part('content-forArchive');

endwhile;
endif;

?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>


<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>