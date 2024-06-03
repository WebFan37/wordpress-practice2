

<?php
/**
 * Template name: Evenement-pays
 *
 */
?>
<?php get_header(); ?>
    <main class="pays">
        <?php
            if ( have_posts() ) : the_post(); ?>
            <h1><?= get_the_title(); ?></h1>
            <?php the_content();?>
            <p>L'adresse de l'evénement: <?php the_field('adresse'); ?></p>
            <p>La date et l'heure de l'événement: <?php the_field('date_et_heure'); ?></p>     
            <?php endif;?>

        <section class="presentation_pays">
        <?php get_template_part('composants-gabarit/vague_pays'); ?>

        </section>

    </main><!-- #main -->
<?php get_footer(); ?>
  