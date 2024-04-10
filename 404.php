<?php get_header(); ?>

    <div id="test-erreur" class="global diagonal">
        <section>
            <h2>Accueil Nope pas ici</h2>
            <h3>
            
            
            <a href="<?php echo get_bloginfo("URL"); ?>"><?php echo get_bloginfo("name"); ?></a>
        </h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eos ad odit eius nulla quas voluptates tempora illum! Architecto blanditiis neque animi fugit quos nemo odio omnis ex praesentium modi?</p>
       <a href="https://www.shapedivider.app/">Créer des formes personnalisé</a>
       

        </section>
        
    </div>
    
    <div id="footer" class="global">
        <!--CURVE HERE-->
        <?php get_template_part('composants-gabarit/curve'); ?>
        <?php get_footer(); ?>
        
    </div>
</body>
</html>