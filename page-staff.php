<?php
/*
 Template Name: Staff Landing Page
*/
?>
<!--page-staff-->
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

									<?php	the_content(); ?>
									<div class="col-xs-12 col-sm-11 col-md-10 row cf staff-blocks" id="staff-blocks">
										<div class="col-xs-12 col-sm-4 block-column">
											<div class="col-xs-12 block size-2" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/images/4.jpg);">
												<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
													<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
												</a>
											</div>
											<div class="col-xs-12 block size-1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/images/1.jpg);">
												<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
													<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
												</a>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 block-column">
											<div class="col-xs-12 block size-3" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/images/4.jpg);">
												<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
													<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
												</a>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 block-column">
											<div class="col-xs-12 block size-1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/images/3.jpg);">
												<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
													<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
												</a>
											</div>
											<div class="col-xs-12 block size-2" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/images/5.jpg);">
												<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
													<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
												</a>
											</div>
										</div>
									</div>
								</section>

							</article>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</main>



				</div>

			</div>


<?php get_footer(); ?>
