

  <!-- <footer class="footer" id="footer">
    <img class="footer_bg" src="<?php echo get_template_directory_uri() . '/assets/footer_bgx2.jpg' ?>" alt="">
    <div class="footer_title_box">
      <h4 class="footer_title">¿Tienes un proyecto en mente?<br><span>Let’s do it!</span></h4>
      <p class="footer_CTA">Solicita tu presupuesto -></p>
    </div>

    <form class="contact" action="index.html" method="post">
      <p class="contact_title">Escribenos</p>
      <input class="contact_input" type="email" name="" value="">
      <textarea class="contact_input" name="name" rows="8" cols="80"></textarea>
      <label for="">
        <input type="checkbox" name="" value="">
        <p>Acepto los términos y condiciones lorem ipsum dolor sir amet et sicue era alectra esta est locua siem.</p>
      </label>
    </form>

    <nav class="naver">
      <svg viewBox="0 0 450 50">
        <a href="<?= get_site_url() . '/servicios'; ?>"><text y="50">Servicios</text></a>
      </svg>

      <svg viewBox="0 0 450 50">
        <a href="<?= get_site_url() . '/proyectos'; ?>"><text y="50">Proyectos</text></a>
      </svg>

      <svg viewBox="0 0 450 50">
        <a href="<?= get_site_url() . '/nos-define'; ?>"><text y="50">Nos define</text></a>
      </svg>
    </nav>

    <ul class="legal">
      <li class="legal_li"><a class="legal_link" href="#">© Trespi 2021</a></li>
      <div class="legal_deco"></div>
      <li class="legal_li"><a class="legal_link" href="#">Política de privacidad</a></li>
      <div class="legal_deco"></div>
      <li class="legal_li"><a class="legal_link" href="#">Aviso Legal</a></li>
      <div class="legal_deco"></div>
      <li class="legal_li"><a class="legal_link" href="#">Política de Privacidad</a></li>
    </ul>
  </footer> -->
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
    <form class="contact" action="index.html" method="post">
      <p class="contact_title">Escríbenos</p>
      <input class="contact_input" type="email" name="" value="" placeholder="Tu email de contacto…">
      <input class="contact_input textarea" type="textarea" name="name"  placeholder="Tu mensaje…"></input>
      <div class="contact_acceptance">
        <label class="check_box">Acepto los términos y condiciones lorem ipsum dolor <br>sit amet et sicue era alectra esta est locua siem.
          <input class="checkbox" type="checkbox">
          <span class="checkmark"></span>
        </label>
        <button class="send_form_button" type="submit">
          <img class="footer_CTA_arrow" src="<?php echo get_template_directory_uri() . '/assets/dropdowny_arrow_white.png' ?>" alt="Icono de flecha">
        </button>
      </div>
    </form>

    <nav class="naver">
      <svg viewBox="0 0 450 50">
        <a href="https://google.com"><text y="50">Servicios</text></a>
      </svg>

      <svg viewBox="0 0 450 50">
        <a href="https://google.com"><text y="50">Proyectos</text></a>
      </svg>

      <svg viewBox="0 0 450 50">
        <a href="https://google.com"><text y="50">Nos define</text></a>
      </svg>
    </nav>
    
    <ul class="legal">
      <li class="legal_li"><a class="legal_link" href="#">© Trespi 2021</a></li>
      <div class="legal_deco"></div>
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
