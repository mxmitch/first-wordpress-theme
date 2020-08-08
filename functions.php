<?php

function load_stylesheets()
{
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

function load_javascript()
{
  wp_register_script(
    'custom',
    get_template_directory_uri() . '/app.js',
    'jquery',
    1,
    true
  );
  wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');

// Add menus
add_theme_support('menus');

register_nav_menus([
  'top-menu' => __('Top Menu', 'theme'),
  'footer-menu' => __('Footer Menu', 'theme'),
]);

// Add image sizes
add_image_size('post_image', 1100, 750, true);
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

function customtheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

add_theme_support('post-thumbnails');

// Woocommerce

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
  echo '<main>';
}

function my_theme_wrapper_end()
{
  echo '</main>';
}

require_once 'wp_bootstrap_navwalker.php';

// Add a widget

register_sidebar([
  'name' => 'Page Sidebar',
  'id' => 'page-sidebar',
  'class' => 'widget',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
]);

register_sidebar([
  'name' => 'Blog Sidebar',
  'id' => 'blog-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
]);
