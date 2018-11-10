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
  <section class="bg-purp-lt mb-36">
    <?php get_template_part('components/lets-talk', 'fees') ?>
  </section>
  <section class="mw-1200 mt-52 mb-36">
    <h2 class="al-h2 mb-19">Services</h2>
    <p class="al-t2 mb-19">I am a fully train Hypnotherapist and Pyschotherapeautic counsellor. As such, I offer a variety of expertise across both spectrums.</p>
    <h3 class="al-h3 mb-19">Counselling</h3>
    <p class="al-t2 mb-19">I believe that our mental health deserves as much attention as our physical health. Talking therapy is one way of giving it the care it needs.</p>
    <p class="al-t2 mb-19">Life brings many changes; some of which can leave us feeling unable to cope; causing mixed emotions to run high.</p>
    <svg preserveAspectRatio="xMidYMid meet" viewbox="0 0 343 250">
      <?php
      $img = get_stylsheet_direct_uri() . '/img/friends.svg#friends'
      ?>
      <use xlink:href="<?php echo $img; ?>"/>
    </svg>

  </section>

<?php get_footer();?>