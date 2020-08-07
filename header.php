<!DOCTYPE html>
<html>

  <head>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<header class="sticky-top">
  <div class="container d-flex align-items-center justify-content-between h-100">
      <a href="/custom-template/"><h1>Nuts 'n Things</h1></a>
    <?php wp_nav_menu([
      'theme_location' => 'top-menu',
      'menu_class' => 'navigation',
    ]); ?>
  </div>
</header>

<div class="container">