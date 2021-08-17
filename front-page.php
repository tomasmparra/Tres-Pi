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
<section class="dropdowny_box">
  <div class="dropdowny_title_text">
    <p class="dropdowny_title">All u need…</p>
    <div class="dropdowny_img_box">
      <img class="dropdowny_title_img border rowcol1" src="<?php echo get_template_directory_uri() . '/assets/tres_pi_img_solid.png' ?>" alt="All you need is Tres Pi">
      <img class="dropdowny_title_img solid rowcol1" src="<?php echo get_template_directory_uri() . '/assets/tres_pi_img_border.png' ?>" alt="All you need is Tres Pi">
    </div>
  </div>
  <div class="dropdowny">
    <div class="dropdowny_item" onclick="altClassFromSelector('unfold', '.dropdowny_item:nth-child(1)')">
      <h3 class="dropdowny_item_title">Desarrollo a medida escalable</h3>
      <p class="dropdowny_item_text">¿Necesitas un equipo de desarrollo profesional, SEO, copys o también servicios de diseño UI UX? Nos adaptamos a ti, para hacer crecer tu proyecto y entender sus necesidades, sean las que sean.</p>
    </div>
    <div class="dropdowny_item" onclick="altClassFromSelector('unfold', '.dropdowny_item:nth-child(2)')">
      <h3 class="dropdowny_item_title">Hosting de alta velocidad</h3>
      <p class="dropdowny_item_text">Contamos con servidores propios, lo que nos permite garantizar a tu web los recursos que necesite, incluso con un tráfico elevado. Mientras, un equipo profesional mantiene al día el software para optimizar su rendimiento y seguridad.</p>
    </div>
    <div class="dropdowny_item" onclick="altClassFromSelector('unfold', '.dropdowny_item:nth-child(3)')">
      <h3 class="dropdowny_item_title">Servicio de atención 24/7</h3>
      <p class="dropdowny_item_text">¿Tienes preguntas? ¿Necesitas soporte o asesoramiento? ¿¡Tienes una sugerencia?! Contarás con un asesor para disipar tus dudas y solucionar cualquier problema en todo momento.</p>
    </div>
    <div class="dropdowny_CTA">
      <a class="dropdowny_CTA_text">Descubre nuestros servicios</a>
      <img class="dropdowny_CTA_icon" src="<?php echo get_template_directory_uri() . '/assets/dropdowny_arrow.png' ?>" alt="Icono de flecha">
    </div>
  </div>
</section>
<section class="slidey">
  <p class="slidey_title">El equipo</p>
  <figure class="slidey_bg">
    <img class="slidey_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/slidey_bg.jpg' ?>" alt="Imagen de fondo" >
    <figcaption class="slidey_bg_caption rowcol1">
      <p class="slidey_bg_text">
        <br>
        <span></span>
      </p>
    </figcaption>
  </figure>
  <figure class="slidey_card">
    <img class="slidey_picture" src="<?php echo get_template_directory_uri() . '/assets/profile_1.jpg' ?>" alt="Foto de perfil">
    <figcaption class="slidey_card_caption"></figcaption>
  </figure>
</section>
<?php get_footer(); ?>
