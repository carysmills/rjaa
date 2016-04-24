<?php get_header();  ?>

      <div class="content home" 
        style="background-image: url('<?php the_field('backgroundimg'); ?>');">
    <div class="buffer">

        <nav>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
        </nav> 

        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div class="element"></div>
          
          <div class="logo" 
            style="background-image: url('<?php the_field('logo'); ?>');">

        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
    </div>

    <section class="about"><div class="wrapper"><?php the_content(); ?></div></section> 

    <section class="contact clearfix">
      <div class="wrapper contacts">
        <div class="title"><?php the_field('contacttitle'); ?></div>
        <div class="form"><?php the_field('contact'); ?></div>
        <div class="twitter"><?php the_field('twitter'); ?></div>
      </div>

    <?php get_footer(); ?>
    </section>

  <!--   //wordpress this -->

      <div class="social home clearfix" id="social">
    <ul class="clearfix">
      <li><a target="_blank" href="<?php the_field('fblink'); ?>"><i class="fa fa-facebook"></i></a></li>
      <li><a target="_blank" href="<?php the_field('twitterlink'); ?>"><i class="fa fa-twitter"></i></a></li>
      <li><a target="_blank" href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="<?php the_field('email'); ?>"><i class="fa fa-envelope"></i></a></li>
    </ul>
  </div>
<!--  -->