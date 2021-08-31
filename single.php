<?php
get_header();
while(have_posts()){the_post();
?>


<section class="main">
<h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</section>



<?php
}
get_footer(); ?>
