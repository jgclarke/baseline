<?php
/**
 * Custom wp-config-dev.php loaded only for development-specific options
 * Heavily influenced by Mark Jaquith's WordPress Skeleton
 * For more visit http://markjaquith.wordpress.com/2012/05/26/wordpress-skeleton/
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
 
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '' );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' ); 

/**
 * Enable debug.
 */
 
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/**
 * If the whole site is in a sub-directory, set it here (without the slashes)
 */
 
$sub_dir = '';

/**
 * Place any other local-specific settings here.
 */