
<?php
$cat = get_the_category();
$catslug = $cat[0]->slug;
?>
 <article class="topArticle">
                <div class="generalLeft2">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
                </div>
                    <div class="timeBox"><time class="genetime2"><?php the_time('Y/m/d'); ?></time><span class="arBar4 <?php echo $catslug; ?>"><?php echo get_the_category_list( ' ,' ); ?></span><?php echo get_avatar(get_the_author_meta('ID'), 20);?></span>
                        </div>

                    <div class="generalRight2">
                        <section>
                        <h3 class="m4"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>

    </section>

                    </div>
                     <br class="clearboth" /><!--フロート解除 -->
                </article>