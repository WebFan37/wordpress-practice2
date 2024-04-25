<?php get_header(); ?>

    <div id="entete" class="global">
        <header class="entete_header">
            <h1>RECHERCHE</h1>
            <h2></h2>
            <h3></h3>
            
        </header>
        
    <!--ICI POUR LA VAGUE-->
    <?php get_template_part('composants-gabarit/vague'); ?>
         
    </div>
    <div id="accueil" class="global diagonal">
        <section>
            <h2>SEARCH RESULT / RÉSULTAT</h2>
            <section class="destinations">
                <?php 
                
                    if(have_posts()):
                        while(have_posts()): the_post();
                        $titre = get_the_title();

                        // strpos()
                    ?>
                    <div class="carte">
                        <h2><?php echo $titre ?></h2>
                        <h2><?php the_post_thumbnail("medium")?></h2>
                        <p><?php echo wp_trim_words(get_the_content(), 50); ?></p>
                        <a href="<?php echo get_permalink(); ?>">SUITE ...</a>
                                
                    </div> 
                
                    <?php endwhile ?>
                <?php endif ?>
            </section>
        </section>
       
        
    </div>
    <div id="evenement" class="global diagonal">
        
        <!-- ANOTHER VAGUE GOES HERE -->
        <?php get_template_part('composants-gabarit/vague3'); ?>
       
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
</body>
</html>