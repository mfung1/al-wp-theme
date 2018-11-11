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
      <h1 class="al-h2 mb-19">About me</h1>
      <?php $path = get_template_directory_uri() . '/img/avatar.png'?>
      <img class="avatar" src="<?php echo $path ?>" alt="" />
      <p class="al-t2 mb-19">I am a qualified and accredited pyschotherapeuatic counsellor and hypnotherapist.</p>
      <p class="al-t2 mb-19">I run a private practice situated on my premises. Offering you a comfortable space to work with you.</p>
      <p class="al-t2 mb-19">I started as a nursery nurse career that provided me with varied experiences & settings with children.</p>
      <p class="al-t2 mb-19">I am a fully qualified and accredited psychotherapeutic counsellor & hypnotherpaist.</p>
      <p class="al-t2 mb-19">This is achieved with various courses and workshops to enhance and keep my skills and knowledge up-to-date. As part of this; I attend an NCSN (National Counselling Society of Norfolk) group every few months.</p>
      <p class="al-t2 mb-19">I am commited to participate in continous personal development.</p>
  </section>
  <section class="bg-purp-lt">
    <?php get_template_part('/components/lets-talk', 'about') ?>
  </section>



<?php
get_footer();
?>