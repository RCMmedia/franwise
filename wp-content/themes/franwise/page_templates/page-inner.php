<?php
/**
 * Template Name: Inner
 */

get_header(); ?>

	<div class="main">
		<div class="inner clearfix">
			<div class="content clearfix">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				


<?php endwhile; // end of the loop. ?>
			</div>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
		

<?php get_footer(); ?>
