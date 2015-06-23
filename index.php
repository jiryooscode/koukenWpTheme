<?php
/*
Template Name: Allarchives
*/
?>

<?php get_header(); ?>
<div id="center">
	<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
        <secttion>
        <h2 class="midashi2">記事一覧</h2>

             <?php get_template_part('loop'); ?>

        </secttion>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>