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

function my_theme_scripts()
{
  wp_enqueue_script('my-theme-js', get_template_directory_uri() . '/scripts/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

function wp_merlins_style()
{
  wp_register_style('wp-merlins-potions', get_template_directory_uri() . '/style.css', array(), false, false);
  wp_enqueue_style('wp-merlins-potions');
}
add_action('wp_enqueue_scripts', 'wp_merlins_style');
?>