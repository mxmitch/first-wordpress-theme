<?php get_header(); ?>

<main id="page-template">
  <div class="container pt-5 pb-5 page-container">
    <div class="row">
      <div class="col-lg-6">
        <?php if (has_post_thumbnail()): ?>
          <img src="<?php the_post_thumbnail_url(
            'post_image'
          ); ?>" class="img-fluid page-img" alt="<?php the_title(); ?>"/>
        <?php endif; ?>
      </div>
      <div class="col-lg-6">
        <div class="row d-flex align-items-center h-100">
          <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-md-12">
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
    </div>  
  </div>
</main>

<?php get_footer(); ?>
