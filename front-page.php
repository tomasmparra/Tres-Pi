<?php get_header(); ?>
<section class="hero">
  <div class="hero_wording">
    <p class="html_deco">&lt;h1&gt;</p>
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
  <img class="circle_arrow" src="<?php echo get_template_directory_uri() . '/assets/hero_arrow_down.png' ?>" alt="Scroll down button">
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
  <img class="slidey_bg rowcol1" src="<?php echo get_template_directory_uri() . '/assets/slidey_bg.jpg' ?>" alt="Imagen de fondo" >
  <div class="slide_call">
    <p class="slidey_bg_text">Nice to meet you!
      <br>
      <span>¿un café?</span>
    </p>
    <img class="circle_arrow right" src="<?php echo get_template_directory_uri() . '/assets/hero_arrow_down.png' ?>" alt="Scroll down button">
  </div>
  <p class="html_deco">&lt;img&gt;</p>

  <div class="slidey_progress">
    <p class="slidey_progression">1/3</p>
    <div class="slidey_bar"></div>
  </div>

  <div class="slidey_card_box">
    <figure class="slidey_card">
      <img class="slidey_card_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/profile_1.jpg' ?>" alt="Foto de perfil">
      <figcaption class="slidey_card_caption rowcol1">
        <p>Tomás Moral</p>
        <p>CEO</p>
      </figcaption>
    </figure>
    <figure class="slidey_card">
      <img class="slidey_card_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/profile_1.jpg' ?>" alt="Foto de perfil">
      <figcaption class="slidey_card_caption rowcol1">
        <p>Sofia Molinero</p>
        <p>CEO</p>
      </figcaption>
    </figure>
    <figure class="slidey_card">
      <img class="slidey_card_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/profile_1.jpg' ?>" alt="Foto de perfil">
      <figcaption class="slidey_card_caption rowcol1">
        <p>Ramiro Gomez</p>
        <p>CEO</p>
      </figcaption>
    </figure>
  </div>
</section>
<?php get_footer(); ?>
