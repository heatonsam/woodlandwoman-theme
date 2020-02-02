<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Woodland_Woman
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_header(); ?>
    <body <?php body_class('site-container'); ?>>
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woodlandwoman' ); ?></a>
            <?php include('header-visible.php'); ?>
          <div class="grid-wrapper">
            <a id="#content"></a><?php include('featured-posts.php'); ?>
            <?php get_sidebar(); ?>
          </div>
<?php include('post-grid.php'); ?>
          <?php include('insta-grid.php'); ?>
            <?php get_footer(); ?>
    </body>
</html>
