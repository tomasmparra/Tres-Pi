<?php get_header(); ?>
<section class="hero">
  <div class="hero_wording">
    <p class="html_deco">&#60;h1&gt;</p>
    <h1 class="hero_copy">Diseño y desarrollo web profesional con <span class="bold_italic">espíritu freelance</span></h1>
    <p class="hero_text">Diseñamos, desarrollamos y alojamos tu página web a medida. Ya sea un e-commerce, una landing page, un site institucional o lo que necesite tu proyecto. Te ofrecemos una solución digital integral. Déjalo todo en nuestras manos.</p>
    <div class="funky_stripe"></div>
  </div>
  <?php
    $config = array(
    'id' => get_post_thumbnail_id(get_the_ID()),
    'class' => 'hero_img',
    'sizes' => [['576', '100']],
    'default_size' => '100',
    );
    responsive_img($config);
  ?>
  <img class="hero_arrow" src="<?php echo get_template_directory_uri() . '/assets/hero_arrow_down.png' ?>" alt="Scroll down button">
</section>
<section class="dropdown">
  <div class="dropdown_title_text">
    <p class="dropdown_title"></p>
    <div class="dropdown_img_box">
      <img class="dropdown_title_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/tres_pi_img_border.png' ?>" alt="All you need is Tres Pi">
      <img class="dropdown_title_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/tres_pi_img_solid.png' ?>" alt="All you need is Tres Pi">
    </div>
  </div>
</section>
<?php get_footer(); ?>
