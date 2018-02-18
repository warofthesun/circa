<!--page-research projects-->
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


												<div class="col-xs-12 col-sm-11 staff-groups">


													<ul class="row cf staff-group">
														<?php
														//create a repeater loop
													 	// check if the repeater field has rows of data
														if( have_rows('research_project') ): while ( have_rows('research_project') ) : the_row(); ?>
														<a name="<?php $page_link = sanitize_title_for_query( get_sub_field('name') ); echo esc_attr( $page_link ); ?>"></a>
														<li class="col-xs-12 cf row staff-member">
															<?php
																$attachment_id = get_sub_field('project_logo');
																$size = "square"; // (thumbnail, medium, large, full or custom size)
																$image = wp_get_attachment_image_src( $attachment_id, $size );
																// url = $image[0];
																// width = $image[1];
																// height = $image[2];
															?>
															<div class="col-xs-12 col-sm-2 logo">
																<img src="<?php echo $image[0]; ?>">
															</div>
															<div class="col-xs-12 col-sm-10">
																<h3 class="col-xs-12">
																	<?php the_sub_field('project_name'); ?>
																</h3>

																<p class="col-xs-12">
																	<?php the_sub_field('description'); ?>
																</p>
															</div>
															</li>
														<?php endwhile; endif;?>
														</ul>
													</div>


									<?php wp_reset_postdata(); // reset the query ?>
								</section>

							</article>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</main>



				</div>

			</div>


<?php get_footer(); ?>
