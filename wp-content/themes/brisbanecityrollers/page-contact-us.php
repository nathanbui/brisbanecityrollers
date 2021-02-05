<?php
/**
 * @package brisbanecityrollers
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="page-title">
					<h1><?php echo (get_field('page_title') ? get_field('page_title') : get_the_title() ); ?></h1>
				</div>
				<div class="row">
					<div class="col-lg-6 col-xl-5 col-details">
						<div class="details-inner">
							<h3><?php the_field('details_heading'); ?></h3>
							<p><span class="initial">E</span> <span class="text"><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></span></p>
							<p><span class="initial">A</span> <span class="text"><?php the_field('address', 'option'); ?></span></p>
							<?php if (get_field('facebook', 'option')){ ?><p><i class="fab fa-facebook-f"></i> <a href="<?php the_field('facebook', 'option'); ?>"><span><?php the_field('facebook_title'); ?></span></a></p><?php } ?>
							<?php if (get_field('instagram', 'option')){ ?><p><i class="fab fa-instagram"></i> <a href="<?php the_field('instagram', 'option'); ?>"><span><?php the_field('instagram_title'); ?></span></a></p><?php } ?>
							<?php if (get_field('twitter', 'option')){ ?><p><i class="fab fa-twitter"></i> <a href="<?php the_field('twitter', 'option'); ?>"><span><?php the_field('twitter_title'); ?></span></a></p><?php } ?>
						</div>
					</div>
					<div class="col-lg-6 col-xl-7 col-form">
						<div class="contact-form">
							<h3><?php the_field('form_title'); ?></h3>
							<?php echo do_shortcode('[contact-form-7 id="50" title="Contact Us"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();