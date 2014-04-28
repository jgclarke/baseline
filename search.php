<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Baseline
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
	
		<div id="primary" class="content-area">

			<?php if ( have_posts() ) : ?>
	
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'baseline' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', 'search' ); ?>
	
			<?php endwhile; ?>
	
				<?php baseline_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
			
		</div><!-- #primary -->
	
		<?php get_sidebar(); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
