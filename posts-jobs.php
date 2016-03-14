<!-- /*
	Template Name: Jobs
*/ -->

<?php  ?>
<?php get_header(); ?>

      <img class="logohead" src="<?php the_field('logohead'); ?>" alt="">

        <nav>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
        </nav> 

<div class="main">
  <div class="container">

    <div class="jobcontent">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2 class="posts"><?php the_title(); ?></h2>

      <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'full' ); ?>
      <?php endif; ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
    </div> <!--/.content -->


<?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>