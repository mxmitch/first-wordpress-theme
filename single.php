<?php get_header(); ?>

<main>
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-3">
      <?php dynamic_sidebar('blog-sidebar'); ?>
      </div>
      <div class="col-lg-9">
        <?php if (has_post_thumbnail()): ?>
          <img src="<?php the_post_thumbnail_url(
            'post_image'
          ); ?>" class="img-fluid mb-5" alt="<?php the_title(); ?>"/>
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>
          <?php the_content(); ?>
        <?php
          endwhile;
        endif; ?>

        <?php the_tags(); ?>
      </div>  
    </div>  
  </div>
</main>

<?php get_footer(); ?>
