<?php get_header(); ?>



<section class="sion">
  <h2 class="sion_title">
    <i class="sion_deco"></i>
    <i>Profesionalidad</i> en cada proyecto, personalización para cada cliente
  </h2>


  <?php
  $args = array(
    'post_type'=>'proyecto',
  );
  $banners=new WP_Query($args);
  while($banners->have_posts()){$banners->the_post();?>
    <div class="blah">
      <img class="blah_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <div class="blah_caption">
        <p class="blah_type">Diseño UX UI</p>
        <h3 class="blah_title"><?php the_title(); ?></h3>
        <div class="blah_deco"></div>
        <p class="blah_text">No te conformes. Hazte independiente. Crea una web escalable, capaz de crecer a la par de tu empresa.</p>
      </div>
    </div>
  <?php } wp_reset_query(); ?>

</section>


<?php get_footer(); ?>
