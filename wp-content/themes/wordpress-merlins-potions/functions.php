<?php

function my_theme_scripts()
{
  wp_enqueue_script('my-theme-js', get_template_directory_uri() . '/scripts/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


?>