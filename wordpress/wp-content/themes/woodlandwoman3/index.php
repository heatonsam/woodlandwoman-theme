<?php
/*
  Woodland Woman theme.
*/
?>

<html>
    <?php get_header(); ?>
    <body>
        <?php wp_nav_menu(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php endwhile; else : ?><?php endif; ?>

        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
    </body>
</html>
