<?php
/**
 * Custom wp-config.php heavily influenced by Mark Jaquith's WordPress Skeleton
 * For more visit http://markjaquith.wordpress.com/2012/05/26/wordpress-skeleton/
 */

/**
 * Check for and switch between local and production environments
 */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-dev.php' ) ) {
	// Set mode to dev
	define( 'SITE_MODE', 'dev' );
	// Pull in dev environment settings
	include( dirname( __FILE__ ) . '/wp-config-dev.php' );
	
} else {
	// Set mode to production
	define( 'SITE_MODE', 'prod' );
	
	//C onnect to database
	define( 'WP_DEV_MODE', false );
	define( 'DB_NAME', '' );
	define( 'DB_USER', '' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', '' ); // Probably 'localhost'
	// Disable debug
	define( 'WP_DEBUG', false );
	define( 'WP_DEBUG_DISPLAY', false );
	// Other database settings - rarely changed
	// define( 'DB_CHARSET', 'utf8' );
	// define( 'DB_COLLATE', '' );
	// If the whole site is in a sub-directory, set it here (without the slashes)
	$sub_dir = '';
	// Place any production-specific settings below this comment
}

/**
 * Other database settings
 */

// Table prefix
$table_prefix  = '';

/**
 * Salts, for security
 * Grab these from: https://api.wordpress.org/secret-key/1.1/salt
 */

/**
 * Language
 * Leave blank for American English
 */
define( 'WPLANG', '' );

/**
 * Bootstrap WordPress
 */

if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once( ABSPATH . 'wp-settings.php' );
