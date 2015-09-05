<?php get_header(); ?>
        <div class="container group">
            <div id="content">
                <div class="padded">
                    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                        
                        <?php if ( in_category(11) ) { 
                              // recipes
                        ?>
                            <div class="bmgb_recipe">
                                <h3><a href="#" data-id="<?php the_ID(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                <?php // the_time('l F jS, Y') ?>
                                <div id="bmgb_recipe_<?php the_ID(); ?>" class="bmgb_recipe_content" style="display:none;">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <article class="post-<?php the_ID(); ?>">
                                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                
                                <div class="post_date">
                                    <?php the_time('l F jS, Y') ?>
                                </div>
                                
                                <div class="entry">
                                <?php the_content(); ?>
                                </div>
                                
                                <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                                <p class="postmetadata">
                                Filed under: <?php the_category(', ') ?> by <?php  the_author(); ?><br />
                                </p>
                            </article>
                        <?php } ?>
                    <?php endwhile; ?>
                        <div class="navigation">
                            <?php posts_nav_link(); ?>
                        </div>
                    <?php else : ?>
                        <div class="post">
                            <h2>Not Found</h2>
                        </div>
                    <?php endif; ?>
                </div><!-- .padded -->
            </div><!-- #content -->
            
            <?php get_sidebar(); ?>
        </div><!-- .container.group -->

<?php get_footer(); ?>