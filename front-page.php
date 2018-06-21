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
<?php if( get_field('overview') ): ?>
<div class="overview">
	<div class="overview-content">
		<div>
			<h1>Overview</h1>
			<?php the_field('overview'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<div id="content" class="front-page">
	<div id="inner-content" class="wrap cf row">
		<div class="row">
			<?php $custom_query = new WP_Query('pagename=research-projects');
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<article class="row research-projects">
				<h1 class="col-xs-12 cf">
					<a href="<?php echo home_url(); ?>/research-projects">Active research projects</a>
				</h1>
				<ul class="col-xs-12 cf row">
					<?php
					//create a repeater loop
					// check if the repeater field has rows of data
					if( have_rows('research_project') ): while ( have_rows('research_project') ) : the_row(); ?>
					<li class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cf row project">
						<?php
							$attachment_id = get_sub_field('project_logo');
							$size = "square-nocrop"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							// url = $image[0];
							// width = $image[1];
							// height = $image[2];
						?>
						<?php if( get_sub_field('project_logo')): ?>
						<a href="<?php echo home_url(); ?>/research-projects#<?php $page_link = sanitize_title_for_query( get_sub_field('project_name') ); echo esc_attr( $page_link ); ?>" class="col-xs-4 logo">
							<img src="<?php echo $image[0]; ?>">
						</a>
					<?php endif; ?>
					<div class="col-xs-7 project-staff">

							<a href="<?php echo home_url(); ?>/research-projects#<?php $page_link = sanitize_title_for_query( get_sub_field('project_name') ); echo esc_attr( $page_link ); ?>" class="h2"><?php the_sub_field('project_name'); ?></a>

						<h3><?php the_sub_field('project_owner'); ?></h3>
					</div>

						<div class="col-xs-12 description">
							<?php echo custom_field_excerpt(); ?>
						</div>
					</li>
				<?php endwhile; endif; endwhile;?>
				<?php wp_reset_postdata(); // reset the query ?>
				</ul>
			</article>
		</div>
	</div>
</div>
<?php get_footer(); ?>
