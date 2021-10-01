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
            <img class="blah_icon_deco" src="<?= get_template_directory_uri() ?>/assets/dropdowny_arrow.png" alt="Icono de flecha">
          </div>
          <div class="blah_deco"></div>
          <p class="blah_text">No te conformes. Hazte independiente. Crea una web escalable, capaz de crecer a la par de tu empresa.</p>
        </div>
      </a>
    <?php } wp_reset_query(); ?>
  </div>

</section>


<?php get_footer(); ?>
