<?php
/**
 * The template for displaying Archive pages.
 *
 * @package Baseline
 */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
	
				<header class="page-header">
					<h1 class="page-title">
						<?php
							if ( is_category() ) :
								single_cat_title();
	
							elseif ( is_tag() ) :
								single_tag_title();
	
							elseif ( is_author() ) :
								printf( __( 'Author: %s', 'baseline' ), '<span class="vcard">' . get_the_author() . '</span>' );
	
							elseif ( is_day() ) :
								printf( __( 'Day: %s', 'baseline' ), '<span>' . get_the_date() . '</span>' );
	
							elseif ( is_month() ) :
								printf( __( 'Month: %s', 'baseline' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'baseline' ) ) . '</span>' );
	
							elseif ( is_year() ) :
								printf( __( 'Year: %s', 'baseline' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'baseline' ) ) . '</span>' );
	
							else :
								_e( 'Archives', 'baseline' );
	
							endif;
						?>
					</h1>
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .page-header -->
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
						get_template_part( 'content', get_post_format() );
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
