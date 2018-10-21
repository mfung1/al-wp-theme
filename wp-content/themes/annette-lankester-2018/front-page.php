<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage annette-lankester-2018
 * @since Annette Lankester 2018 0.0.1
 */
 
 get_header();
?>
  <section class="bg-white mb-52">
    <?php get_template_part('components/hero', 'front-page')?>
  </section>
  <section class="mw-1200 mb-36">
    <?php get_template_part('components/billboard', 'front-page')?>
  </section>
  <section class="bg-nvy mb-36">
    <?php get_template_part('components/gift-banner', 'front-page')?>  
  </section>
  <section class="mb-52">
    <?php get_template_part('components/testimonials', 'front-page')?>
  </section>

<?php get_footer();?>