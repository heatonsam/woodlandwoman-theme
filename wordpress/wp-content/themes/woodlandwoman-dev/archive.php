<?php
/**
 * The template for displaying archive pages
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
        <div class="grid-wrapper">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woodlandwoman' ); ?></a>
            <?php include('header-visible.php'); ?>
            <a id="#content"></a><?php include('archive-content.php'); ?>
            <?php get_sidebar(); ?>
            <?php get_footer(); ?>
        </div>
    </body>
</html>
