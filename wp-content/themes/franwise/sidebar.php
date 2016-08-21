<?php if ( is_home() || is_single() ) { ?>
	<div class="sidebar-box archive">
		
		<h4>Categories</h4>
		<ul>
			<?php wp_list_categories(array('title_li' => false)); ?>
		</ul>
		
		<h4>Archives</h4>
		<ul>
		<?php wp_get_archives(array(
			'type'=>'monthly', 
			'show_post_count'=>true, 
			'limit'=>20, 
			'post_type'=>'post', 
			'format'=>'html' 
		));
			
		
		
		?>
		</ul>
	</div>
<?php  }  ?>


<div class="sidebar-box">
	<ul>
		<li><span>Straightforward</span></li>
		<li><span>Comprehensive</span></li>
		<li><span>Proven</span></li>
		<li><span>Affordable</span></li>
	</ul>
	<div class="text-center">
		<a class="button" href="#">Contact Us</a>
	</div><!-- .text-center -->
</div><!-- .sidebar-box -->

<div class="sidebar-box">
	<img style="padding: 0 20px;" src="<?php bloginfo('template_url') ?>/images/sidebar.jpg" alt="sidebar" width="308" height="288" />
</div><!-- .sidebar-box -->