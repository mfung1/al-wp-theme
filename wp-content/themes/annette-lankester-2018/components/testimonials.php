<?php
$args = array (
  'post_per_page' => '3',
  'category_name' => 'testimonials',
  'order'         => 'ASC'
);

$the_query = new WP_Query($args);
$i = 0;
?>
<article class="mw-1200 al-wrpper">
  <h2 class="col-purp mb-9">Success stories</h2>
  <p class="al-t1">Here's what some of my clients had to say about their journey with me.</p>
  <div class="al-reviews">
    <?php
    // if ($the_query->has_posts()) :
    //   while($the_query->has_posts()) :
    //     $the_query->the_post();
    $imgPath = get_stylesheet_directory_uri() . '/img/quote.svg#quote';
    ?>
    <div class="al-review">
     <svg width="21" height="19" viewbox="0 0 21 19" preserve-aspect-ratio="xMidYMid meet">
       <use xlink:href="<?php echo $imgPath?>"/>
     </svg>
    </div>
    <?php
    //   endwhile;
    // endif;
    ?>
  </div>
</article>