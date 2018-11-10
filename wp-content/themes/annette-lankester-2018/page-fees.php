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
  <section class="mw-1200 mt-52 mb-36 p-08">
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
  <section class="mw-1200 mb-36 p-08">
    <div class="ta-c mw-480">
      <h2 class="al-h2 mb-19 ta-l">Services</h2>
      <p class="al-t2 mb-19 ta-l">I am a fully train Hypnotherapist and Pyschotherapeautic counsellor. As such, I offer a variety of expertise across both spectrums.</p>
      <h3 class="al-h3 mb-19 ta-l">Counselling</h3>
      <p class="al-t2 mb-19 ta-l">I believe that our mental health deserves as much attention as our physical health. Talking therapy is one way of giving it the care it needs.</p>
      <p class="al-t2 mb-19 ta-l">Life brings many changes; some of which can leave us feeling unable to cope; causing mixed emotions to run high.</p>
      <svg class="mw-304" preserveAspectRatio="xMidYMid meet" viewbox="0 0 282 201">
        <?php
        $img = get_stylesheet_directory_uri() . '/img/friends.svg#friends'
        ?>
        <use xlink:href="<?php echo $img; ?>"/>
      </svg>
      <p class="al-t2 mb-19 ta-l">You may turn to friends or family to share your private concerns but may be left feeling more confused or judged.</p>
      <p class="al-t2 mb-19 ta-l">I favour an integrative approach. This allows me to facilitate models that are best suite to you. My role is not to express opinions or advise you.</p>
      <p class="al-t2 mb-19 ta-l">I assist in exploring past and present areas of your life and any stumbling block you are facing. Creating deeper self-awareness with your thoughts and feelings.</p>
      <h3 class="al-h3 mb-19 ta-l">Hypnotherapy</h3>
      <p class="al-t2 mb-19 ta-l">Hypnotherapy is often surrounded with pre-conceptions that consist of doing or saying things that you have no control over.</p>
      <p class="al-t2 mb-19 ta-l">Hypnosis is an altered state of mind like daydreaming and sleep; in which personal thoughts and moods can be influenced; it's usually used to access the subconcious mind using positive suggestions to help change unhelpful patterns of behaviour.</p>
      <p class="al-t2 mb-19 ta-l">It is also used for a very effectie method of relaxation that stimulates the release of endorphins that have a natural; mood enhancing and calming effect.</p>
    </div>
  </section>
  <section class="mw-1200 mb-36 p-08">
    <h2 class="al-h2 mb-19">What can hypnotherapy or counselling help me with?</h2>
    <p class="al-t2 mb-19">Counselling and Hypnotherapy can both help with feelings of:</p>
    <ul class="al-t2 cols-2 ">
      <li>Despair</li>
      <li>Stress</li>
      <li>Low Confidence</li>
      <li>Fears</li>
      <li>Low mood</li>
      <li>Worry</li>
      <li>Low self-esteem</li>
      <li>Phobias</li>
      <li>Confusion</li>
      <li>Loss</li>
      <li>Loneliness</li>
      <li>Guilt</li>
      <li>Sadness</li>
      <li>Anger</li>
      <li>Grief</li>
      <li>Shame</li>
    </ul>
  </section>
  <section class="bg-nvy warn">
    <div class="mw-1200">
      <h2 class="al-h2 mb-19 col-wht">Please be advised:</h2>
      <p class="al-t3 ital col-wht">If you have been diagnosed or suspect you may have one of the <strong>symptomps listed above</strong>; it is advisable to consult your <strong><abbr title="General Practitioner">G.P</abbr></strong> for guidance, advice and treatment. Always consult your health professional before commencing any alternative or additional therapies or treatment.</p>
    </div>
  </section>

<?php get_footer();?>