<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <div class="cours">   
                <?php 
                
                    if(have_posts()):the_post();
                        
                        $titre = get_the_title();
                    ?>
                    <div class="carte">
                        <h2><?php echo $titre ?></h2>
                        <p><?php the_content(); ?></p>
                                
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