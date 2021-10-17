<?php get_header(); ?>

<form class="budget budget_page_0">
	<div class="budget_header">
		<div class="budget_pagination">
			<p class="budget_page budget_text budget_text_sm">1 / 2</p>
			<div class="budget_progress">Barrita</div>
		</div>
		<h5 class="budget_title">Presupuesta tu proyecto</h5>
		<p class="budget_description budget_text budget_text_sm">¿Prefieres enviarnos un email a través de la sección <a href="">contacto</a>?</p>
	</div>

  <div class="budget_body budget_body_0">
		<div class="budget_group" id="budget_0_0" onclick="altClassFromSelector('budget_a_display', '#budget_0_0', ['budget_group'])">
			<p class="budget_question budget_text">¿Cuál es tu presupuesto para este sitio?</p>

			<div class="budget_arrow">
					<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer budget_text budget_text_sm">
        <label class="budget_option">
          <input name="budget" id="budget" type="radio" value="<2000" class="budget_radio">
          <p>Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>
        
        <label class="budget_option">
          <input name="budget" id="budget" type="radio" value="2000-5000" class="budget_radio">
          <p>De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget" id="budget" type="radio" value=">5000" class="budget_radio">
          <p>Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>

    <div class="budget_group" id="budget_0_1" onclick="altClassFromSelector('budget_a_display', '#budget_0_1', ['budget_group'])">
			<p class="budget_question budget_text">¿Que tipo de web necesitas?</p>
			<div class="budget_arrow">
					<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>
			<p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="budget_deco"></div>
    </div>

    <div class="budget_group" id="budget_0_2" onclick="altClassFromSelector('budget_a_display', '#budget_0_2', ['budget_group'])">
      <p class="budget_question budget_text">¿Necesitas hosting?</p>
      <div class="budget_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="budget_deco"></div>
    </div>

    <div class="budget_group" id="budget_0_3" onclick="altClassFromSelector('budget_a_display', '#budget_0_3', ['budget_group'])">
      <p class="budget_question budget_text">¿Necesitas servicios de diseño web o marketing?</p>
      <div class="budget_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="budget_deco"></div>
    </div>
  </div>









  <div class="budget_body budget_body_1">
		<div class="budget_group" id="budget_1_0" onclick="altClassFromSelector('budget_a_display', '#budget_1_0', ['budget_group'])">
			<p class="budget_question budget_text">¿Cuál es tu presupuesto para este sitio?</p>
			<div class="budget_arrow">
					<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>
			<p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="budget_deco"></div>
		</div>

    <div class="budget_group" id="budget_1_1" onclick="altClassFromSelector('budget_a_display', '#budget_1_1', ['budget_group'])">
			<p class="budget_question budget_text">¿Que tipo de web necesitas?</p>
			<div class="budget_arrow">
					<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>
			<p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="budget_deco"></div>
    </div>

    <div class="budget_group" id="budget_1_2" onclick="altClassFromSelector('budget_a_display', '#budget_1_2', ['budget_group'])">
      <p class="budget_question budget_text">¿Necesitas hosting?</p>
      <div class="budget_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="budget_deco"></div>
    </div>

    <div class="budget_group" id="budget_1_3" onclick="altClassFromSelector('budget_a_display', '#budget_1_3', ['budget_group'])">
      <p class="budget_question budget_text">¿Necesitas servicios de diseño web o marketing?</p>
      <div class="budget_arrow">
        <?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
      </div>
      <p class="budget_answer budget_text budget_text_sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="budget_deco"></div>
    </div>
  </div>








	<div class="budget_footer">
		<button class="budget_btn budget_btn_canc">Cancelar</button>
		<button class="budget_btn budget_btn_nend" onclick="altClassFromSelector('budget_page_1', '.budget.budget_page_0', ['budget'])">
			<span>Continuar</span>
			<img class="budget_btn_img" src="<?= get_template_directory_uri() ?>/assets/dropdowny_arrow_white.png">
		</button>
	</div>
</form>


<?php get_footer(); ?>
