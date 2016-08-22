<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php if ( is_front_page() ) { ?>
	<div class="footer-banner">

			<div class="vertically-align">
				<div class="cta">
					<h2>You provide the <span class="green">vision,</span><br>We provide the <span class="teal">wisdom.</span></h2>
					<a href="#" class="trigger-overlay contact-us">Franchise Your Business</a>
				</div><!-- .cta -->
			</div> <!-- .vertically-align -->
			<img src="<?php bloginfo('template_url') ?>/images/footer-banner.jpg" alt="footer-banner" width="1235" height="360" />

	</div><!-- .footer-banner -->
	<?php }  ?>
	<div class="footer">
		<div class="inner clearfix">
			<?php wp_nav_menu( array('menu' => 'Footer Navigation', 'menu_class' => 'menu footer-nav') ); ?>
			<div class="copyright">
				&copy; 2016 FranWise. All Rights Reserved.
			</div><!-- .copyright -->
		</div><!-- .inner -->
	</div><!-- .footer -->




<div class="overlay_wrap fcx">
	<div class="overlay_inner">
		
		<div id="nav-icon" class="trigger-overlay overlay-trigger open fcx">
		  <span></span>
		  <span></span>
		  <span></span>
		</div><!-- #nav-icon -->
		
		<img src="<?php bloginfo('template_url') ?>/images/fcx-logo.jpg" alt="fcx-logo" />
		<p style="margin-bottom: 35px">When you are ready to expand or sell, meet the people with the funds and franchise expertise who can make that happen at Franchise Capital Exchange. It is an invitation-only event; ask us about your invitation. </p>
		<p><a href="#"  class="button button-red request-fcx">Request an Invitation</a></p>
		<div class="gform-wrap" style="display: none">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
		</div>
		<p><a href="http://franchisecapitalexchange.com" class="red" target="_blank">Visit franchisecapitalexchange.com</a></p>
		
		
		
	</div><!-- .overlay_inner -->
</div><!-- .overlay_wrap -->

<div class="overlay_wrap contact_us">
	<div class="overlay_inner">
		
		<div id="nav-icon" class="trigger-overlay overlay-trigger open contact-us">
		  <span></span>
		  <span></span>
		  <span></span>
		</div><!-- #nav-icon -->
		<h3>Contact us</h3>
		<p>Don't hesitate to reach out!</p>
		<div class="gform-wrap" style="display: none">
			<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
		</div><!-- .gform-wrap -->
	</div><!-- .overlay_inner -->
</div><!-- .overlay_wrap -->

<script>
	//overlay functions

jQuery(document).on("click", ".trigger-overlay.fcx", function () {
	jQuery('.overlay_wrap.fcx').toggleClass('active');
	jQuery('.gform-wrap').hide();
});

jQuery(document).on("click", ".request-fcx", function () {
	jQuery('.gform-wrap').slideToggle();
	jQuery('.overlay_wrap.fcx').toggleClass('form-active');
});

jQuery(document).on("click", ".trigger-overlay.contact-us", function () {
	jQuery('.overlay_wrap.contact_us').toggleClass('active');
	jQuery('.gform-wrap').show();
	jQuery('.overlay_wrap').toggleClass('form-active');
}); 

jQuery(document).ready( function() {
  jQuery("#search_query").on("focus", function( e ) {
      jQuery('#wpas-submit').addClass('active');
  });
  
  jQuery("#search_query").on("blur", function( e ) {
    jQuery('#wpas-submit').removeClass('active');
  });
  jQuery(".wpas-submit").on("click", function( e ) {
		jQuery('#wpas-results').addClass('active');
	});
	jQuery(document).on("click", ".trigger-overlay.search-box", function () {
		jQuery('#wpas-results').removeClass('active');
	});
	
	jQuery('#search_query').bind("enterKey",function(e){
	   //do stuff here
	});
	jQuery('#search_query').keyup(function(e){
	    if(e.keyCode == 13)
	    {
	        jQuery(this).trigger("enterKey");
	    }
	});
});
jQuery(document).on("click", ".trigger-overlay.mobile-menu-trigger", function () {
jQuery(this).toggleClass('open');
jQuery(".mobile-menu").slideToggle('');
});


jQuery(window).resize(function(){
            
  if (Modernizr.mq('(max-width: 755px)')) {
      
      jQuery( ".search-bar" ).appendTo( jQuery( ".mobile-menu" ) );
			jQuery( ".navigation" ).appendTo( jQuery( ".mobile-menu" ) );
			jQuery( ".top_header .inner .right" ).insertAfter( jQuery( ".navigation" ) );
      
  } else {
      
      // Clear the settings etc
       jQuery( ".search-bar" ).insertAfter( jQuery( ".logo" ) );
			jQuery( ".navigation" ).insertAfter( jQuery( ".search-bar" ) );
			jQuery( ".mobile-menu .right" ).insertAfter( jQuery( ".top_header .inner .left" ) );
  
  }

}).resize();
</script>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
