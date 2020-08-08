<?php get_header(); ?>

<main>
  <div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-lg-3">
        <?php dynamic_sidebar('blog-sidebar'); ?>
        </div>
        <div class="col-lg-9">
        <h1><?php single_cat_title(); ?></h1>

          <?php if (have_posts()):
            while (have_posts()):
              the_post(); ?>
            <div class="card mb-4">
              <div class="card-body">

                <h3><?php the_title(); ?></h3>
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url(
                    'smallest'
                  ); ?>" class="img-fluid"/>
                <?php endif; ?> 
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>

              </div>
            </div>

          <?php
            endwhile;
          endif; ?>

          <?php
          global $wp_query;

          $big = 999999999; // need an unlikely integer

          echo paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
          ]);
          ?>

        </div>  
      </div>  
  </div>
</main>

<?php get_footer(); ?>
