<?php
/**
 * The template for displaying the header.
 *
 * @package Baseline
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">
		
		<title><?php wp_title( '&bull;', true, 'right' ); ?></title>
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">

			<header id="site-header" role="banner">
			
				<hgroup>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description">
						<?php bloginfo( 'description' ); ?>
					</h2>
				</hgroup>
				
				<a href="#" id="small-menu-pointer" title="Main menu">Menu</a>
		
				<nav id="site-navigation" class="main-navigation" role="navigation">
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'baseline' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
				
			</header><!-- #site-header -->

			<div id="content" class="site-content">
