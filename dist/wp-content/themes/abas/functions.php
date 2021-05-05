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
  'menu-principal' => __('Menu Principal', 'abas-online'),
  'menu-footer-01' => __('Menu Footer - Coluna 01', 'abas-online'),
  'menu-footer-02' => __('Menu Footer - Coluna 02', 'abas-online'),
));


// Adiciona estilos e scrits
function abas_scripts()
{
  wp_enqueue_style('critital', get_template_directory_uri() . '/css/critical.css', array(), '1.0', 'all');
  // wp_enqueue_style('scroll', get_template_directory_uri() . '/css/components/scroll.css', array(), '1.0.0', 'all');

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js', array('jquery'), '2.4.4', true);
  wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.0', true);
  wp_enqueue_script('mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), '1.14.16', true);
  wp_enqueue_script('validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js', array('jquery'), '1.19.2', true);
  wp_enqueue_script('acoes', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'abas_scripts');


// Configs do Gutemberg
function wpabas_config()
{
  // 1. Responsividade nas mídias incorporadas, como o bloco do YouTube, por exemplo.
  add_theme_support('responsive-embeds');

  // 2. Estilo padrão de cada bloco.
  add_theme_support('wp-block-styles');

  // 3. Alinhamentos de blocos: largura completa (Full) e largura ampla (Wide)
  add_theme_support('align-wide');

  add_theme_support('editor-color-palette', array(
    array(
      'name' => __('Roxo', 'abas'),
      'slug' => 'roxo',
      'color' => '#411C54',
    ),
    array(
      'name' => __('Amarelo', 'abas'),
      'slug' => 'amarelo',
      'color' => '#F2C30D',
    ),
    array(
      'name' => __('Cinza', 'abas'),
      'slug' => 'cinza',
      'color' => '#404040',
    ),
    array(
      'name' => __('Cinza Claro', 'abas'),
      'slug' => 'cinza-claro',
      'color' => '#fafafa',
    ),
    array(
      'name' => __('Branco', 'abas'),
      'slug' => 'branco',
      'color' => '#ffffff',
    ),
  ));
}
add_action('after_setup_theme', 'wpabas_config', 0);


// Post Type Integrações
function cadastrando_post_type_integracoes()
{
  $nomeSingular = 'Integração';
  $nomePlural = 'Integrações';
  $description = $nomeSingular . ' do Abas';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-admin-plugins',
    'supports' => $supports
  );
  register_post_type('integracoes', $args);
}
add_action('init', 'cadastrando_post_type_integracoes');
function tipo_integracao()
{
  $nomeSingular = 'Tipo';
  $nomePlural = 'Tipos';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
  );
  register_taxonomy('tipo_integracao', 'integracoes', $args);
}
add_action('init', 'tipo_integracao');


// Post Type Depoimentos
function cadastrando_post_type_depoimentos()
{
  $nomeSingular = 'Depoimento';
  $nomePlural = 'Depoimentos';
  $description = $nomeSingular . ' da Group Software';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'hierarchical' => true,
    'menu_icon' => 'dashicons-admin-users',
    'show_ui' => true,
    'supports' => $supports,
  );

  register_post_type('depoimentos', $args);
}
add_action('init', 'cadastrando_post_type_depoimentos');


// SIDEBAR
register_sidebar(
  array(
    "name" => "Barra lateral",
    "id" => "sidebar",
    "before_widget" => "<div class='widget mt-5'>",
    "after_widget" => "</div>",
    "before_title" => "<h5>",
    "after_title" => "</h5>",
  )
);