<?php get_header(); ?>

<h1>FRONT-PAGE TEST</h1>

    <div id="entete" class="global">
        <header class="entete_header">
            <h1><?php echo get_bloginfo("name") ?></h1>
            <h1>THÈME PRINCIPAL</h1>
            <h2><?php echo get_bloginfo("description") ?></h2>
            <h3>Groupe 4W4 <br>- Conception d'interface et développement web</h3>
            
        </header>
        
        <!--ICI POUR LA VAGUE-->
        <?php get_template_part('composants-gabarit/vague'); ?>
         
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil</h2> 
            
            <div class="cours">
                <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>
                    <div class="carte">
                        <h2><?php the_title() ?></h2>
                        <p><?php echo wp_trim_words(get_the_content()); ?></p>
                        <a href="<?php the_permalink(); ?>">POUR SAVOIR PLUS</a>
                    </div> 
                
                    <?php endwhile ?>
                <?php endif ?>
            </div>
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
            Woohoo ! Vous êtes sur la page galerie
        </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi minus vel perferendis laborum ipsum nesciunt dolorum. Voluptatem atque quos harum animi nihil corrupti sed, quae quam facilis a commodi eligendi.</p>

       
        </section>
        
    </div>

    <?php get_footer(); ?>
  