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
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <div id="content" class="site-content">
            <div class="grid-wrapper">
	              <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woodlandwoman' ); ?></a>
                <?php include('header-visible.php'); ?>
                <div id="content" class="site-content">
                    <div id="primary" class="content-area grid-main">
		                    <main id="main" class="site-main">
                            <?php include('featured-posts.php'); ?>
		                    </main><!-- #main -->
                    </div><!-- #primary, grid-main -->
                </div><!-- #content -->
                <?php
                get_sidebar();
                ?>
                <?php include('post-grid.php'); ?>
                <?php include('insta-grid.php'); ?>
            </div>
            <?php
            get_footer();
            ?>
        </div>
    </div>
</body>
