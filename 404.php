<?php get_header(); ?>

    <div id="page-erreur" class="global diagonal">
        <section>

            <div class="erreur">
                <h2>Erreur 404</h2>
                <h2>I GIVE UP... </h2>

                <p>
                    Vous essayez d'accéder à une page qui n'existe pas. TEST TEST
                </p>

                <p>
                    Pour revenir à la page d'accueil cliquer sur le lien suivant
                </p>
                
                
                <!-- <h3>
                <a href="<?php echo get_bloginfo("URL"); ?>"><?php echo get_bloginfo("name"); ?></a>
                </h3> -->
                <?php wp_nav_menu(array("menu" => "retour", "container" => "nav")); ?>
                
                <!--SEARCH FORM-->
                <?php get_search_form() ?>

                <!--NAV MENU CATEGORY-->
                <?php wp_nav_menu(array("menu" => "menu-category", "container" => "nav")); ?>


                
            </div>

            <div class="image">
                <img src="images/logo-page404.png" alt="travel logo with a plane">
            </div>
            
       
       

        </section>
        
    </div>
    
    <div id="footer" class="global">
        <!--CURVE HERE-->
        <?php get_template_part('composants-gabarit/curve'); ?>
        <?php get_footer(); ?>
        
    </div>
</body>
</html>