<?php
$args = array (
  'post_per_page' => '2',
  'category_name' => 'payment-banner',
  'order'         => 'ASC'
);

$the_query = new WP_Query($args);
$i = 0;
?>
<?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();?>
  <article class="al-hero mw-790 <?php echo($i == 0 ? 'al-hero-nrml' : 'al-hero-rvrs') ?> <?php echo($i != 1 ? 'mb-52': '')?>">
  <?php
  $arr = array (
    "0 0 391 290",
    "0 0 417 270"
  );
  if($i == 0):?>
  <?php
    $postid = get_the_ID();
    $postmeta = get_post_meta($postid, 'Image path');
    $imgpath = get_stylesheet_directory_uri() . $postmeta[0];
    $cards = get_stylesheet_directory_uri() . $postmeta[1];
    ?>
    <div class="al-hero-cpy  mw-304">
      <h2 class="mb-9"><?php the_title() ?></h2>
      <p class="al-t2 mb-9"><?php echo get_the_content() ?></p>
      <img src="<?php echo $cards ?>" alt=""/>
    </div>
    <div class="al-hero-svg">
      <svg viewbox="<?php echo $arr[$i];?>" preserve-aspect-ratio="xMidYMid meet">
        <use xlink:href="<?php echo $imgpath ?>"/>
      </svg>
    </div>
<?php else: ?>
<?php
    $postid = get_the_ID();
    $postmeta = get_post_meta($postid, 'Image path');
    $imgpath = get_stylesheet_directory_uri() . $postmeta[0];
    ?>
    <div class="al-hero-svg">
      <svg viewbox="<?php echo $arr[$i];?>" preserve-aspect-ratio="xMidYMid meet">
        <use xlink:href="<?php echo $imgpath ?>"/>
      </svg>
    </div>
   <div class="al-hero-cpy mw-304">
      <h2 class="mb-9"><?php the_title() ?></h2>
      <p class="al-t2"><?php echo get_the_content() ?></p>
    </div>
<?php endif;?>
  </article>
  <?php $i++; endwhile; endif; wp_reset_query();?>