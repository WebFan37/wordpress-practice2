<div id="footer" class="global clr-agencement-primaire">
        <!--CURVE HERE-->
        <?php get_template_part('composants-gabarit/curve'); ?>
        <footer class="footer_header ">
            <h2></h2>
            <h6>MENU</h6>
            <p>Voici des liens pour aller voir dans chaque catégories différentes</p>
            <div class="menu-fin">
                <ul>
                    <p>D'AUTRES AGENCES DE VOYAGE</p>
                    <li><a href="https://www.ncl.com/ca/en/?cid=PS_DIG_NA_BRC_GOO_NA_NA_NA_NA_NA_NAM&gad_source=1&gclid=CjwKCAjw_LOwBhBFEiwAmSEQAXLWt27nOzmO-9iWAqVvapHCT_Rxm29M5fRtg4XAT7k8FJ342qh7HBoCJ5MQAvD_BwE&gclsrc=aw.ds">CROISIÈRE NORWEGIAN</a></li>
                    <li><a href="https://www.orbitz.com/">VOYAGE ORBITZ</a></li>
                    <li><a href="https://www.orbitz.com/">VOYAGE AIR CANADA</a></li>
                </ul>
                <ul>
                    <li><?php get_search_form() ?></li>
                    <li><a href="https://www.cmaisonneuve.qc.ca/campus-installations/trois-campus/3800-rue-sherbrooke/">Addresse: 3800 Rue Sherbrooke Est</a></li>
                    <li><img src="https://s2.svgbox.net/materialui.svg?ic=facebook" width="28" height="28"><a href="https://www.facebook.com/CollegeMaisonneuve/?locale=fr_CA">FaceBook</a></li>
                    <li><img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="28" height="28"><a href="https://www.instagram.com/collegemaisonneuve/">Instagram</a></li>
                  
                </ul>
                <ul>
                    <li><a href="https://github.com/WebFan37/4W4-2024-gr1/tree/TP2">Addresse GitHub TP2</a></li>
                    <li><p><span>AUTEUR</span>: Janne Zhang Ellison</p></li>
                    <li><p><span>DESCRIPTION</span>: Ce Travail Pratique consiste un pratique dans l'application du SCSS, php, 
                        WordPress et les fonctionnalités du WordPress</p></li>
    
                </ul>
            </div>

            <?php wp_nav_menu(array(
                "menu" => "footer",
                "container" => "nav")); ?>
        </footer>
        
    </div>
    <?php wp_footer() ?>
</body>

</html>