<?php
/**
 * The template for displaying all pages.
 *
 * @package Baseline
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
	
		<div id="primary" class="content-area">
	
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>

	</main><!-- #main -->
	
<?php get_footer(); ?>
