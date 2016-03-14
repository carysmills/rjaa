<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<nav>
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'primary'
  )); ?>
</nav> 

<div class="main">
  <div class="container">

    <div class="content">
    		<?php
      $args = array(
        'tag' => 'news',
        'posts_per_page' => 5,
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          the_title('<h1>','</h1>');
        ?>
        <p><?php the_content(); ?><p>
    <?php endwhile; else: ?>
      <p>Sorry, no posts with this tag!</p>
    <?php endif; wp_reset_query(); ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>