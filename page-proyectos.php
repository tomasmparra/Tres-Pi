<?php get_header(); ?>



<section class="sion">
  <h2 class="sion_title">
    <i class="sion_deco"></i>
    <i>Profesionalidad</i> en cada proyecto, personalización para cada cliente
  </h2>

  <div class="sion_holder">

    <?php
    $args = array(
      'post_type'=>'proyecto',
    );
    $banners=new WP_Query($args);
    while($banners->have_posts()){$banners->the_post();?>
      <a class="blah" href="<?= get_permalink($post) ?>">
        <img class="blah_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="blah_caption">
          <p class="blah_type"><?= get_post_meta($post->ID, 'project_type', true) ?></p>
          <div class="blah_arrow_title">
            <h3 class="blah_title"><?php the_title(); ?></h3>
            <svg class="blah_icon_deco" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
          </div>
          <div class="blah_deco"></div>
          <p class="blah_text">No te conformes. Hazte independiente. Crea una web escalable, capaz de crecer a la par de tu empresa.</p>
        </div>
      </a>
    <?php } wp_reset_query(); ?>
  </div>

</section>


<?php get_footer(); ?>
