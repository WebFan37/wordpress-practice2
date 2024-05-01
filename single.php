<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <h2>MORE IN DETAIL / PLUS EN DÉTAIL</h2>
            <div class="cours">   
                <?php 
                
                    if(have_posts()):the_post();
                        
                       
                    ?>
                    <div class="carte">
                        <h2><?php the_title() ?></h2>
                        <h2><?php the_post_thumbnail("medium")?></h2>
                        <p><?php the_content(); ?></p>
                        <p>Min-Temp: <?php the_field("min-temp") ?></p>        
                        <p>Max-Temp: <?php the_field("max-temp") ?></p>        
                        <p>POSITION: <?php the_field("position") ?></p>       
                    </div> 
                <?php endif ?>
            
            </div>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
            <h5>
            Mettre votre propre texte ou des éléments ici
        </h5>
        
       
        </section>
        
    </div>
    <?php get_footer(); ?>