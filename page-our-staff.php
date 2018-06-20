<!--page-our staff-->
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
									<?php $custom_query = new WP_Query('pagename=staff-content');
									while($custom_query->have_posts()) : $custom_query->the_post(); ?>
									<?php if( get_field('section_title')): ?>
										<h2><?php the_field('section_title'); ?></h2>
									<?php endif; ?>
									<?php if( get_field('intro_copy') ): ?>
										<div class="intro-copy" style="text-align:<?php the_field('intro_copy_alignment'); ?>"><?php the_field('intro_copy'); ?></div>
									<?php endif; ?>


									<?php

											// check if the flexible content field has rows of data
											if( have_rows('staff') ):

										  // loop through the rows of data
												while ( have_rows('staff') ) : the_row();
												if( get_row_layout() == 'staff_group' ): ?>
												<div class="col-xs-12 col-sm-9 staff-groups list-reset">
													<a name="<?php $page_link = sanitize_title_for_query( get_sub_field('group_name') ); echo esc_attr( $page_link ); ?>"></a>




													<h2><?php the_sub_field('group_name'); ?></h2>
													<ul class="row cf staff-group">
														<?php
														//create a repeater loop
													 	// check if the repeater field has rows of data
														if( have_rows('staff_member') ): while ( have_rows('staff_member') ) : the_row(); ?>
														<li class="col-xs-12 cf staff-member">
															<?php
																$attachment_id = get_sub_field('staff_member_image');
																$size = "square"; // (thumbnail, medium, large, full or custom size)
																$image = wp_get_attachment_image_src( $attachment_id, $size );
																// url = $image[0];
																// width = $image[1];
																// height = $image[2];
															?>
															<?php if( get_sub_field('staff_member_image')) {?>
															<div class="col-xs-12 col-sm-2 logo">
																<img src="<?php echo $image[0]; ?>">
															</div>
															<div class="col-xs-12 col-sm-10">
															<?php } else { ?>
															<div class="col-xs-12">
															<?php } ?>
																<h3 class="col-xs-12">
																	<?php the_sub_field('name'); ?>
																</h3>
																<h4 class="col-xs-12">
																	<?php the_sub_field('title'); ?>
																</h4>
																<p class="col-xs-12">
																	<?php the_sub_field('description'); ?>
																</p>
															</div>
															</li>
														<?php endwhile; ?>
														</ul>
													</div>
											<?php endif; endif; endwhile; endif; endwhile;?>


									<?php wp_reset_postdata(); // reset the query ?>
								</section>

							</article>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</main>



				</div>

			</div>


<?php get_footer(); ?>
