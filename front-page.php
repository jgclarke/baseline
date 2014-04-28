<?php
/**
 * The front page template file.
 *
 * @package Baseline
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
	
		<div id="primary" class="content-area">
	
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
						get_template_part( 'content', 'page' );
					?>
	
				<?php endwhile; ?>
				
				<?php baseline_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>

		</div><!-- #primary -->

	</main><!-- #main -->
	
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>
