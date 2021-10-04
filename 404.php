<?php get_header(); ?>


<main class="thanks">
  <div class="thanks_figure">  
    <?=  file_get_contents(get_template_directory_uri() . '/assets/circle_arrow.svg') ?>
  </div>
  <p class="thanks_title">¡OOPS! Página no encontrada.</p>
  <div class="thanks_box">
    <p class="thanks_text">Esta página no está dentro del rango de decimales π. Intenta <a href="<?= site_url() ?>">regresando a la página de inicio</a>.</p>
  </div>
</main>


<?php get_footer(); ?>
