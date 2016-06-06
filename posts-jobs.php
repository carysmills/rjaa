<!-- /*
	Template Name: Jobs
*/ -->

<div class="jobsHeader" 
        style="background: linear-gradient(
      rgba(14, 14, 82, 0.7), 
      rgba(14, 14, 82,0.9)
    ),  url('<?php the_field('jobs_background'); ?>') no-repeat; background-size: cover;">

  <a href="https://ryersonjournalismalumni.com/"><img class="logohead2 filter" src="<?php the_field('logohead'); ?>" alt=""></a>

<?php  ?>
<?php get_header(); ?>
        <nav>
        <a href="https://ryersonjournalismalumni.com/"><img class="logohead filter" src="<?php the_field('logohead'); ?>" alt=""></a>

          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
        </nav> 

<h2 class="jobPosts wrapper"><?php the_title(); ?></h2>

</div>        

<div class="main wrapper">
  <div class="container">

    <div class="jobcontent">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'full' ); ?>
      <?php endif; ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<div class="social2 clearfix" id="social">
  <ul class="clearfix">
    <li><a target="_blank" href="<?php the_field('fblink'); ?>"><i class="fa fa-facebook"></i></a></li>
    <li><a target="_blank" href="<?php the_field('twitterlink'); ?>"><i class="fa fa-twitter"></i></a></li>
    <li><a target="_blank" href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="<?php the_field('email'); ?>"><i class="fa fa-envelope"></i></a></li>
  </ul>
</div>

<?php get_footer(); ?>