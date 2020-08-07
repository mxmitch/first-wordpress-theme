<!DOCTYPE html>
<html>
  <title>Nuts 'n Bolts</title>
  <head>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
      <div class="row"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="/custom-template/">Nuts 'n Bolts</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo1">
            <?php wp_nav_menu([
              'theme_location' => 'top-menu',
              'menu_class' => 'navigation',
            ]); ?>
          </div>
        </nav>
      </div>
    </div>
</header>
