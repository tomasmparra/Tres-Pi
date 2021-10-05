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
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wdth,wght@0..1,100..900,62..125&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;1,400;0,500;1,500;0,600;1,600;0,700;1,700;0,800;1,800&display=swap" rel="stylesheet"> -->
  <?php wp_head(); ?>
  <style>
    :root{
      --primary_color:<?= get_option( 'primary_color', '' ); ?>;
      --secondary_color:<?= get_option( 'secondary_color', '' ); ?>;
    }
  </style>
</head>
<body <?php body_class(); ?>>



  <header class="header <?= isset($args['class']) ? $args['class'] : '' ?>" id="header" data-observe="#header_activator">


    <a class="sticky_imago" href="<?= get_site_url(); ?>">
      <?php require_once 'assets/iso.svg'; ?>
      <?php require_once 'assets/logo.svg'; ?>
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

    <div class="sticky_CTA_pos">  
      <p class="sticky_CTA" href="#">Comienza tu proyecto</p>
      <button class="menu_button" onclick="altClassFromSelector('menu_open', '.header', ['header'])">Menu</button>
    </div>

  </header>
