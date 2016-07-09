<?php /* Template Name: Cantley */ ?>

  <a href="https://ryersonjournalismalumni.com/"><img class="logohead2" src="<?php the_field('logohead'); ?>" alt=""></a>


<?php get_header();  ?>

    <div class="content pagemain">
      <nav>

        <a href="https://ryersonjournalismalumni.com/"><img class="logohead" src="<?php the_field('logohead'); ?>" alt=""></a>

        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </nav> 

      <div class="mainContain">

         <div class="intro"><?php the_field('cantley'); ?></div>
         <div
           style="background-image: url('<?php the_field('bryanphoto'); ?>');"></div>


          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full' ); ?>
            <?php endif; ?>
            
          <?php endwhile; // end the loop?>
      </div>
    </div> <!-- /,content -->

        <div class="social clearfix" id="social">
      <ul class="clearfix">
        <li><a target="_blank" href="<?php the_field('fblink'); ?>"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="<?php the_field('twitterlink'); ?>"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="<?php the_field('email'); ?>"><i class="fa fa-envelope"></i></a></li>
      </ul>
    </div>

<?php get_footer(); ?>
