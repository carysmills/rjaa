<?php /* Template Name: Headliners */ ?>

  <img class="logohead2" src="<?php the_field('logohead'); ?>" alt="">

<?php get_header();  ?>

    <div class="content pagemain">
      <nav>

      <img class="logohead" src="<?php the_field('logohead'); ?>" alt="">

        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </nav> 
    
      <div class="mainContain">

          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full' ); ?>
            <?php endif; ?>

            <?php the_content(); ?>

          <?php 

            if( have_rows('headlineryear') ): ?>

              <?php while( have_rows('headlineryear') ): the_row();?> 

              <h3 class="year clearfix"> <?php the_sub_field('year') ?></h3>

              <?php 
              if( have_rows('headlinersofyear') ): ?>
                <?php while( have_rows('headlinersofyear') ): the_row();?> 

                  <div class="headlinerBlock">
                     <h4 class="name"><?php the_sub_field('headlinername'); ?></h4>
                     <img src="<?php the_sub_field('headlinerphoto'); ?>" alt="">
                     <p><?php the_sub_field('headlinerbio'); ?></p>
                   </div>

              <?php endwhile; ?>
            <?php endif; ?>

            <?php endwhile; ?>
          <?php endif; ?>

     <?php endwhile; // end the loop?>

          <?php get_footer(); ?>
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