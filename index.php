<?php
/**
 * The main template file.
 *
 * @package Baseline
 */

get_header(); ?>

	<main id="main" class="site-main site-content" role="main">
	
		<div id="primary" class="content-area">
		
			<div id="content">

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
			
			</div><!-- #content -->
		
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>

	</main><!-- #main -->
	
<?php get_footer(); ?>
