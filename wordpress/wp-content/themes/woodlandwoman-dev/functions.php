<?php
/**
 * Woodland Woman functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Woodland_Woman
 */

if ( ! function_exists( 'woodlandwoman_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function woodlandwoman_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Woodland Woman, use a find and replace
		 * to change 'woodlandwoman' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'woodlandwoman', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			  'menu-1' => esc_html__( 'Primary', 'woodlandwoman' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			  'search-form',
			  'comment-form',
			  'comment-list',
			  'gallery',
			  'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'woodlandwoman_custom_background_args', array(
			  'default-color' => 'ffffff',
			  'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			  'height'      => 250,
			  'width'       => 250,
			  'flex-width'  => true,
			  'flex-height' => true,
		) );
}
endif;
add_action( 'after_setup_theme', 'woodlandwoman_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woodlandwoman_content_width() {
	  // This variable is intended to be overruled from themes.
	  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	  $GLOBALS['content_width'] = apply_filters( 'woodlandwoman_content_width', 640 );
}
add_action( 'after_setup_theme', 'woodlandwoman_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woodlandwoman_widgets_init() {
	  register_sidebar( array(
		    'name'          => esc_html__( 'Sidebar', 'woodlandwoman' ),
		    'id'            => 'sidebar-1',
		    'description'   => esc_html__( 'Add widgets here.', 'woodlandwoman' ),
		    'before_widget' => '<section id="%1$s" class="widget %2$s">',
		    'after_widget'  => '</section>',
		    'before_title'  => '<h2 class="widget-title">',
		    'after_title'   => '</h2>',
	  ) );
}
add_action( 'widgets_init', 'woodlandwoman_widgets_init' );

/**
 * Use the minified stylesheet.
 */
function get_stylesheet_minified_uri() {
    return trailingslashit(get_template_directory_uri()) . 'style.min.css';
}

/**
 * Enqueue scripts and styles.
 */
function woodlandwoman_scripts() {
	  wp_enqueue_style( 'woodlandwoman-style', get_stylesheet_minified_uri() );

	  wp_enqueue_script( 'woodlandwoman-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	  wp_enqueue_script( 'woodlandwoman-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    wp_enqueue_script( 'comment-reply' );
	  }
}
add_action( 'wp_enqueue_scripts', 'woodlandwoman_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	  require get_template_directory() . '/inc/jetpack.php';
}

// Use it temporary to generate all featured images
add_action('the_post', 'auto_featured_image');
// Used for new posts
add_action('save_post', 'auto_featured_image');
add_action('draft_to_publish', 'auto_featured_image');
add_action('new_to_publish', 'auto_featured_image');
add_action('pending_to_publish', 'auto_featured_image');
add_action('future_to_publish', 'auto_featured_image');

/* Custom Functions */

/**
 * Generate excerpt based on content.
 */
function grid_excerpt_length( $content ) {
    $needles = array(".", "!",);

    for ($i = 0; $i < strlen($content); $i++) {
        for ($j = 0; $j < sizeof($needles); $j++) {
            if ($content{$i} == $needles[$j]) {
                return $i + 1;
            }
        }
    }
    return 300;
}

/**
 * Generate excerpt based on content.
 */
function featured_excerpt_length( $content ) {
    $needles = array(".", "!",);

    for ($i = 200; $i < strlen($content); $i++) {
        for ($j = 0; $j < sizeof($needles); $j++) {
            if ($content{$i} == $needles[$j]) {
                return $i + 1;
            }
        }
    }
    return 300;
}

/**
 * Automatically assign featured image.
 */
function auto_featured_image() {
    global $post;
    if (is_object($post)) {
        if (!has_post_thumbnail($post->ID)) {
            $attached_image = get_children( "post_parent=$post->ID&amp;post_type=attachment&amp;post_mime_type=image&amp;numberposts=1" );
            if ($attached_image) {
                foreach ($attached_image as $attachment_id => $attachment) {
                    set_post_thumbnail($post->ID, $attachment_id);
                }
            }
        }
    }
}

/**
 * Remove <p> tags from around images.
 */
function filter_ptags_on_images($content) {
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images');
add_filter('the_content', 'filter_ptags_on_images');
