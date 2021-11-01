<?php get_header(); ?>

<form class="budget budget_0">
	<div class="budget_header">
    <p class="budget_page budget_text">1 / 2</p>
    <div class="budget_progress"></div>

		<h5 class="budget_title">Presupuesta tu proyecto</h5>
		<p class="budget_description">¿Prefieres enviarnos un email a través de la sección <a href="">contacto</a>?</p>
	</div>

  <!-- Page 0 -->
  <div class="budget_body budget_body_0">
		<div class="budget_group" id="budget_group_0">
      <div class="budget_question" onclick="altClassFromSelector('budget_answer_display', '#budget_group_0', ['budget_group'])">
        <p class="budget_text">¿Cuál es tu presupuesto para este sitio?</p>
        <p class="budget_option_selected"></p>
      </div>

			<div class="budget_arrow" onclick="altClassFromSelector('budget_answer_display', '#budget_group_0', ['budget_group'])">
				<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer">
        <label class="budget_option">
          <input required name="budget" type="radio" value="<2000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_0', ['budget_group']); updateQuestionText(event, '#budget_group_0 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>

        <label class="budget_option">
          <input name="budget" type="radio" value="2000-5000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_0', ['budget_group']); updateQuestionText(event, '#budget_group_0 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget" type="radio" value=">5000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_0', ['budget_group']); updateQuestionText(event, '#budget_group_0 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>


		<div class="budget_group" id="budget_group_1">
      <div class="budget_question" onclick="altClassFromSelector('budget_answer_display', '#budget_group_1', ['budget_group'])">
        <p class="budget_text">¿Cuál es tu presupuesto para este sitio?</p>
        <p class="budget_option_selected"></p>
      </div>

			<div class="budget_arrow" onclick="altClassFromSelector('budget_answer_display', '#budget_group_1', ['budget_group'])">
				<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer">
        <label class="budget_option">
          <input required name="budget1" type="radio" value="<2000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_1', ['budget_group']); updateQuestionText(event, '#budget_group_1 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>

        <label class="budget_option">
          <input name="budget1" type="radio" value="2000-5000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_1', ['budget_group']); updateQuestionText(event, '#budget_group_1 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget1" type="radio" value=">5000" class="budget_radio" autocomplete="off" onclick=" altClassFromSelector('budget_answer_display', '#budget_group_1', ['budget_group']); updateQuestionText(event, '#budget_group_1 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>


		<div class="budget_group" id="budget_group_2">
      <div class="budget_question" onclick="altClassFromSelector('budget_answer_display', '#budget_group_2', ['budget_group'])">
        <p class="budget_text">¿Cuál es tu presupuesto para este sitio?</p>
        <p class="budget_option_selected"></p>
      </div>

			<div class="budget_arrow" onclick="altClassFromSelector('budget_answer_display', '#budget_group_2', ['budget_group'])">
				<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer">
        <label class="budget_option">
          <input required name="budget2" type="radio" value="<2000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_2', ['budget_group']); updateQuestionText(event, '#budget_group_2 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>

        <label class="budget_option">
          <input name="budget2" type="radio" value="2000-5000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_2', ['budget_group']); updateQuestionText(event, '#budget_group_2 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget2" type="radio" value=">5000" class="budget_radio" autocomplete="off" onclick=" altClassFromSelector('budget_answer_display', '#budget_group_2', ['budget_group']); updateQuestionText(event, '#budget_group_2 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>
  </div>


  <!-- Page 1 -->
  <div class="budget_body budget_body_1">
		<div class="budget_group" id="budget_group_3">
      <div class="budget_question" onclick="altClassFromSelector('budget_answer_display', '#budget_group_3', ['budget_group'])">
        <p class="budget_text">¿Cuál es tu presupuesto para este sitio?</p>
        <p class="budget_option_selected"></p>
      </div>

			<div class="budget_arrow" onclick="altClassFromSelector('budget_answer_display', '#budget_group_3', ['budget_group'])">
				<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer">
        <label class="budget_option">
          <input required name="budget3" type="radio" value="<2000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_3', ['budget_group']); updateQuestionText(event, '#budget_group_3 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>

        <label class="budget_option">
          <input name="budget3" type="radio" value="2000-5000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_3', ['budget_group']); updateQuestionText(event, '#budget_group_3 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget3" type="radio" value=">5000" class="budget_radio" autocomplete="off" onclick=" altClassFromSelector('budget_answer_display', '#budget_group_3', ['budget_group']); updateQuestionText(event, '#budget_group_3 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>


		<div class="budget_group" id="budget_group_4">
      <div class="budget_question" onclick="altClassFromSelector('budget_answer_display', '#budget_group_4', ['budget_group'])">
        <p class="budget_text">¿Cuál es tu presupuesto para este sitio?</p>
        <p class="budget_option_selected"></p>
      </div>

			<div class="budget_arrow" onclick="altClassFromSelector('budget_answer_display', '#budget_group_4', ['budget_group'])">
				<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer">
        <label class="budget_option">
          <input required name="budget4" type="radio" value="<2000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_4', ['budget_group']); updateQuestionText(event, '#budget_group_4 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>

        <label class="budget_option">
          <input name="budget4" type="radio" value="2000-5000" class="budget_radio" autocomplete="off" onclick="altClassFromSelector('budget_answer_display', '#budget_group_4', ['budget_group']); updateQuestionText(event, '#budget_group_4 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget4" type="radio" value=">5000" class="budget_radio" autocomplete="off" onclick=" altClassFromSelector('budget_answer_display', '#budget_group_4', ['budget_group']); updateQuestionText(event, '#budget_group_4 .budget_question', 'Presupuesto:');">
          <p class="budget_text budget_text_sm">Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>


		<div class="budget_group" id="budget_group_5">
      <div class="budget_question" onclick="altClassFromSelector('budget_answer_display', '#budget_group_5', ['budget_group'])">
        <p class="budget_text">¿Cuál es tu presupuesto para este sitio?</p>
        <p class="budget_option_selected"></p>
      </div>

			<div class="budget_arrow" onclick="altClassFromSelector('budget_answer_display', '#budget_group_5', ['budget_group'])">
				<?= file_get_contents(get_template_directory_uri() . '/assets/circle_arrow_small.svg') ?>
			</div>

			<div class="budget_answer">
        <label class="budget_option">
          <input name="budget5" type="checkbox" value="<2000" class="budget_radio budget_radio_checkbox" autocomplete="off" onclick="updateQuestionTexts('#budget_group_5 .budget_question', '#budget_group_5', 'Otros:');">
          <p class="budget_text budget_text_sm">Menos de 2000€, prefiero usar una plantilla prediseñada.</p>
        </label>

        <label class="budget_option">
          <input name="budget5" type="checkbox" value="2000-5000" class="budget_radio budget_radio_checkbox" autocomplete="off" onclick="updateQuestionTexts('#budget_group_5 .budget_question', '#budget_group_5', 'Otros:');">
          <p class="budget_text budget_text_sm">De 2000€ a 5000€, quiero una web diseñada y desarrollada a medida.</p>
        </label>

        <label class="budget_option">
          <input name="budget5" type="checkbox" value=">5000" class="budget_radio budget_radio_checkbox" autocomplete="off" onclick="updateQuestionTexts('#budget_group_5 .budget_question', '#budget_group_5', 'Otros:');">
          <p class="budget_text budget_text_sm">Más de 5000€, busco una web con diseño y desarrollo a medida con funcionalidades complejas.</p>
        </label>
      </div>

			<div class="budget_deco"></div>
		</div>
  </div>




	<div class="budget_footer">
		<a class="budget_btn budget_btn_cancel" href="#">Cancelar</a>
		<button
      class="budget_btn budget_btn_prev"
      onclick="
        document.querySelectorAll('.budget_answer_display').forEach(element => element.firstElementChild.click());
        altClassFromSelector('budget_0', '.budget.budget_1', ['budget']);
        updateBudgetPage(-1);
        return false;
      "
    >Regresar</button>

		<button
      class="budget_btn budget_btn_next"
      onclick="
        document.querySelectorAll('.budget_answer_display').forEach(element => element.firstElementChild.click());
        let invalid = [...document.querySelectorAll(`.budget_body_${budget_page} input`)].find(input => !input.checkValidity());
        
        if(!invalid) {
          updateBudgetPage(+1);
          altClassFromSelector('budget_1', '.budget.budget_0', ['budget']);
        } else {
          invalid.focus();
          invalid.parentElement.parentElement.previousElementSibling.click();
        }

        return false;
      "
    >
			<span>Continuar</span>
			<img class="budget_btn_img" src="<?= get_template_directory_uri() ?>/assets/dropdowny_arrow_white.png">
		</button>

    <button
      class="budget_btn budget_btn_send"
      type="submit"
      onclick="
        document.querySelectorAll('.budget_answer_display').forEach(element => element.firstElementChild.click());
        let invalid = [...document.querySelectorAll(`.budget_body_${budget_page} input`)].find(input => !input.checkValidity());
        
        if(!invalid) {
          return true
        }

        invalid.focus();
        invalid.parentElement.parentElement.previousElementSibling.click();
        return false;
      "
    >
			<span>Enviar</span>
			<img class="budget_btn_img" src="<?= get_template_directory_uri() ?>/assets/dropdowny_arrow_white.png">
		</button>
	</div>
</form>


<?php get_footer(); ?>
