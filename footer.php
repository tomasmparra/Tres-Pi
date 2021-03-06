
  <footer class="footer" id="footer">
    <img class="footer_bg" src="<?php echo get_template_directory_uri() . '/assets/footer_bgx2.jpg' ?>" alt="">
    <div class="footer_title_box">
      <h4 class="footer_title">¿Tienes un proyecto en mente?</h4>
      <p class="footer_subtitle">Let’s do it!</p>
      <div class="footer_CTA">
        <h4 class="footer_CTA_txt">Solicita tu presupuesto</h4>
        <img class="footer_CTA_arrow" src="<?php echo get_template_directory_uri() . '/assets/dropdowny_arrow_white.png' ?>" alt="Icono de flecha">
        <div class="footer_CTA_deco"></div>
      </div>
    </div>
    <form class="contact" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
      <input type="hidden" name="action" value="tp_form_handler">
      <input type="hidden" name="link"   value="<?= site_url('gracias-por-tu-mensaje'); ?>">
      <input type="text"   name="a00"    value="" placeholder="jeje" hidden>

      <div>
        <p class="contact_title_mobile">Formulario de contacto</p>
        <p class="contact_title">¡Escríbenos!</p>
      </div>
      <input class="contact_input" type="email" name="" value="" placeholder="Tu email de contacto…">
      <textarea class="contact_input textarea" name="name"  placeholder="Tu mensaje…"></textarea>
      <div class="contact_acceptance">
        <label class="check_box">Acepto los términos y condiciones lorem ipsum dolor sit amet et sicue era alectra esta est locua siem.
          <input class="checkbox" type="checkbox">
          <span class="checkmark"></span>
        </label>
        <button class="send_form_button" type="submit">
          <img class="footer_CTA_arrow" src="<?php echo get_template_directory_uri() . '/assets/dropdowny_arrow_white.png' ?>" alt="Icono de flecha">
        </button>
      </div>
    </form>

    <nav class="naver onlyDesktopG">
      <svg viewBox="0 0 450 50">
        <a href="<?= site_url() ?>/servicios"><text y="50">Servicios</text></a>
      </svg>

      <svg viewBox="0 0 450 50">
        <a href="<?= site_url() ?>/proyectos"><text y="50">Proyectos</text></a>
      </svg>

      <svg viewBox="0 0 450 50">
        <a href="<?= site_url() ?>/nos-define"><text y="50">Nos define</text></a>
      </svg>
    </nav>

    <nav class="naver_mobile">
      <p class="naver_mobile_title">Secciones</p>
      <a href="<?= site_url() ?>">Home</a>
      <a href="<?= site_url() ?>/proyectos">Proyectos</a>
      <a href="<?= site_url() ?>/servicios">Servicios</a>
      <a href="<?= site_url() ?>/nos-define">Nos define</a>
    </nav>

    <ul class="legal">
      <li class="legal_li legal_li_full"><a class="legal_link" href="#">© Trespi 2022</a></li>
      <!-- <div class="legal_deco"></div> -->
      <li class="legal_li"><a class="legal_link" href="#">Política de privacidad</a></li>
      <div class="legal_deco"></div>
      <li class="legal_li"><a class="legal_link" href="#">Aviso Legal</a></li>
      <div class="legal_deco"></div>
      <li class="legal_li"><a class="legal_link" href="#">Política de Privacidad</a></li>
    </ul>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
