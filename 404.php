<?php get_header(); ?>

    <div id="page-erreur" class="global diagonal">
        <section>
            <h2>Erreur 404</h2>

            <p>
                Vous essayez d'accéder à une page qui n'existe pas.
            </p>

            <p>
                Pour revenir à la page d'accueil cliquer sur le lien suivant
            </p>
            
            <!--NAV MENU SIMPLE RETOUR ARRIER-->
            <?php wp_nav_menu(array("menu" => "return-menu", "container" => "nav")); ?>

            <!--SEARCH FORM-->
            <?php get_search_form() ?>

            <h3>
            <a href="<?php echo get_bloginfo("URL"); ?>"><?php echo get_bloginfo("name"); ?></a>
        </h3>
       
       

        </section>
        
    </div>
    
    <div id="footer" class="global">
        <!--CURVE HERE-->
        <?php get_template_part('composants-gabarit/curve'); ?>
        <?php get_footer(); ?>
        
    </div>
</body>
</html>