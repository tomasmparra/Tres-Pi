<?php
get_header();
while(have_posts()){the_post();
?>



<section class="upper">
  <div id="title_activator" class="redDot"></div>
  <div class="upper_caption">
    <span class="upper_deco">/</span>
    <p class="upper_tags">Diseño UX UI</p>
    <h1 class="upper_title Obse" data-observe="#title_activator"><?php the_title(); ?></h1>

    <p class="upper_data"><i>2021 | Ecommerce</i></p>
  </div>
  <?php
  $config = array(
  'id' => get_post_thumbnail_id(get_the_ID()),
  'class' => 'upper_img',
  'sizes' => [['576', '100']],
  'default_size' => '100',
  );
  responsive_img($config);
  ?>
  <!-- <img class="upper_img" src="" alt=""> -->
</section>

<section style="min-height:500px;">
  <?php the_content(); ?>

</section>


<?php
}
get_footer(); ?>
