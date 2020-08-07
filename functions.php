<?php
function load_stylesheets()
{
  wp_register_style(
    'bootstrap',
    get_template_directory_uri() . '/css/bootstrap.min.css',
    [],
    false,
    'all'
  );
  wp_enqueue_style('bootstrap');

  wp_register_style(
    'stylesheet',
    get_template_directory_uri() . '/style.css',
    [],
    false,
    'all'
  );
  wp_enqueue_style('stylesheet');

  wp_register_style(
    'custom',
    get_template_directory_uri() . '/app.css',
    [],
    false,
    'all'
  );
  wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
  wp_deregister_script('jquery');
  wp_enqueue_script(
    'jquery',
    get_template_directory_uri() . '/js/jquery.min.js',
    '',
    1,
    true
  );
  add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs()
{
  wp_register_script(
    'customjs',
    get_template_directory_uri() . '/js/app.js',
    '',
    1,
    true
  );
  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

function customtheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

// Add menus
add_theme_support('menus');

register_nav_menus([
  'top-menu' => __('Top Menu', 'theme'),
  'footer-menu' => __('Footer Menu', 'theme'),
]);

add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

remove_action(
  'woocommerce_before_main_content',
  'woocommerce_output_content_wrapper',
  10
);
remove_action(
  'woocommerce_after_main_content',
  'woocommerce_output_content_wrapper_end',
  10
);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start()
{
  echo '<section id="main">';
}

function my_theme_wrapper_end()
{
  echo '</section>';
}
