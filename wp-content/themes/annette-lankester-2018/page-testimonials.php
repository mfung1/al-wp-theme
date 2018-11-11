<?php
get_header();

$args = array (
  'post_per_page' => '4',
  'category_name' => 'testimonials',
  'order'         => 'ASC'
);

$the_query = new WP_Query($args);
$i = 0;
?>

<section class="mw-1200 mb-36 mt-52 p-08">
  <h1 class="al-h1 mb-19">Testimonials</h1>
  <p class="al-t2">Read what my clients had to say about the experiences with me in full. These testimonials are in reverse-chronological order.</p>    
</section>

<section class="mw-1200 mb-52 p-08">
  <?php
  if($the_query -> have_posts()) : while($the_query -> have_posts()) : $the_query->the_post();
  $id = get_the_ID();
  $i++;
  if ($i % 2 == 0) {
    $col = 'prp-lt';
    $col2 = 'prp';
    $txt_col = 'purp';
  } else if ($i % 3 == 0) {
    $col = 'nvy';
    $col2 = 'wht';
    $btnCol = 'prp';
    $txt_col = 'wht';
  } else {
    $col = 'purp';
    $col2 = 'prp-lt';
    $txt_col = 'wht';
    $btnCol = 'wht';
  }
  ?>
  <article class="al-review al-review-<?php echo $col ?> mb-36  mw-540">
    <h2 class="al-h2 mb-19 col-<?php echo $txt_col ?>"><?php echo get_the_title() ?></h2>
    <p class="al-t2 mb-36 col-<?php echo $txt_col ?> mw-304"><?php echo get_the_excerpt() ?></p>
    <a href="<?php the_permalink() ?>" class="al-btn al-btn-<?php echo $col2; ?> col-<?php echo $btnCol?>"><span class="al-t3">View testimonial</span></a>
    <div class="pos-top-right">
      <p class="al-t3 col-<?php echo $txt_col ?>"><strong><?php get_the_author() ? the_author() : 'Anonymous' ?></strong></p>
      <p class="al-t3 col-<?php echo $txt_col ?>"><i><?php echo get_the_date('d/m/Y', $id); ?></i></p>
    </div>
  </article>
  <?php
  endwhile; endif;
  ?>
</section>


<?php
get_footer();
?>