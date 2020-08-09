<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('title'); ?></title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<header class="top-header">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="/custom-template/">Brand</a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e(
          'Toggle navigation',
          'your-theme-slug'
        ); ?>">
          <span class="navbar-toggler-icon"></span>
        </button>
      <?php wp_nav_menu([
        'theme_location' => 'top-menu',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'bs-example-navbar-collapse-1',
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
      ]); ?>
    </div>
  </nav>
</header>
