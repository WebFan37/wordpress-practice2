<?php get_header(); ?>

<!-- <h1>FRONT-PAGE TEST</h1> -->

    <div id="accueil" class="global">
        <section>
            <h2>DESTINATION PAR CATEGORIE</h2> 
            
            <div class="destinations">
                <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>

                    <div class="carte">
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words(get_the_content()); ?></p>
                        <?php the_category(); ?><!---->
                        <a href="<?php the_permalink(); ?>">SAVOIR PLUS</a>
                    </div> 
                
                    <?php endwhile ?>
                <?php endif ?>
            </div>
        </section>
        
    </div>
   
    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
            <h5>
            Woohoo ! Vous êtes sur la page galerie
        </h5>
        <p>La page galerie vous offre une vue globale sur les photos le plus incroyable dans le voyage ! Apprécie les ! Ne manquer pas les évenements !

        </p>

       
        </section>
        
    </div>

    <?php get_footer(); ?>
  