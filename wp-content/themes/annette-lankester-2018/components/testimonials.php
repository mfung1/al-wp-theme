<?php
$args = array (
  'post_per_page' => '3',
  'category_name' => 'testimonials',
  'order'         => 'ASC'
);

$theQuery = new WP_Query($args);
$i = 0;
?>
<article class="mw-1200 al-wrpper">
  <h2 class="col-purp mb-9">Success stories</h2>
  <p class="al-t1 mb-36">Here's what some of my happy clients had to say about their journey with me.</p>
  <div class="al-reviews">
    <?php
    $imgPath = get_stylesheet_directory_uri() . '/img/quote.svg#quote';
    if ($theQuery->have_posts()) :
      while($theQuery->have_posts()) :
        $theQuery->the_post();
    ?>
    <div class="al-review <?php echo ($i == 1 ? 'al-review-prp-lt' : 'al-review-purp')?> mb-36">
      <p data-matchheights="review" class="al-t2 <?php echo ($i == 1 ? 'col-prp' : 'col-wht') ?> al-review-cpy"><?php echo get_the_excerpt()?></p>
      <p class="al-t3 al-review-src <?php echo ($i == 1 ? 'col-prp' : 'col-wht') ?>">- Anon</p>
     <svg width="21" height="19" viewbox="0 0 21 19" preserve-aspect-ratio="xMidYMid meet">
       <use xlink:href="<?php echo $imgPath?>"/>
     </svg>
    </div>
    <?php
      $i++;
      endwhile;
    endif;
    ?>
  </div>
  <div class="ta-c">
    <a href="/testimonials" class="al-btn al-btn-prp">
      <span class="al-t3 col-wht">View all testimonials</span>
    </a>
  </div>
</article>