<?php

// Adiciona funções básicas
function abas_adiciona_recursos_tema()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  // add_image_size('exemplo', 340, 200, true);
}
add_action('after_setup_theme', 'abas_adiciona_recursos_tema');

// Registra menu bootstrap
function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

// Registra menus editáveis
register_nav_menus(array(
  'menu-principal' => __('Menu Principal', 'group-software'),
  'menu-rodape' => __('Menu Rodapé', 'group-software'),
  // 'menu-social' => __('Menu Social', 'group-software'),
));

// Adiciona estilos e scrits
function abas_scripts()
{
  // wp_enqueue_style('scroll', get_template_directory_uri() . '/css/components/scroll.css', array(), '1.0.0', 'all');

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js', array('jquery'), '2.4.4', true);
  wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.0', true);
  wp_enqueue_script('mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), '1.14.16', true);
  // wp_enqueue_script('validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js', array('jquery'), '1.19.2', true);
  wp_enqueue_script('lazyload', 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.1.2/lazyload.min.js', array('jquery'), '17.1.2', true);
  wp_enqueue_script('acoes', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'abas_scripts');