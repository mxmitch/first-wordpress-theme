<?php
/* Template Name: Shop Page */
?>

<?php get_header(); ?>

<main>
  <div id="template-shop" class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-12">
        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>
          <?php the_content(); ?>
        <?php
          endwhile;
        endif; ?>
      </div>  
    </div>  
  </div>
</main>

<?php get_footer(); ?>
