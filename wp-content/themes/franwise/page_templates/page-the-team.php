<?php
/**
 * Template Name: The Team
 */

get_header(); ?>

		
		<div class="inner clearfix">
			<div class="content clearfix">
				<?php if( have_rows('team_members') ): ?>
				  <?php  while ( have_rows('team_members') ) : the_row();?>
					
					<div class="team-member">
						<div class="member-photo">
							<img src="<?php the_sub_field('team_member_photo'); ?>"/>
						</div>
						<div class="member-bio">
							<?php the_sub_field('team_member_bio'); ?>
						</div>
					</div>
				        				
				  <?php  endwhile; ?>
				<?php endif; ?>
			</div>
			
		</div>
		

<?php get_footer(); ?>
