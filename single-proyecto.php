<?php
get_header('', array( 'class' => 'Obse' ));
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
</section>
<?php
$config = array(
  'id' => get_post_thumbnail_id(get_the_ID()),
  'class' => 'upper_img',
  'sizes' => [['576', '100']],
  'default_size' => '100',
);
responsive_img($config);
?>

<div id="header_activator" class="redDot"></div>
<section class="simplex">
  <h5 class="simplex_title">El cliente</h5>
  <p class="simplex_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>

<section class="simplex">
  <h5 class="simplex_title">El proyecto</h5>
  <p class="simplex_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</section>


<?php
$config = array(
  'id' => get_post_thumbnail_id(get_the_ID()),
  'class' => 'simplex_image',
  'sizes' => [['576', '100']],
  'default_size' => '100',
);
responsive_img($config);
?>

<section class="ruli">
  <p class="ruli_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <img class="ruli_img_small" src="https://picsum.photos/450/320" alt="">
  <img class="ruli_img_small" src="https://picsum.photos/450/319" alt="">
  <img class="ruli_img_big"   src="https://picsum.photos/702/400" alt="">
</section>

<section class="colorin">
  <p class="colorin_quote">- Lorem ipsum dolor.</p>
  <?php
  $config = array(
    'id' => get_post_thumbnail_id(get_the_ID()),
    'class' => 'colorin_img',
    'sizes' => [['576', '100']],
    'default_size' => '100',
  );
  responsive_img($config);
  ?>
</section>

<section class="ruli ruli_column">
  <p class="ruli_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <div>
    <p class="ruli_quote">- Lorem ipsum dolor.</p>
    <img class="ruli_img_big"   src="https://picsum.photos/702/400" alt="">
  </div>
</section>

<div class="prarrows">
  <?php
  $prev_proyect = get_adjacent_post(false, '', true);
  $next_proyect = get_adjacent_post(false, '', false);

  if($prev_proyect) { ?>
    <a class="prarrows_arrow prarrows_arrow_left" href="<?= get_permalink($prev_proyect->ID) ?>">
      <img class="prarrows_img" src="<?= get_template_directory_uri() ?>/assets/dropdowny_arrow.png">
      <span class="prarrows_text">Anterior proyecto</span>
    </a>
  <?php }

  else echo '<a></a>';

  if($next_proyect) { ?>
    <a class="prarrows_arrow" href="<?= get_permalink($next_proyect->ID) ?>">
      <span class="prarrows_text">Siguiente proyecto</span>
      <img class="prarrows_img" src="<?= get_template_directory_uri() ?>/assets/dropdowny_arrow.png">
    </a>
  <?php }

  else echo '<a></a>';
  ?>
</div>

<!-- <section>
  <?php the_content(); ?>

</section> -->


<?php
}
get_footer(); ?>
