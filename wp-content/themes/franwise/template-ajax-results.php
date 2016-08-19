<?php
/*
AJAX Results Template Example

This is an example of a template part which can be used to customize how search
results appear when using AJAX.
*/
?>

<?php if ( have_posts() ): ?>

		<div id="nav-icon" class="trigger-overlay overlay-trigger open search-box">
		  <span></span>
		  <span></span>
		  <span></span>
		</div><!-- #nav-icon -->
		
		<h3>Search Results</h3>
		<!-- <div><a class="clear-search" >Clear Search</a></div> -->
   <?php while ( have_posts() ): the_post(); ?>

       <div id="post-<?php the_ID(); ?>" <?php post_class('project-box'); ?>>
				<div class="featured-image">
					<?php 
						$image = get_field('featured_image');
						$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					<div class="project-title">
						<h4><a class="" href="<?php the_permalink() ?>"><?php the_title(''); ?></a></h4>
						<?php the_excerpt(''); ?>
						<div class="read-more">
							<a class="button" href="<?php the_permalink() ?>">read more</a>
						</div>
					</div><!-- .project-title -->
					
				</div>
  					
  		</div><!-- .project-box -->

    <?php endwhile; ?>

<?php else : ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php wp_reset_query(); ?>

