<?php get_header(); ?>




<section class="hero hero_serv">
  <div class="hero_wording">
    <h1 class="hero_copy">Lorem ipsum dolor<br>sir amet et sicue</h1>
    <p class="hero_text">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat:
<br><br>
· Lorem ipsum dolor.<br>
· Lorem ipsum dolor sir amet et sicue.<br>
· Consectetur adipiscing elit.<br>
· Sed du mondo ut labore.<br>
· Ea commodo consequat ex ale.
    </p>
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


<?php get_footer(); ?>
