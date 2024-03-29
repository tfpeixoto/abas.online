<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/images/favicon.png' ?>" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?= get_template_directory_uri() . '/webfonts/fa-solid-900.woff' ?>" type="font/woff2">
  <link href="<?= get_template_directory_uri() . '/webfonts/fa-brands-400.woff' ?>" type="font/woff2">
  <link href="<?= get_template_directory_uri() . '/webfonts/fa-regular-400.woff' ?>" type="font/woff2">

  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&family=Roboto:wght@400;700&display=swap" rel="stylesheet"> -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>" as="style" media="print" onload="this.media='all'; this.onload=null;" crossorigin>

</head>

<body <?php body_class(); ?>>

  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="<?php $url = site_url();
                  echo $url ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/marca-abas-positiva.svg" width="150" height="54" class="navbar-brand positiva" alt="Abas Online" />
          <img src="<?php bloginfo('template_url'); ?>/images/marca-abas-negativa.svg" width="150" height="54" class="navbar-brand negativa" alt="Abas Online" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-principal',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarNav',
          'menu_class'      => 'navbar-nav ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <!-- <a type="button" href="#" class="btn btn-amarelo d-none d-md-block" data-toggle="modal" data-target="#modalConversao">Solicitar demonstração <i class="fas fa-chevron-right"></i></a> -->
        <a type="button" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-amarelo d-none d-md-block trialBtn">Testar Grátis</a>
      </nav>
    </div>
  </header>