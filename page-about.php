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

          <?php get_footer(); ?>
      </div>
    </div> <!-- /,content -->