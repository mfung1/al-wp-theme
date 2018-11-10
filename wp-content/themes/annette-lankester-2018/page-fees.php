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
  <section class="mw-1200 mt-52 mb-36">
    <h1 class="al-h1 mb-19">Fees</h1>
    <p class="al-t2 mb-19">Find out all you need to know about how much I charge and how it all works.</p>
    <p class="al-t2 mb-19">I offer a <strong>30 minute</strong> initial consultation to all of my clients which is discounted at <strong>&#163;20.00</strong>.</p>
    <p class="al-t2 mb-19">Each session lasts <strong>60 minutes</strong> and costs <strong>&#163;40.00</strong> per session.</p>
    <p class="al-t2">This fee is paid in full and may be paid by the following methods:</p>
  </section>
  <section class="mw-1200 mb-36">
    <?php get_template_part('components/payment', 'fees') ?>
  </section>

<?php get_footer();?>