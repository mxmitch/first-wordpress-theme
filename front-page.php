<?php get_header(); ?>
  <main>
    <div id="hero">
      </div>

      <div class="container">

      <!-- Three columns of text below the carousel -->
      <div class="row pt-5 pb-5 marketing">
        <div class="col-lg-4 mt-2 mb-2">
        <?php
        $image = get_field('3_across_image_1');
        if (!empty($image)): ?>
            <img src="<?php echo esc_url(
              $image['url']
            ); ?>" alt="<?php echo esc_attr(
  $image['alt']
); ?>" class="rounded-circle" width="140px" height="140px"/>
          <?php endif;
        ?>
          <?php while (have_posts()):
            the_post(); ?>
            <h2><?php the_field('3_across_heading_1'); ?></h2>
            <p><?php the_field('3_across_1'); ?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          <?php
          endwhile;
// end of the loop.
?>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 mt-2 mb-2">

        <?php
        $image = get_field('3_across_image_2');
        if (!empty($image)): ?>
            <img src="<?php echo esc_url(
              $image['url']
            ); ?>" alt="<?php echo esc_attr(
  $image['alt']
); ?>" class="rounded-circle" width="140px" height="140px"/>
          <?php endif;
        ?>
          <h2><?php the_field('3_across_heading_2'); ?></h2>
          <p><?php the_field('3_across_2'); ?></p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 mt-2 mb-2">
        <?php
        $image = get_field('3_across_image_3');
        if (!empty($image)): ?>
            <img src="<?php echo esc_url(
              $image['url']
            ); ?>" alt="<?php echo esc_attr(
  $image['alt']
); ?>" class="rounded-circle" width="140px" height="140px"/>
          <?php endif;
        ?>
          <h2><?php the_field('3_across_heading_3'); ?></h2>
          <p><?php the_field('3_across_3'); ?></p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
      
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-lg-12">
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
