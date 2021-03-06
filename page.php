<?php get_header();  ?>

    <div class="content pagemain">
      <nav>
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
          <?php get_footer(); ?>
      </div>
    </div> <!-- /,content -->