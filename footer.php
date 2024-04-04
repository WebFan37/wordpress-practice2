<div id="footer" class="global bck-ternaire-400">
        <!--CURVE HERE-->
        <?php get_template_part('composants-gabarit/curve'); ?>
        <footer class="footer_header ">
            <h2></h2>
            <h6>MENU</h6>
            <p>Voici des liens pour aller voir dans chaque catégories différentes</p>
            <div class="menu-fin">
                <ul>
                    <li><a href="http://localhost/4W4/">HOME/ACCUEIL</a></li>
                    <li><a href="#">Croisière</a></li>
                    <li><a href="#">Avions</a></li>
                    <li><a href="#">Helicoptère</a></li>
                </ul>
                <ul>
                    <li><a href="#">Accès numérique</a></li>
                    <li><a href="#">Accès papier</a></li>
                    <li><a href="#">Accès invisible</a></li>
                    <li><a href="#">Point</a></li>
                </ul>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">Snapchat</a></li>
                </ul>
            </div>

            <?php wp_nav_menu(array(
                "menu" => "footer",
                "container" => "nav")); ?>
        </footer>
        
    </div>
</body>
</html>