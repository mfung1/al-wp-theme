<?php
$args = array (
  'post_per_page' => '3',
  'category_name' => 'homepage-banner',
  'order'         => 'ASC'
);

$the_query = new WP_Query($args);
$i = 0;
?>
<?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();?>
  <article class="al-hero <?php echo($i == 1 ? 'al-hero-rvrs' : 'al-hero-nrml') ?>">
  <?php
  $arr = array (
    "0 0 472 312",
    "0 0 454 312",
    "0 0 451 313"
  );
  if($i == 1):?>
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
    <div class="al-hero-cpy">
      <h2 class="mb-9"><?php the_title() ?></h2>
      <p class="al-t2"><?php echo get_the_content() ?></p>
    </div>
<?php else: ?>
   <div class="al-hero-cpy">
      <h2 class="mb-9"><?php the_title() ?></h2>
      <p class="al-t2"><?php echo get_the_content() ?></p>
    </div>
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
<?php endif;?>
  </article>
  <?php $i++; endwhile; endif; ?>