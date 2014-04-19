<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Baseline
 */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

			<div class="error-404 not-found">
			
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Page not found.', 'baseline' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
				
					<p><?php _e( 'We\'re sorry, the page you\'re looking for can\'t be found. You can search for what you\'re looking for:', 'baseline' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
				
			</div><!-- .error-404 -->

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>