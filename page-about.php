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

          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full' ); ?>
            <?php endif; ?>

            <?php the_content(); ?>

          <?php endwhile; // end the loop?>


          <?php if( have_rows('biostuff') ): ?>
            <?php while( have_rows('biostuff') ): the_row(); 

              $name = get_sub_field('name');
              $biophoto = get_sub_field('biophoto');
              $bio = get_sub_field('bio');
              ?>
                <div class="bio">
                  <h3> <?php echo $name; ?></h3>
                  <img src="<?php echo $biophoto; ?>" alt="">
                  <p> <?php echo $bio; ?></p>
                </div>

            <?php endwhile; ?>
          <?php endif; ?>

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