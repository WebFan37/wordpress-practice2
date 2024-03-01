<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>
<body>
    <div id="entete" class="global">
        <header class="entete_header">
            <h1>THÈME PRINCIPAL</h1>
            <h2>BIENVENUE DANS LE SITE BETA <br>POUR TESTER LE THÈME</h2>
            <h3>Groupe 4W4 <br>- Conception d'interface et développement web</h3>
            
        </header>
        
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <?php 
        
            if(have_posts()):
                while(have_posts()): the_post();
                $titre = get_the_title();
                $sigle = substr($titre, 0, 7);
                $duree = substr($titre, -4);
                // strpos()
            ?>
            <div class="carte">
                <h3><?php echo $titre ?></h3>
                <p><?php echo $sigle ?></p>
                <p><?php echo $duree ?></p>
                <p><?php echo wp_trim_words(get_the_content(),30); ?></p>             
            </div> 
        
            <?php endwhile ?>
        <?php endif ?>
         
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil</h2>
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
        <section>
            <h2>Évenement</h2>
            <h4>
            Woohoo ! Vous êtes sur la page evenement
            
            </h4>
            <p><a href="https://github.com/WebFan37?tab=repositories">Mon GitHub repositories</a>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore sapiente soluta deleniti maxime voluptates distinctio dignissimos amet! Quis atque, necessitatibus quaerat, ex nostrum maiores, possimus placeat explicabo in odit labore.</p>
                

                
        </section>
        <!-- <div class="vague3">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div> -->
       
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
    <div id="footer" class="global">
        <div class="curve1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <footer class="footer_header">
            <h2>Footer</h2>
            <h6>
            Woohoo ! Vous êtes sur la page footer
        </h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, magnam labore ea laudantium eligendi ad cupiditate, officia iure corporis tempora, quam numquam at id. Illum ipsam in quasi obcaecati beatae?</p>
        </footer>
        
    </div>
</body>
</html>