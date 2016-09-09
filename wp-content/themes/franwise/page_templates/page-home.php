<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

		<div class="container">
			
			<div class="circuit-board">
				<div class="inner">
					<img src="<?php bloginfo('template_url') ?>/images/circuit-top.jpg" alt="circuit-top" width="57" height="77" />
					<div class="circuit-message"><?php the_field('top_circuit_message'); ?></div>
					<img class="mid" src="<?php bloginfo('template_url') ?>/images/circuit-mid.jpg" alt="circuit-mid" width="42" height="54" />
					
					<div class="circuit-bottom-wrap clearfix">
						<div class="circuit-message left">
							<?php the_field('bottom_circuit_message'); ?>
						</div><!-- .circuit-message -->
						<div class="circuit-bottom">
							<img class="desktop" src="<?php bloginfo('template_url') ?>/images/circuit-bottom.jpg" alt="circuit-bottom" width="345" height="254" />
							<img class="mobile" src="<?php bloginfo('template_url') ?>/images/circuit-bottom-mobile.jpg" alt="circuit-bottom" width="197" height="261" />
						</div>
					</div>
				</div><!-- .inner -->
			</div><!-- .circuit-board -->
			
			<div class="cta-six-step">
				<div class="inner">
					<h3><a class="trigger-overlay contact-us teal " href="#">Contact us </a>today to learn the <a href="#" class="trigger-overlay contact-us teal">Six-Step Conversion</a> process to convert your business with ease and expertise.</h3>
					<a class="button trigger-overlay contact-us " href="#">Contact us</a>
					
					<div class="feature-list">
						<div class="feature">
							<img src="<?php bloginfo('template_url') ?>/images/icon1.jpg" width="33" height="33" />
							<p>Each step is refined with a level of detail that suits your company’s needs and budget.</p>
						</div>
						<div class="feature">
							<img src="<?php bloginfo('template_url') ?>/images/icon2.jpg" width="33" height="33" />
							<p>We combine our expertise with best resources in today’s franchise sector.</p>
						</div>
						<div class="feature">
							<img src="<?php bloginfo('template_url') ?>/images/icon3.jpg" width="33" height="33" />
							<p>We help build stronger systems poised for greater growth through consultations and proprietary tools.  </p>
						</div>
						<div class="feature">
							<img src="<?php bloginfo('template_url') ?>/images/icon4.jpg" width="33" height="33" />
							<p>Our experts have all grown systems and are ready to blend your system and creativity with best practices from across the franchising spectrum.</p>
						</div>
					</div><!-- .feature-list -->
				</div><!-- .inner -->
			</div><!-- .cta-six-step -->
			
			<div class="services">
				<div class="inner">
					<h3>Our Services Include</h3>
					
					<div class="service-item">
						<a href="<?php bloginfo('url') ?>/consultation/"><img src="<?php bloginfo('template_url') ?>/images/consultations.jpg" />
						<span>Consultations</span></a>
					</div>
					<div class="service-item">
						<a href="<?php bloginfo('url') ?>/manuals-training"><img src="<?php bloginfo('template_url') ?>/images/manuals.jpg" />
						<span>Manuals</span></a>
					</div>
					<div class="service-item">
						<a href="<?php bloginfo('url') ?>/manuals-training"><img src="<?php bloginfo('template_url') ?>/images/templates.jpg" />
						<span>Templates</span></a>
					</div>
					
					<div class="service-item">
						<a href="<?php bloginfo('url') ?>/manuals-training"><img src="<?php bloginfo('template_url') ?>/images/training.jpg" />
						<span>Training</span></a>
					</div>
					<div class="service-item">
						<a href="<?php bloginfo('url') ?>/consultation"><img src="<?php bloginfo('template_url') ?>/images/translations.jpg" />
						<span>Translations</span></a>
					</div>
					<div class="service-item">
						<a href="<?php bloginfo('url') ?>/the-team"><img src="<?php bloginfo('template_url') ?>/images/online-interactive.jpg" />
						<span>Online/Interactive/Traditional</span></a>
					</div>
					
				</div><!-- .inner -->
			</div><!-- .services -->
			
		</div><!-- .content -->

<?php get_footer(); ?>
