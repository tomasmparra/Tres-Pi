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
  <img class="slidey_bg" src="<?php echo get_template_directory_uri() . '/assets/slidey_bg.jpg' ?>" alt="Imagen de fondo" >
  <div class="slide_call">
    <p class="slidey_bg_text onlyDesktopG">Nice to meet you!
      <br>
      <span>¿un café?</span>
    </p>
    <img class="circle_arrow" src="<?php echo get_template_directory_uri() . '/assets/hero_arrow_down.png' ?>" alt="Scroll down button">
  </div>
  <p class="html_deco onlyDesktopG">&lt;img&gt;</p>

  <div class="slidey_progress">
    <p class="slidey_progression onlyDesktopG">1/3</p>
    <div class="slidey_bar"></div>
  </div>

  <div class="slidey_card_box">
    <figure class="slidey_card first">
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
    <figure class="slidey_card last">
      <img class="slidey_card_img rowcol1" src="<?php echo get_template_directory_uri() . '/assets/profile_1.jpg' ?>" alt="Foto de perfil">
      <figcaption class="slidey_card_caption rowcol1">
        <p>Ramiro Gomez</p>
        <p>CEO</p>
      </figcaption>
    </figure>
  </div>
</section>




<section class="blurb_box">
  <div class="blurb_title_box">
    <h2 class="blurb_box_title rowcol1">Diseños <i>vibrantes</i> para<br>sites auto administrables</h2>
    <p class="html_deco rowcol1 onlyDesktopG">&lt;h2&gt;</p>
  </div>
  <div class="blurb first">
    <img class="blurb_img" src="<?php echo get_template_directory_uri() . '/assets/blurb_img_1x2.png' ?>" alt="Icono decorativo del punto 1">
    <p class="blurb_title">Te acompañamos en <br>cada paso</p>
    <p class="blurb_text">Desde la creación de tu site, a su hosting y mantenimiento. No te vamos a engañar, nos gustan las relaciones largas.</p>
  </div>
  <div class="blurb">
    <img class="blurb_img" src="<?php echo get_template_directory_uri() . '/assets/blurb_img_2x2.png' ?>" alt="Icono decorativo del punto 2">
    <p class="blurb_title">Haz que tu web crezca <br>contigo cada día</p>
    <p class="blurb_text">No te conformes y ten un site independiente. Crea una web escalable, capaz de crecer a la par de tu empresa.</p>
  </div>
  <div class="blurb last">
    <img class="blurb_img" src="<?php echo get_template_directory_uri() . '/assets/blurb_img_3x2.png' ?>" alt=" Icono decorativo del punto 3">
    <p class="blurb_title">Nuestro equipo se <br>adapta a ti</p>
    <p class="blurb_text">Cuéntanos que necesitas y lo ponemos a tu disposición. ¿SEO, Diseño App, UI UX, o  un gestor 24/7?</p>
  </div>
</section>




<section class="big_pics">
  <h2 class="big_pics_title">Cada proyecto,<br><span><i>una web a medida</i></span></h2>


  <?php
  $args = array(
    'post_type' => 'proyecto',
    'order' => 'ASC',
  );
  $loop = new WP_Query( $args );
  $i = 0;
  while ( $loop->have_posts() ) { $loop->the_post(); ?>
    <figure class="pro <?= "pro_$i" ?>">
      <?php
      $config = array(
        'id' => get_post_thumbnail_id( get_the_ID() ),
        'class' => 'pro_img',
        'sizes' => [['576', '100']],
        'default_size' => '100',
      );
      responsive_img($config);
      ?>
      <?php
      $config = array(
        'slug' => get_post_meta( $post->ID, 'FP_alt_img', true ),
        'class' => 'pro_alt_img',
        'sizes' => [['576', '100']],
        'default_size' => '100',
      );
      responsive_img($config);
      ?>
      <figcaption class="pro_caption">
        <h3 class="pro_title"><?= get_the_title() ?></h3>
        <p class="pro_excerpt"><?= get_the_excerpt() ?></p>
      </figcaption>
    </figure>
  <?php $i++;} ?>
  <a class="big_pics_link" href="<?= site_url() ?>/proyectos">Ver todos los proyectos</a>
</section>

<?php get_footer(); ?>
