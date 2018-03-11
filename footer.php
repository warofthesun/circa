			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf row">
					<?php $custom_query = new WP_Query('pagename=get-involved');
					while($custom_query->have_posts()) : $custom_query->the_post();

					if (get_field('footer_callout')): ?>
					<H2 style="color:white;">Get Involved</H2>
					<?php the_field('footer_callout'); ?>


				<?php endif; endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					<div class="row">

						<div class="source-org copyright col-xs-12 col-sm-6">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</div>
						<div class="col-xs-12 col-sm-6 social">
							<?php $custom_query = new WP_Query('pagename=home-page-content');
							while($custom_query->have_posts()) : $custom_query->the_post(); ?>
							<?php
							//create a repeater loop
							// check if the repeater field has rows of data
							if( have_rows('socials') ): while ( have_rows('socials') ) : the_row(); ?>
							<a href="<?php the_sub_field('social_link');?>"><i class="fab fa-<?php the_sub_field('social_platform') ?>"></i></a>
							<?php endwhile; endif; endwhile;?>
							<?php wp_reset_postdata(); // reset the query ?>
						</div>
					</div>


				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		<script type="text/javascript">
					jQuery(document).ready(function($) {

						$(' #staff-blocks > div > .block ').each( function() { $(this).hoverdir(); } );

					});
				</script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

	</body>

</html> <!-- end of site. what a ride! -->
