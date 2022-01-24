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
      <div class="sticky_CTA_over">
        <p class="sticky_CTA" href="#">Comienza tu proyecto</p>
      </div>
      <button class="burger" onclick="altClassFromSelector('menu_open', '.header')">
        <div class="burger_bar"></div>
        <div class="burger_bar"></div>
        <div class="burger_bar"></div>
      </button>
    </div>

    <button class="sticky_CTA_btn">
      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-pie" class="svg-inline--fa fa-chart-pie fa-w-17" role="img" viewBox="0 0 544 512"><path fill="currentColor" d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z"/></svg>
    </button>
  </header>
