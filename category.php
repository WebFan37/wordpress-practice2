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
                        <?php echo "Catégorie: ",the_category(); ?><!---->
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
            <p>
                Cette page vous offre une vue globale sur les catégories incroyables dans le voyage ! Apprécie les ! N'oublie pas de cliquer pour visionner !
            </p>

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

    <?php get_footer(); ?>
  