<?php get_header(); ?>

<main id="single-template">
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php the_title(); ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">
          <?php echo get_the_author(); ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?php echo get_the_date(); ?></p>

        <hr>

        <!-- Preview Image -->
        <div width="auto">
          <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(
                  'post_image'
                ); ?>" class="img-fluid mb-5" alt="<?php the_title(); ?>"/>
          <?php endif; ?>
        </div>

        <hr>

        <!-- Post Content -->
        <div class="post-content mb-5">
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

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 category-list">
                <?php echo wp_list_categories('title_li='); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
              <?php dynamic_sidebar('blog-sidebar'); ?>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container --> 

<?php get_footer(); ?>
