<?php
/**
 * Add custom styling to the sign-up, log in, and admin areas.
 *
 * @package Baseline
 */
	 
	 // Defines height, width, and location of theme's logo.
	class themeLogo {
	
		const THEME_LOGO_WIDTH = '240';
		const THEME_LOGO_HEIGHT = '120';
		const THEME_LOGO_PATH = 'img/logo.png';
	
	}
	
	// Sets some custom styles for the register & log in screens.
	function baseline_login_styles() {
		
		$theme_logo_width = themeLogo::THEME_LOGO_WIDTH;
		$theme_logo_height = themeLogo::THEME_LOGO_HEIGHT;
		$theme_logo_path = themeLogo::THEME_LOGO_PATH;
		
		echo '<link rel="stylesheet/less" type="text/css" href="' . get_template_directory_uri() . '/inc/admin/style-login.less" media="all" />';
		
		if ( SITE_MODE == 'dev' ) {
			echo '<script type="text/javascript">less = { env: \'development\' };</script>';
		}
			
		echo '<script src="'. get_template_directory_uri() .'/js/libs/less-1.7.0.min.js" type="text/javascript"></script>';

		?>
	
		<style type="text/css">
			
			/* For the register, log in, and password screens. */
			.login h1 a {
				width: <?php echo $theme_logo_width; ?>px;
				height: <?php echo $theme_logo_height; ?>px;
				background-image: url('<?php echo get_template_directory_uri().'/'. $theme_logo_path; ?>');
				background-size: <?php echo $theme_logo_width; ?>px <?php echo $theme_logo_height; ?>px;
			}
			    
		</style>
		
	<?php }
	 
	add_action( 'login_head', 'baseline_login_styles' );

	// Gets the blog name and sets it as the logo title for the register & log in screens.            
	function set_login_title() {
	    return get_bloginfo( 'name' );
	}
                 
	add_filter( 'login_headertitle', 'set_login_title' );
	
	//Gets the blog URL and sets it as the logo URL for the register & log in screens.                
	function set_login_url() {
  		return site_url();
	}

	add_filter( 'login_headerurl', 'set_login_url');
	
	// Enables styling the admin editing window
	function baseline_editor_styles() {
    	add_editor_style( 'inc/admin/editor-style.css' );
	}
	
	add_action( 'init', 'baseline_editor_styles' );
	
	// Set the editing window content width based on the theme's design and stylesheet.
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */
?>
