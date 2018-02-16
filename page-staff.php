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
									<div class="col-xs-12 col-md-10 row cf" style="background-color:white;margin:0 auto;padding:0;justify-content:space-between;">
										<div class="col-xs-12 col-sm-4" style="background-color:blue;height:400px;">
											<div class="col-xs-12" style="background-color:red;height:59%;margin-bottom:3%;">
												hey
											</div>
											<div class="col-xs-12" style="background-color:white;height:38%;">
												hey
											</div>
										</div>
										<div class="col-xs-12 col-sm-4" style="background-color:red;height:400px;">
											center
										</div>
										<div class="col-xs-12 col-sm-4" style="background-color:green;height:400px;">
											<div class="col-xs-12" style="background-color:white;height:38%;margin-bottom:3%;">
												hey
											</div>
											<div class="col-xs-12" style="background-color:red;height:59%;">
												hey
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
