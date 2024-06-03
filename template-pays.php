

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
            <?php endif;?>

        <section class="presentation_pays">
        <?php get_template_part('composants-gabarit/pays'); ?>


        <?php  echo do_shortcode('[em_pays]'); ?>
        </section>

    </main><!-- #main -->
<?php get_footer(); ?>
  