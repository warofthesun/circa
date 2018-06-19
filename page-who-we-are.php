<!--page-who we are-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf row">

						<main id="main" class="col-xs-12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header>


								<section class="entry-content cf" itemprop="articleBody">

									<?php if( get_field('section_title')): ?>
										<h2><?php the_field('section_title'); ?></h2>
									<?php endif; ?>
									<?php if( get_field('intro_copy') ): ?>
										<div class="intro-copy" style="text-align:<?php the_field('intro_copy_alignment'); ?>"><?php the_field('intro_copy'); ?></div>
									<?php endif; ?>
									<?php $custom_query = new WP_Query('pagename=staff-content');
									while($custom_query->have_posts()) : $custom_query->the_post(); ?>
											<div class="col-xs-12 col-sm-11 col-md-10 cf staff-blocks" id="staff-blocks">
												<div class="col-xs-12 col-sm-4 block-column">
													<?php
														$attachment_id = get_field('group_one_image');
														$size = "medium"; // (thumbnail, medium, large, full or custom size)
														$image = wp_get_attachment_image_src( $attachment_id, $size );
														// url = $image[0];
														// width = $image[1];
														// height = $image[2];
													?>
													<div class="col-xs-12 block size-2" style="background-image:url('<?php echo $image[0]; ?>');">
														<a href="<?php echo home_url(); ?>/our-staff#<?php $page_link = sanitize_title_for_query( get_field('group_one_name') ); echo esc_attr( $page_link ); ?>">
															<div><span><?php the_field('group_one_name'); ?></span></div>
														</a>
													</div>
													<?php
														$attachment_id = get_field('group_two_image');
														$size = "medium"; // (thumbnail, medium, large, full or custom size)
														$image = wp_get_attachment_image_src( $attachment_id, $size );
														// url = $image[0];
														// width = $image[1];
														// height = $image[2];
													?>
													<div class="col-xs-12 block size-1" style="background-image:url('<?php echo $image[0]; ?>');">
														<a href="<?php echo home_url(); ?>/our-staff#<?php $page_link = sanitize_title_for_query( get_field('group_two_name') ); echo esc_attr( $page_link ); ?>">
															<div><span><?php the_field('group_two_name'); ?></span></div>
														</a>
													</div>
												</div>
												<?php
													$attachment_id = get_field('group_three_image');
													$size = "medium"; // (thumbnail, medium, large, full or custom size)
													$image = wp_get_attachment_image_src( $attachment_id, $size );
													// url = $image[0];
													// width = $image[1];
													// height = $image[2];
												?>
												<div class="col-xs-12 col-sm-4 block-column">
													<div class="col-xs-12 block size-3" style="background-image:url('<?php echo $image[0]; ?>');">
														<a href="<?php echo home_url(); ?>/our-staff#<?php $page_link = sanitize_title_for_query( get_field('group_three_name') ); echo esc_attr( $page_link ); ?>">
															<div><span><?php the_field('group_three_name'); ?></span></div>
														</a>
													</div>
												</div>
												<?php
													$attachment_id = get_field('group_four_image');
													$size = "medium"; // (thumbnail, medium, large, full or custom size)
													$image = wp_get_attachment_image_src( $attachment_id, $size );
													// url = $image[0];
													// width = $image[1];
													// height = $image[2];
												?>
												<div class="col-xs-12 col-sm-4 block-column">
													<div class="col-xs-12 block size-1" style="background-image:url('<?php echo $image[0]; ?>');">
														<a href="<?php echo home_url(); ?>/our-staff#<?php $page_link = sanitize_title_for_query( get_field('group_four_name') ); echo esc_attr( $page_link ); ?>">
															<div><span><?php the_field('group_four_name'); ?></span></div>
														</a>
													</div>
													<?php
														$attachment_id = get_field('group_five_image');
														$size = "medium"; // (thumbnail, medium, large, full or custom size)
														$image = wp_get_attachment_image_src( $attachment_id, $size );
														// url = $image[0];
														// width = $image[1];
														// height = $image[2];
													?>
													<div class="col-xs-12 block size-2" style="background-image:url('<?php echo $image[0]; ?>');">
														<a href="<?php echo home_url(); ?>/our-staff#<?php $page_link = sanitize_title_for_query( get_field('group_five_name') ); echo esc_attr( $page_link ); ?>">
															<div><span><?php the_field('group_five_name'); ?></span></div>
														</a>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									<?php wp_reset_postdata(); // reset the query ?>
								</section>

							</article>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</main>



				</div>

			</div>


<?php get_footer(); ?>
