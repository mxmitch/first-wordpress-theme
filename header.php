<!DOCTYPE html>
<html>
  <title>Nuts 'n Bolts</title>
  <head>
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
      <div class="row"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="/custom-template/">Nuts 'n Bolts</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="navbarTogglerDemo1" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo1">
          <?php wp_nav_menu([
            'menu' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker(),
          ]); ?>
          </div>
        </nav>
      </div>
    </div>
</header>
