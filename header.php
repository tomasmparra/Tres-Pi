<?php
$site = '6LcRuNAUAAAAADtamJW75fYf8YtNHceSngjKsf-B';
$scrt = '6LcRuNAUAAAAALBu7Ymh0yxmTXTJmP0rsnkjGyj0';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,1,400;0,1,700;0,1,800&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
    :root{
      --primary_color:<?= get_option( 'primary_color', '' ); ?>;
      --secondary_color:<?= get_option( 'secondary_color', '' ); ?>;
    }
  </style>
</head>
<body <?php body_class(); ?>>


  <header class="header" id="header">

    <a class="sticky_imago" href="<?php echo get_site_url(); ?>">
      <img class="iso" src="<?php echo get_template_directory_uri() . '/assets/iso.svg' ?>" alt="Isotipo de Tres Pi">
      <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo.svg' ?>" alt="Logotipo de Tres Pi">
    </a>

    <?php
    $args = array(
      'theme_location' => 'header',
      'depth' => 0,
      'container'	=> false,
      'fallback_cb' => false,
      'menu_class' => 'nav_bar',
    );
    wp_nav_menu($args);
    ?>

    <p class="sticky_CTA" href="#">Comienza tu proyecto</p>

  </header>
