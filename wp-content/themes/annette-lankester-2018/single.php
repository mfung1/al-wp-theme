<?php
  get_header();
?>
<?php if(have_posts()) : while (have_posts()) : the_post()?>
  <section class="mw-1200 mt-52 mb-52">
    <article class="p-08 mw-540">
      <?php if(is_single()) :?>
        <h1 class="al-h1 mb-19"><?php the_title(); ?></h1>
        <p class="al-t3"><strong><?php get_the_author() ? the_author() : 'Anonymous' ?></strong></p>
        <p class="al-t2 mb-19"><i><?php echo get_the_date('d/m/Y', get_the_ID())?></i></p>
        <div class="content">
          <?php
          $content = apply_filters('the_content', $post->post_content);
          the_content();
          ?>           
        </div>
      <?php endif;?>
    <?php endwhile; endif; ?>
    </article>
  </section>
  <section class="bg-purp-lt">
    <?php get_template_part('components/lets-talk', 'post')?>
  </section>
<?php get_footer(); ?>