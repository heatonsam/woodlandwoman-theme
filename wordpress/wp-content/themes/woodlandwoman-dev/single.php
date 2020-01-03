<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
            <?php include('single-content.php'); ?>
            <?php get_footer(); ?>
        </div>
    </body>
</html>
