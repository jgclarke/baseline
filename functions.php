<?php
/**
 * Baseline functions and definitions
 *
 * @package Baseline
 */

if ( ! function_exists( 'baseline_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function baseline_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'baseline', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enables support for featured images.
	add_theme_support( 'post-thumbnails' );
	// add_image_size( 'custom-thumb-name', 150, 150, true );

	// Setup menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'baseline' ),
	) );

	// Enable support for Post Formats.
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Excerpts
	function custom_excerpt_length( $length ) {
		return 26; // words
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 10 );
	
	function custom_excerpt_more( $more ) {
		return '&hellip;';
	}
	add_filter( 'excerpt_more', 'custom_excerpt_more' );
	
	/**
	 * Customized admin area features
	 */
	// Customize login/sign-up area; editor stylesheet, other admin customzizations.
	require( get_template_directory() . '/inc/admin/login-config.php' );
	
	// Hide default Widgets that won't be relevant for this site.
	require( get_template_directory() . '/inc/admin/remove-default-widgets.php' );
	
}

endif; // baseline_setup
add_action( 'after_setup_theme', 'baseline_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function baseline_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Home Sidebar', 'baseline' ),
		'id' => 'sidebar-home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Standard Sidebar', 'baseline' ),
		'id' => 'sidebar-standard',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'News Sidebar', 'baseline' ),
		'id' => 'sidebar-news',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'baseline_widgets_init' );

/**
 * Load LESS stylesheet and Javascript
 */
function baseline_enque_less() {
	
	echo '<link rel="stylesheet/less" type="text/css" href="'. get_template_directory_uri() .'/style.less" media="all" />';
	
	if ( SITE_MODE == 'dev' ) {
		echo '<script type="text/javascript">less = { env: "development" };</script>';
	}
	
	echo '<script src="'. get_template_directory_uri() .'/js/libs/less-1.7.0.min.js" type="text/javascript"></script>';
		
}
	
add_action('wp_head', 'baseline_enque_less');

/**
 * Enqueue scripts and styles.
 */
function baseline_scripts_styles() {

	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.min.js', array(), '1', false );
	
	wp_enqueue_style( 'baseline-style-normalize', get_template_directory_uri() . '/style-normalize.css' );
	
	wp_enqueue_style( 'baseline-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'baseline-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20120206', true );

	wp_enqueue_script( 'baseline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'baseline-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baseline_scripts_styles' );

/**
 * Include additional helper files.
 */

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

 // Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';
