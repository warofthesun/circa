<?php
/*
 Template Name: Full Width
*/
?>
<!--page-full width-->
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

									<?php
									if ( is_page('downloads') ) {

										if( have_rows('downloads') ): ?>
											<div class="downloads">

											<?php
										// loop through the rows of data
											while ( have_rows('downloads') ) : the_row(); ?>
											<h2><?php the_sub_field('title'); ?></h2>
											<p>
												<?php the_sub_field('description'); ?>
											</p>
											<?php
											if( get_sub_field('content_location') == 'media_library' ): ?>
											<a href="<?php the_sub_field('media_library'); ?>" class="blue-btn" download>Download</a>
											<a href="<?php the_sub_field('media_library'); ?>" class="blue-btn" target="_blank">View</a>
										<?php endif;
										 if( get_sub_field('content_location') == 'external_link' ): ?>
											<a href="<?php the_sub_field('external_link'); ?>" class="blue-btn" target="_blank">View</a>

											<?php

										endif; endwhile; ?>
										</div>
										<?php endif;


									} else {
									  the_content();
									}
									?>

								</section>

							</article>

							<?php endwhile; else : ?>



							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
