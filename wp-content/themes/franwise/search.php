<?php
/**
 * Template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="inner clearfix">
			<div class="content clearfix">
			
			<?php

$my_search = new WP_Advanced_Search('search-form');
$query = $my_search->query();
if ( $query->have_posts() ): 
    while ( $query->have_posts() ): $query->the_post();
        the_title();
    endwhile;
endif;
			
			?>


			</div><!-- #content -->
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- #container -->


<?php get_footer(); ?>
