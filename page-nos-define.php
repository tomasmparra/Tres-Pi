<?php get_header('', array( 'class' => 'Obse' )); ?>


<section class="define">
  <h2 class="define_title">Entérate quienes somos!</h2>
  <p class="define_text">Sumando 30 años de experiencia en el ambito web y de programacion, y conociendonos desde la niñez, un dia decidimos formar un equipo y trabajar juntes. Nos gusta pensar que al enfocarnos fuertemente en la calidad de las web que creamos, dejamos un camino mas facil de recorer en forma de buenas practicas, codigo comprensible y eficiente.</p>
  <img class="define_img" src="<?= get_template_directory_uri() . '/assets/relax.jpg' ?>" alt="">
</section>


<section class="perky">
  <div class="perk">
    <svg class="prek_number" viewBox="0 0 80 70"><text y="50">01</text></svg>
    <p class="perk_title">Sostenibilidad</p>
    <div class="perk_deco perk_deco_title"></div>
    <p class="perk_text">Vemos que el problema mas importante a superar por la humanidad actualmente es el cambio climatico, ya que afecta negativamente, no solo a toda la raza humana, sino tambien a la mayoria de otros seres vivos en el planeta. Por eso abordamos este topico muy seriamente y, con nuestros conocimientos en IT, queremos darle voz, visibilidad y herramientas a quienes dan todo por dejar una marca positiva en este topico</p>
  </div>
  <div class="perk_deco"></div>

  <div class="perk">
    <svg class="prek_number" viewBox="0 0 80 70"><text y="50">02</text></svg>
    <p class="perk_title">Derechos Humanos</p>
    <div class="perk_deco perk_deco_title"></div>
    <p class="perk_text">En nuestra pequeña burbuja somos todes feministas y nos preocupa el bienestar de todos los humanos. No creemos en las fronteras y queremos ayudar a que todos tengan necesidades basicas cubiertas. Sabemos que hay mucha gente que sufre la ansiedad existencial de no saber si podrá comer mañana o que no tiene donde dormir o que es discriminada y no podemos hacer oidos sordos a las problematicas de nuestres hermanes humanes.</p>
  </div>
  <div class="perk_deco"></div>

  <div class="perk">
    <svg class="prek_number" viewBox="0 0 80 70"><text y="50">03</text></svg>
    <p class="perk_title">Igualidad</p>
    <div class="perk_deco perk_deco_title"></div>
    <p class="perk_text">Tenemos interes personal en que las personas LGBTQ sean tenidas en cuenta y respetadas en la toma de decisiones politicas. Esta comunidad sufre discriminacion en el dia a dia, en el deporte en el diseño de baños publicos, y más... Queremos aportar nuestro granito de arena a normalizar e incluir a gente diferente.</p>
  </div>
</section>



<section class="shog">
  <div class="shog_slid">
    <img class="" src="<?= get_template_directory_uri() . '/assets/slidey_bg.jpg' ?>" alt="">
    <img class="circle_arrow" src="<?= get_template_directory_uri() . '/assets/circle_arrow.svg' ?>" alt="Scroll down button">
  </div>
  <p class="shog_title">Descubre nuestros servicios</p>
</section>


<section class="equipo">
  <div class="redDot" id="header_activator"></div>
  <p class="equipo_title">Un equipo multidisciplinar y divertido</p>
  <p class="html_deco">&lt;h2&gt;</p>

  <div class="equipo_slider Carousel">
    <div class="member Element">
      <img class="member_img" src="<?= get_template_directory_uri() . '/assets/tomm.svg' ?>" alt="">
      <p class="member_name">Tomás Moral</p>
      <p class="member_cargo">Cara de Empresario</p>
      <p class="member_desc">Emprendedor por naturaleza, me gusta el café con leche vegetal y la playa. Amo juntarme con amigues y ver paisajes nuevos.</p>
    </div>

    <div class="member Element">
      <img class="member_img" src="<?= get_template_directory_uri() . '/assets/sofi.svg' ?>" alt="">
      <p class="member_name">Sofia Pordan</p>
      <p class="member_cargo">Code artist</p>
      <p class="member_desc">Entusiasta del codigo abierto, el café negro, y los videojuegos. Estudié física, me enamoré de codear hace 5 y no he parado desde entonces.</p>
    </div>

    <div class="member Element">
      <img class="member_img" src="<?= get_template_directory_uri() . '/assets/rama.svg' ?>" alt="">
      <p class="member_name">Ramiro Gomez</p>
      <p class="member_cargo">Server Master</p>
      <p class="member_desc">Con mas años de experiencia que la edad de la mayoria de desarrolladores. Me gusta hacer ciclismo y disfruto mucho hacer musica.</p>
    </div>

    <div class="equipo_arrows">
      <div class="equipo_arrow_img equipo_arrow_img_left prevButton">
        <img src="<?= get_template_directory_uri() . '/assets/dropdowny_arrow.png' ?>" alt="">
      </div>
      <p class="equipo_arrows_text">Haz slide</p>
      <div class="equipo_arrow_img nextButton">
        <img src="<?= get_template_directory_uri() . '/assets/dropdowny_arrow.png' ?>" alt="">
      </div>
    </div>
  </div>
</section>


<section class="colabs">
  <p class="colab_title">Colaboradores</p>

  <div class="colab">
    <p class="colab_name">Raquel Tresguerres Gutiérrez</p>
    <div class="colab_textic">
      <p class="colab_cargo">Diseño UI UX</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>

  <!-- <div class="colab">
    <p class="colab_name">Mari Pepi Lopez</p>
    <div class="colab_textic">
      <p class="colab_cargo">SEO/SEM</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>

  <div class="colab">
    <p class="colab_name">José Antonio Eduardo</p>
    <div class="colab_textic">
      <p class="colab_cargo">SEO/SEM</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div> -->

  <div class="colab">
    <p class="colab_name">Jonathan Cantor</p>
    <div class="colab_textic">
      <p class="colab_cargo">Desarrollo Frontend</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>

  <!-- <div class="colab">
    <p class="colab_name">Raquel Tresguerres Gutiérrez</p>
    <p class="colab_link">tresguerres.studio</p>
    <div class="colab_textic">
      <p class="colab_cargo">Diseño UI UX</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div> -->

  <!-- <div class="colab">
    <p class="colab_name">José Antonio Eduardo</p>
    <p class="colab_link">josem.com</p>
    <div class="colab_textic">
      <p class="colab_cargo">SEO/SEM</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>

  <div class="colab">
    <p class="colab_name">José Antonio Eduardo</p>
    <p class="colab_link">jose.yahoo</p>
    <div class="colab_textic">
      <p class="colab_cargo">SEO/SEM</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>



  <div class="colab">
    <p class="colab_name">Raquel Tresguerres Gutiérrez</p>
    <p class="colab_link">tresguerres.studio</p>
    <div class="colab_textic">
      <p class="colab_cargo">Diseño UI UX</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>

  <div class="colab">
    <p class="colab_name">José Antonio Eduardo</p>
    <p class="colab_link">jose.yahoo</p>
    <div class="colab_textic">
      <p class="colab_cargo">SEO/SEM</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div>

  <div class="colab">
    <p class="colab_name">José Antonio Eduardo</p>
    <p class="colab_link">jose.yahoo</p>
    <div class="colab_textic">
      <p class="colab_cargo">SEO/SEM</p>
      <div class="colab_icons">
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
        <div class="colab_ico"><a href=""><?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?></a></div>
      </div>
    </div>
  </div> -->


</section>


<?php get_footer(); ?>
