<?php

function enqueueAll()
{
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

    if ($_SERVER['SERVER_NAME'] != 'localhost') {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    } else {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    wp_enqueue_script('bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_style('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
}
add_action('wp_enqueue_scripts', 'enqueueAll');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support( 'wp-block-styles' );


function addWidgets()
{
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'addWidgets');

function ww_first_paragraph($id = null) {
    // Set $id to the current post by default
    if( !$id ) {
        global $post;
        $id = get_the_id();
    }
    // Get the post content
    $content = get_post_field( 'post_content', $id );
    $content = apply_filters( 'the_content', strip_shortcodes( $content ) );
    // Remove all tags, except paragraphs
    $excerpt = strip_tags( $content, '<p></p>' );
    // Remove empty paragraph tags
    $excerpt = force_balance_tags( $excerpt );
    $excerpt = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $excerpt );
    $excerpt = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $excerpt );
    // Get the first paragraph
    $excerpt = substr( $excerpt, 0, strpos( $excerpt, '</p>' ) + 4 );
    // Remove remaining paragraph tags
    $excerpt = strip_tags( $excerpt );
    return $excerpt;
}

function ww_posts_per_archive_page( $query ) {
    if( ! is_admin()
        && $query->is_tag()
        && $query->is_main_query()
        && is_archive() ) {
            $query->set( 'posts_per_page', 100 );
    }
}
add_action( 'pre_get_posts', 'ww_posts_per_archive_page' );


?>

