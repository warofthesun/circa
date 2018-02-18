<!--front-page-->
<?php get_header('front'); ?>
<?php $custom_query = new WP_Query('pagename=home-page-content');
while($custom_query->have_posts()) : $custom_query->the_post(); ?>
<div class="row wrap" id="header-graf">
	<div class="col-xs-0 col-sm-1 cf"></div>
	<div class="col-xs-12  col-sm-10 cf">
		<div class="row">
			<div class="col-xs-12 cf header-graf">
				<?php the_field('intro'); ?>
			</div>
		</div>
	</div>
	<div class="col-xs-0 col-sm-1 cf"></div>
</div>
<div class="overview row">
	<div class="overview-content row">
		<div>
			<h1>Overview</h1>
			<?php the_field('overview'); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
<div id="content" class="front-page">
	<div id="inner-content" class="wrap cf row">
		<div class="row">
			<?php $custom_query = new WP_Query('pagename=research-projects');
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<article class="row research-projects">
				<h1 class="col-xs-12 cf">
					Active research projects
				</h1>
				<div class="col-xs-12 cf row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cf row project">
						<div class="col-xs-4 logo">
							logo
						</div>
						<h2 class="col-xs-7">
							Title
						</h2>
						<p class="col-xs-12">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum et justo non imperdiet. Morbi consectetur at velit id tincidunt. Nunc at urna sit amet velit vehicula viverra nec cursus ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ultrices egestas leo, et semper ante accumsan pulvinar. Maecenas ullamcorper commodo ante eget fringilla. Aliquam non orci nec elit pharetra mattis. Vestibulum at nunc at lacus tincidunt tincidunt. Vestibulum aliquam posuere eleifend.
						</p>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cf row project">
						<div class="col-xs-4 logo">
							logo
						</div>
						<h2 class="col-xs-7">
							Title
						</h2>
						<p class="col-xs-12">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum et justo non imperdiet. Morbi consectetur at velit id tincidunt. Nunc at urna sit amet velit vehicula viverra nec cursus ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ultrices egestas leo, et semper ante accumsan pulvinar. Maecenas ullamcorper commodo ante eget fringilla. Aliquam non orci nec elit pharetra mattis. Vestibulum at nunc at lacus tincidunt tincidunt. Vestibulum aliquam posuere eleifend.
						</p>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cf row project">
						<div class="col-xs-4 logo">
							logo
						</div>
						<h2 class="col-xs-7">
							Title
						</h2>
						<p class="col-xs-12">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum et justo non imperdiet. Morbi consectetur at velit id tincidunt. Nunc at urna sit amet velit vehicula viverra nec cursus ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ultrices egestas leo, et semper ante accumsan pulvinar. Maecenas ullamcorper commodo ante eget fringilla. Aliquam non orci nec elit pharetra mattis. Vestibulum at nunc at lacus tincidunt tincidunt. Vestibulum aliquam posuere eleifend.
						</p>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cf row project">
						<div class="col-xs-4 logo">
							logo
						</div>
						<h2 class="col-xs-7">
							Title
						</h2>
						<p class="col-xs-12">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum et justo non imperdiet. Morbi consectetur at velit id tincidunt. Nunc at urna sit amet velit vehicula viverra nec cursus ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ultrices egestas leo, et semper ante accumsan pulvinar. Maecenas ullamcorper commodo ante eget fringilla. Aliquam non orci nec elit pharetra mattis. Vestibulum at nunc at lacus tincidunt tincidunt. Vestibulum aliquam posuere eleifend.
						</p>
					</div>
			</div>
			</article>
		</div>
	</div>
</div>

<?php get_footer(); ?>
