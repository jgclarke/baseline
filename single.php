<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Baseline
 */

get_header(); ?>

	<main id="main" class="site-main site-content" role="main">
	
		<div id="primary" class="content-area">
		
			<div id="content">

				<?php while ( have_posts() ) : the_post(); ?>
		
					<?php get_template_part( 'content', 'single' ); ?>
		
					<?php baseline_post_nav(); ?>
		
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>
		
				<?php endwhile; // end of the loop. ?>
			
			</div><!-- #content -->

		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>

	</main><!-- #main -->
	
<?php get_footer(); ?>