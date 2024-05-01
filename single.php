<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <h2>MORE IN DETAIL / PLUS EN DÉTAIL</h2>
            <div class="cours">   
                <?php 
                
                    if(have_posts()):the_post();
                        
                       
                    ?>
                    <div class="carte">
                        <h2><?php the_title() ?></h2>
                        <h2><?php the_post_thumbnail("medium")?></h2>
                        <p><?php the_content(); ?></p>
                        <p>Min-Temp: <?php the_field("min-temp") ?></p>        
                        <p>Max-Temp: <?php the_field("max-temp") ?></p>        
                        <p>POSITION: <?php the_field("position") ?></p>  
                        
                        

                        <?php
// Replace 'YOUR_API_KEY' with your actual API key
$apiKey = '9ccef00f2f2511c770aa4a2c6f822eab';

// Replace 'CITY_NAME' with the name of the city you want weather data for
$city = 'Montreal';

// Construct the API URL
$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";

// Make the HTTP request and fetch the response
$response = file_get_contents($url);

// Check if the response is successful
if ($response !== false) {
    // Decode the JSON response
    $weatherData = json_decode($response, true);

    // Check if there are any errors in the response
    if (isset($weatherData['cod']) && $weatherData['cod'] == 200) {
        // Extract the weather information
        $temperature = $weatherData['main']['temp'];
        $humidity = $weatherData['main']['humidity'];
        $description = $weatherData['weather'][0]['description'];

        // Output the weather information
        echo "Temperature: " . $temperature . " K<br>";
        echo "Humidity: " . $humidity . "%<br>";
        echo "Description: " . $description;
    } else {
        // Handle errors
        echo "Error: Unable to fetch weather data.";
    }
} else {
    // Handle HTTP request failure
    echo "Error: Unable to connect to OpenWeatherMap API.";
}
?>
                    </div> 
                <?php endif ?>



                
            
            </div>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
            <h5>
            Mettre votre propre texte ou des éléments ici
        </h5>
        
       
        </section>
        
    </div>
    <?php get_footer(); ?>