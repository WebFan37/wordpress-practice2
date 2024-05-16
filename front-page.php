<?php get_header(); ?>

<!-- <h1>FRONT-PAGE TEST</h1> -->

    <div id="entete" class="global">
        <header class="entete_header">
            <h1><?php echo get_bloginfo("name") ?></h1>
            <h2><?php echo get_bloginfo("description") ?></h2>
            <!-- <h3>Conception d'interface et développement web</h3> -->
        </header>
        
        <!--ICI POUR LA VAGUE-->
        <?php get_template_part('composants-gabarit/vague'); ?>
         
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>DESTINATIONS POPULAIRES</h2> 
            <div class="destinations">
                <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>

                    <!-- NEW VARIABLE FOR CARTE -->
                    <?php  

                    //use in_category() to check if the post is in the category "galerie"
                    //if it is, set the variable $ma_carte to "galerie"
                        $ma_carte = "carte";
                        if(in_category("galerie")) {
                            $ma_carte = "galerie";
                        }

                        get_template_part("composants-gabarit/categorie", $ma_carte); 
                    ?>
                    
                    <?php endwhile ?>
                <?php endif ?>
            </div>
        </section>
        
    </div>
    <div id="evenement" class="global diagonal">
       <section>
            <h2>CATÉGORIES</h2>
            <p> Cette page vous offre une vue globale sur les catégories incroyables dans le voyage ! Apprécie les ! N'oublie pas de cliquer pour visionner !</p>

            <?php
        // Récupérer toutes les catégories
        $categories = get_categories();

        // Parcourir chaque catégorie
        foreach ($categories as $category) {
            // Récupérer les informations de la catégorie
            $cat_name = $category->name;
            $cat_description = wp_trim_words($category->description,20);
            $cat_link = get_category_link($category->term_id);
            $cat_count = $category->count;

            // Afficher les informations de la catégorie
            echo '<div class = "destinations">';
            echo '<div class = "carte">';
            echo '<h2>' . $cat_name .': '. $cat_count. ' destinations'.'</h2>';
            echo '<p>' . $cat_description . '</p>';
            echo '<p><a href="' . $cat_link . '">Voir tous les articles de cette catégorie</a></p>';
            echo '</div>';
            echo '</div>';
            

            // Réinitialiser la requête
            wp_reset_postdata();
        }
        ?>
       </section>
    
        
       
    </div>
    <div id="galerie" class="global diagonal">
        <section>
            <h2>Galerie</h2>
        <p>
            NOTRE HIGHTLIGHTS !
        </p>

        <?php echo do_shortcode('[em_destination]'); ?>
       
        </section>
        
    </div>

    <?php get_footer(); ?>
  