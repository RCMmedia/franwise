<?php
/**
 * Template Name: Clients
 */

get_header(); ?>

		
		<div class="inner clearfix">
			<div class="content clearfix">
				<div class="client-wrap">
				<?php if( have_rows('clients_repeater') ): ?>
				  <?php  while ( have_rows('clients_repeater') ) : the_row();?>
					
					
						<div class="client-item">
							<a  href="<?php the_sub_field('client_link'); ?>"><img src="<?php the_sub_field('client_logo'); ?>"/></a>
						</div><!-- .client-item -->				
				        				
				  <?php  endwhile; ?>
				<?php endif; ?>
				</div><!-- .client-wrap -->
			</div><!-- .content -->
			
		</div><!-- .inner -->
		

<?php get_footer(); ?>
