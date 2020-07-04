<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
            <a id="#content"></a><?php include('page-content.php'); ?>
            <?php get_sidebar(); ?>
        </div>
        <?php include('insta-grid.php'); ?>
        <?php get_footer(); ?>
    </body>
</html>
