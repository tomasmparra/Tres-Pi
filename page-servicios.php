<?php get_header('', array( 'class' => 'Obse' )); ?>




<section class="duo">
  <div class="duo_caption">
    <h1 class="duo_title">Que te ofrecemos?</h1>
    <p class="duo_text">
      Nuestros conocimiento en IT no se limitan al desarrollo de webs. Sabemos de servidores, programacion, diseño, y más; por eso ofrecemos un amplio espectro de servicios en el ambito de software con foco en la web. Desde alojar tu web hasta diseñarla, damos forma a tu proyecto virtual y te ayudamos a llevarlo adelante en todas las etapas del mismo. Entre otras cosas ofrecemos:
      <br><br>
      · Diseño y desarrollo web<br>
      · Alojamiento y seguridad virtual<br>
      · Programacion a medida<br>
      · Promociones especiales para ONGs<br>
      · y más... anímate a preguntar
    </p>
    <div class="funky_stripe"></div>
  </div>
  <?php
    $config = array(
    'id' => get_post_thumbnail_id(get_the_ID()),
    'class' => 'duo_img',
    'sizes' => [['576', '100']],
    'default_size' => '100',
    );
    responsive_img($config);
  ?>
  <a href="#metodología">
    <img class="circle_arrow" src="<?php echo get_template_directory_uri() . '/assets/hero_arrow_down.png' ?>" alt="Scroll down button">
  </a>
</section>



<section class="method" id="metodología">
  <h3 class="method_title">Nuestra metodología <br><span>para trabajar juntos</span></h3>

  <div class="proceed">
    <p class="proceed_number">01</p>
    <p class="proceed_title">Meeting inicial</p>
    <div class="proceed_deco"></div>
    <p class="proceed_desc">Nos reunimos contigo para escucharte, asesorarte y entender tus necesidades y las del proyecto.</p>
  </div>

  <div class="proceed">
    <p class="proceed_number">02</p>
    <p class="proceed_title">Planeamiento</p>
    <div class="proceed_deco"></div>
    <p class="proceed_desc">Creamos una estrategia que contemple cada aspecto a desarrollar en los plazos marcados.</p>
  </div>

  <div class="proceed">
    <p class="proceed_number">03</p>
    <p class="proceed_title">Contenido y Diseño UI UX</p>
    <div class="proceed_deco"></div>
    <p class="proceed_desc">Definimos la estructura, texto y contenido mientras diseñamos para una gran experiencia de usuario.</p>
  </div>

  <div class="proceed">
    <p class="proceed_number">04</p>
    <p class="proceed_title">Desarrollo y programación</p>
    <div class="proceed_deco"></div>
    <p class="proceed_desc">Transformamos el diseño en el código fuente de tu página web, siendo rigurosos con los estándares de calidad que los buscadores y los usuarios demandan.</p>
  </div>

  <div class="proceed">
    <p class="proceed_number">05</p>
    <p class="proceed_title">Optimización</p>
    <div class="proceed_deco"></div>
    <p class="proceed_desc">Subimos tu sitio web al servidor, gestionamos certificado SSL, lo testeamos exhaustivamente y optimizamos tanto el SEO como la performance.</p>
  </div>

  <div class="proceed">
    <p class="proceed_number">06</p>
    <p class="proceed_title">Lanzamiento y soporte</p>
    <div class="proceed_deco"></div>
    <p class="proceed_desc">¡Tu web ya está online! Y, si quieres, podemos ayudarte con el soporte y mantenimiento que necesites para tener tu site siempre a punto.</p>
  </div>
</section>


<section class="shog">
  <div class="shog_slid">
    <img class="" src="<?= get_template_directory_uri() . '/assets/typing.jpg' ?>" alt="">

    <a href="<?= site_url('proyectos') ?>">
      <img class="circle_arrow" src="<?= get_template_directory_uri() . '/assets/circle_arrow.svg' ?>" alt="Scroll down button">
    </a>
  </div>
  <a href="<?= site_url('proyectos') ?>" class="shog_title">Descubre nuestros proyectos</a>
</section>


<section class="faq">
  <div class="redDot test" id="header_activator"></div>
  <h5 class="faq_title">¿Tienes alguna consulta?</h5>
  <p class="faq_subtitle">Quizá podemos resolverla fácilmente…</p>
  <div class="faq_deco"></div>

  <img class="faq_img" src="<?= get_template_directory_uri() . '/assets/faq.svg' ?>" alt="">

  <div class="faq_questions">
    <div class="faq_group" id="faq_1" onclick="altClassFromSelector('faq_answer_display', '#faq_1', ['faq_group'])">
      <p class="faq_question">Consulta habitual de los clientes</p>
      <div class="faq_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="faq_answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="faq_deco"></div>
    </div>

    <div class="faq_group" id="faq_2" onclick="altClassFromSelector('faq_answer_display', '#faq_2', ['faq_group'])">
      <p class="faq_question">Consulta habitual de los clientes</p>
      <div class="faq_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="faq_answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="faq_deco"></div>
    </div>

    <div class="faq_group" id="faq_3" onclick="altClassFromSelector('faq_answer_display', '#faq_3', ['faq_group'])">
      <p class="faq_question">Consulta habitual de los clientes</p>
      <div class="faq_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="faq_answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="faq_deco"></div>
    </div>

    <div class="faq_group" id="faq_4" onclick="altClassFromSelector('faq_answer_display', '#faq_4', ['faq_group'])">
      <p class="faq_question">Consulta habitual de los clientes</p>
      <div class="faq_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="faq_answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="faq_deco"></div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
