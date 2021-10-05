<?php get_header(); ?>


<main class="thanks">
  <div class="thanks_figure">  
    <?=  file_get_contents(get_template_directory_uri() . '/assets/faq.svg') ?>
  </div>
  <p class="thanks_title">Gracias por tu mensaje</p>
  <div class="thanks_box">
    <p class="thanks_text">Hemos recibido tu información y nos pondremos en contacto antes de 48 horas laborales para indicarte nuestras propuestas y precios en detalle para tu proyecto. ¿Mientras tanto por qué no le echas un <a href="<?= site_url() ?>/proyectos">vistazo a nuestro portfolio</a> o lees un libro?</p>
    <a class="thanks_close" href="<?= site_url() ?>">Cerrar</a>
  </div>
</main>


<?php get_footer(); ?>
