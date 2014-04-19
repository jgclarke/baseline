<?php
/**
 * The front page template file.
 *
 * @package Baseline
 */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

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

		</main><!-- #main -->
		
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
