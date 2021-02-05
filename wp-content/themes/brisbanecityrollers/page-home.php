<?php
/**
 * @package brisbanecityrollers
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="home-banner" style="background-image:url(<?php echo get_field('banner_image')['url']; ?>);">
				<?php the_field('banner_text'); ?>
			</div>
			
			<div class="home-intro">
				<div class="container">
					<?php the_field('intro'); ?>
				</div>
			</div>

			<div class="home-join">
				<div class="container features-tiles">
					<div class="row">
						<div class="col-12">
							<h2>Join Us</h2>
						</div>
						<?php if( have_rows('join') ): ?>
							<?php while( have_rows('join') ): the_row(); 

								// vars
								$image = get_sub_field('image');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								$link = get_sub_field('link');
								?>
								<div class="col-4">
									<div class="inner">
										<a href="<?php echo $link; ?>">
											<div class="bg" style="background-image:url(<?php echo $image['url']; ?>);"></div>
										</a>
										<div class="text-bottom">
											<h3><?php echo $title; ?></h3>
											<p><?php echo $description; ?></p>
											<a class="more" href="<?php echo $link; ?>">More</a>
										</div>
									</div>
								</div>
								
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="insta-feed">
				<div class="container bcr">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>
				<div class="container scartel">
					<?php echo do_shortcode('[instagram-feed user="thescartel"]'); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();