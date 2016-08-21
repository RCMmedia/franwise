<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 $my_search = new WP_Advanced_Search('search-form');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', TRUE,'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="https://use.typekit.net/quf7jko.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
<script type='text/javascript' src='<?php bloginfo('template_url') ?>/js/modernizr.js'></script>
</head>

<body <?php body_class(); ?>>
<div class="top_header">
	<div class="inner">
		<div class="left">
			<a href="#" class="trigger-overlay fcx">Visit FranchiseCapitalExchange.com</a>
		</div><!-- .left -->
		<div class="right">
			<span class="social-icon"><img src="<?php bloginfo('template_url') ?>/images/icons/facebook-48.png" alt="facebook-48"  height="17"></span>
			<span class="social-icon"><img src="<?php bloginfo('template_url') ?>/images/icons/linkedin-64.png" alt="linkedin-64" height="17"></span>
			<span class="social-icon"><img src="<?php bloginfo('template_url') ?>/images/icons/twitter-48.png" alt="twitter-48" height="17"></span>
			<span class="social-icon"><img src="<?php bloginfo('template_url') ?>/images/icons/google-plus-48.png" alt="google-plus-48" height="17"></span>
			<span class="social-icon"><img src="<?php bloginfo('template_url') ?>/images/icons/youtube-6-48.png" alt="google-plus-48" height="17"></span>
			<a class="phone-number" href="tel:714-434-1516">714-434-1516</a>
		</div><!-- .right -->
	</div><!-- .inner -->
</div><!-- .top_header -->

<div class="header ">
	<div class="inner clearfix">
		<div class="logo">
			<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.jpg" alt="logo"></a>
		</div><!-- .logo -->
		<div id="nav-icon" class="trigger-overlay mobile-menu-trigger">
		  <span></span>
		  <span></span>
		  <span></span>
		</div><!-- #nav-icon -->
		
		<div class="search-bar">
			<div class="search-inner">
				<img src="<?php bloginfo('template_url') ?>/images/icon-search.png" alt="icon-search" width="21" height="22"><?php $my_search->the_form(); ?>
				<div id="wpas-results" class="form-active clearfix">
				
					
				</div>
			</div>
		</div><!-- .search -->
		<div class="navigation">
			<?php wp_nav_menu( array('menu' => 'Main Navigation') ); ?>
		</div><!-- .navigation -->
	</div><!-- .inner -->
</div><!-- .header -->
<div class="mobile-menu clearfix" style="display: none;">
	<a class="phone-number button" href="tel:714-434-1516">714-434-1516</a>
</div>
	<?php if ( is_front_page() ||  is_page()  ) { ?>
		<div class="hero-banner" style="background: url(<?php the_field('hero_banner'); ?>) no-repeat scroll 0 0 / cover">
	<?php  } elseif ( is_home() ) {  ?>
		<div class="hero-banner" style="background: url(<?php the_field('hero_banner', get_option('page_for_posts')); ?>) no-repeat scroll 0 0 / cover">
	<?php } ?>
		
	<div class="vertically-align">
		<div class="cta">
			
			<?php if ( is_front_page() ) { ?>
				  <h1><?php the_field('banner_title'); ?></h1>
					<a href="#" class="trigger-overlay contact-us">Franchise Your Business</a>
				<?php  } elseif ( is_home() ) {  ?>
					<span><?php the_field('banner_title', get_option('page_for_posts')); ?></span>
				<?php } else {  ?>
				  <span><?php the_field('banner_title'); ?></span>
			<?php	} ?>
			
		</div><!-- .cta -->
	</div><!-- .vertically-align -->
</div><!-- .hero-banner -->

