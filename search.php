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
            <h3>
            Woohoo ! Vous êtes sur la page d'accueil
        </h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eos ad odit eius nulla quas voluptates tempora illum! Architecto blanditiis neque animi fugit quos nemo odio omnis ex praesentium modi?</p>
       <a href="https://www.shapedivider.app/">Créer des formes personnalisé</a>
       
       <button class="button">
        CLIQUER ICI !
    </button>
        </section>
        
    </div>
    <div id="evenement" class="global diagonal">
        <section class="destinations">


            
        <?php 
        
            if(have_posts()):
                while(have_posts()): the_post();
                $titre = get_the_title();

                // strpos()
            ?>
            <div class="carte">
                <h2><?php echo $titre ?></h2>
                <p><?php echo wp_trim_words(get_the_content(), 50); ?></p>
                <a href="<?php echo get_permalink(); ?>">SUITE ...</a>
                           
            </div> 
        
            <?php endwhile ?>
        <?php endif ?>
            
                

                
        </section>
        <!-- ANOTHER VAGUE GOES HERE -->
        <?php get_template_part('composants-gabarit/vague3'); ?>
       
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
            <h5>
            Woohoo ! Vous êtes sur la page galerie
        </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi minus vel perferendis laborum ipsum nesciunt dolorum. Voluptatem atque quos harum animi nihil corrupti sed, quae quam facilis a commodi eligendi.</p>

       
        </section>
        
    </div>
    <?php get_footer(); ?>
</body>
</html>