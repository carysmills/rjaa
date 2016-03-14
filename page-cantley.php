<?php /* Template Name: Cantley */ ?>

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

         <div class="intro"><?php the_field('cantley'); ?></div>


          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full' ); ?>
            <?php endif; ?>
            
          <?php endwhile; // end the loop?>
          <?php get_footer(); ?>
      </div>
    </div> <!-- /,content -->