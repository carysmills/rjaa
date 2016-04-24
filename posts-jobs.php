<!-- /*
	Template Name: Jobs
*/ -->

  <img class="logohead2" src="<?php the_field('logohead'); ?>" alt="">

<?php  ?>
<?php get_header(); ?>
        <nav>
        <img class="logohead" src="<?php the_field('logohead'); ?>" alt="">

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

<div class="social2 clearfix" id="social">
  <ul class="clearfix">
    <li><a target="_blank" href="<?php the_field('fblink'); ?>"><i class="fa fa-facebook"></i></a></li>
    <li><a target="_blank" href="<?php the_field('twitterlink'); ?>"><i class="fa fa-twitter"></i></a></li>
    <li><a target="_blank" href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="<?php the_field('email'); ?>"><i class="fa fa-envelope"></i></a></li>
  </ul>
</div>