<div class="carte">
                        <?php the_post_thumbnail("medium") ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words(get_the_content()); ?></p>
                        <?php the_category(); ?>
                        <a href="<?php the_permalink(); ?>">SAVOIR PLUS</a>
</div> 
                