<?php
/**
 * Spritzer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spritzer
 */

if ( ! function_exists( 'spritzer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function spritzer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Spritzer, use a find and replace
		 * to change 'spritzer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'spritzer', get_template_directory() . '/languages' );

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
		
		function register_my_menus() {
			register_nav_menus(
				array(
					'primary' => __( 'Header Menu' ),
					'secondary' => __( 'Footer Menu' )
				)
			);
		}
		add_action( 'init', 'register_my_menus' );

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
		add_theme_support( 'custom-background', apply_filters( 'spritzer_custom_background_args', array(
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
add_action( 'after_setup_theme', 'spritzer_setup' );

function spritzer_add_editor_style() {
	add_editor_style('dist/css/editor-style.css');
}
add_action( 'admin_init', 'spritzer_add_editor_style' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spritzer_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'spritzer_content_width', 1140 );
}
add_action( 'after_setup_theme', 'spritzer_content_width', 0 );

/**
 * 
 * Customize excerpt
 * 
 */
function custom_excerpt_length( $length ) {
	return 60;
}

function new_excerpt_more( $more ) {
	return '...';
}   
add_filter('excerpt_more', 'new_excerpt_more');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
* Enqueue scripts and styles.
*/
function spritzer_scripts() {

	wp_enqueue_style( 'spritzer-bs-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css' );

	wp_enqueue_style( 'spritzer-front-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/fontawesome.min.css' );

	wp_enqueue_style( 'spritzer-style', get_stylesheet_uri() );

	wp_enqueue_style( 'spritzer-animate_css', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" );

	wp_enqueue_script( 'spritzer-jquery', get_template_directory_uri() . '/src/js/jquery-3.4.1.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-scripts', get_template_directory_uri() . '/src/js/scripts.js', array('jquery'), '', true);

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', false, '', true );
	wp_enqueue_script( 'popper' );

	wp_enqueue_script( 'spritzer-tether', get_template_directory_uri() . '/src/js/tether.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-bootstrap', get_template_directory_uri() . '/src/js/bootstrap.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-scrollify', get_template_directory_uri() . '/src/js/scrollify.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-controlled-scrolling', get_template_directory_uri() . '/src/js/controlledScrolling.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-typedjs', get_template_directory_uri() . '/src/js/typed.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-bootstrap-hover', get_template_directory_uri() . '/src/js/bootstrap-hover.js', array('jquery'), '', true);

	wp_enqueue_script( 'spritzer-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '', true );

	wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), '4.8.2', true);
	wp_enqueue_script('mediaelement');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spritzer_scripts' );

/**
 * Add filters to menu items.
 */
require get_template_directory() . '/inc/menu-filters.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widget file.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Bootstrap NavWalker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

