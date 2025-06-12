<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

function registrar_menu_merlins()
{
  register_nav_menu('menu-principal', __('Menu Principal'));
}
;
add_action('init', 'registrar_menu_merlins');

function wp_merlins_scripts()
{
  wp_register_script('wp-merlins-scripts', get_template_directory_uri() . '/scripts/script.js', array(), '1.0', true);
  wp_enqueue_script('wp-merlins-scripts');

}
add_action('wp_enqueue_scripts', 'wp_merlins_scripts');

function wp_merlins_style()
{
  wp_register_style('wp-merlins-potions', get_template_directory_uri() . '/style.css', array(), false, false);
  wp_enqueue_style('wp-merlins-potions');
}
add_action('wp_enqueue_scripts', 'wp_merlins_style');

//Página com Informações gerais do Header.
function custom_post_type_cms_header()
{
  register_post_type('Custom Elements Header', array(
    'label' => 'Custom Elements Header',
    'description' => 'Informações de Campos personalizados do Header',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'Custom Elements Header', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

    'labels' => array(
      'name' => 'Custom Elements Header',
      'singular_name' => 'CMS Header',
      'menu_name' => 'CMS Header',
      'add_new' => 'Adicionar Novo',
      'add_new_item' => 'Adicionar Novo CMS Header',
      'edit' => 'Editar',
      'edit_item' => 'Editar CMS Header',
      'new_item' => 'Novo CMS Header',
      'view' => 'Ver CMS Header',
      'view_item' => 'Ver CMS Header',
      'search_items' => 'Procurar CMS Header',
      'not_found' => 'Nenhum CMS Header Encontrado',
      'not_found_in_trash' => 'Nenhum CMS Header Encontrado no Lixo',
    )
  ));
}

add_action('init', 'custom_post_type_cms_header');

//Página com informações gerais do Footer.
?>