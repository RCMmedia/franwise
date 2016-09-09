<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	<div class="main">	
		<div class="inner clearfix">
			<div class="content clearfix">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="meta-data">Posted on: <?php the_time('l, F jS, Y') ?></div>
		<?php 
			$post_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
		?>
		<div class="featured-image">
			<?php if ( $post_image) { ?>
				<img src=" <?php echo $post_image[0]    ?>"/>
			<?php } ?>
		</div>
		<?php the_excerpt(); ?>
		<div class="read-more">
			<a href="<?php the_permalink(); ?>">Read More</a>
		</div>
		<div class="social-wrap">
			<?php echo do_shortcode('[feather_share url="'.get_permalink() .'"]'); ?>
		</div>
		<?php //edit_post_link(); ?>
	</div>

<?php endwhile; ?>

	

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>
			</div><!-- .content -->
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div><!-- .sidebar -->
			<div class="page-navigation">
		
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
		<div class="next-posts"><?php next_posts_link(); ?></div>
	</div>
		</div><!-- .inner -->
	</div>	
<?php get_footer(); ?>
