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
get_header();
?>
<body <?php body_class('site-container'); ?>>
    <div class="grid-wrapper">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woodlandwoman' ); ?></a>
        <?php include('header-visible.php'); ?>
        <?php include('featured-posts.php'); ?>
        <?php get_sidebar(); ?>
        <?php include('post-grid.php'); ?>
        <?php include('insta-grid.php'); ?>
        <?php get_footer(); ?>
    </div>
</body>
