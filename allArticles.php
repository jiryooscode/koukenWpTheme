
<?php get_header(); ?>
<div id="center">
    
        <secttion>
        <h2 class="midashi2">新着エントリー</h2>
            
             <?php get_template_part('loop'); ?>
        <?php wp_get_archives("type=postbypost");?>
        </secttion>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>