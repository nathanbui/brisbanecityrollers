<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brisbanecityrollers
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if( have_rows('panels') ): ?>
			<?php while( have_rows('panels') ): the_row(); ?>

		        <?php if( get_row_layout() == 'content' ) { ?>
		        	<?php 
		        		$content = get_sub_field('content');
		        		$panel_class = get_sub_field('panel_class');
		        	?>
		        	<div class="panel-content panel-class-<?php echo $panel_class; ?>">
		        		<div class="container">
		        			<?php echo $content; ?>
		        		</div>
		        	</div>

		        <?php } elseif ( get_row_layout() == 'page_title' ) { ?>
		        	<?php 
		        		$title = get_sub_field('title');
		        		$panel_class = get_sub_field('panel_class');
		        	?>
		        	<div class="panel-page-title panel-class-<?php echo $panel_class; ?>">
		        		<div class="container">
		        			<h1><?php echo ($title ? $title : get_the_title()); ?></h1>
		        		</div>
		        	</div>

	        	<?php } elseif ( get_row_layout() == 'home_banner' ) { ?>
	        		<?php 
	        			$banner_image = get_sub_field('banner_image');
	        			$banner_text = get_sub_field('banner_text');
	        			$panel_class = get_sub_field('panel_class');
	        		?>
		        	<div class="panel-home-banner panel-class-<?php echo $panel_class; ?>" style="<?php echo ($banner_image ? 'background-image:url('.$banner_image['url'].');' :''); ?>">
		        		<?php echo $banner_text; ?>
		        	</div>

	        	<?php } elseif ( get_row_layout() == 'home_intro' ) { ?>
	        		<?php 
	        			$intro = get_sub_field('intro');
	        			$panel_class = get_sub_field('panel_class');
	        		?>
		        	<div class="panel-home-intro panel-class-<?php echo $panel_class; ?>">
		        		<div class="container">
		        			<?php echo $intro; ?>
		        		</div>
		        	</div>

            	<?php } elseif ( get_row_layout() == 'horizontal_rule' ) { ?>
            		<?php 
            			$panel_class = get_sub_field('panel_class');
            		?>
    	        	<div class="panel-horizontal-rule panel-class-<?php echo $panel_class; ?>">
    	        		<div class="container">
    	        			<hr>
    	        		</div>
    	        	</div>

	        	<?php } elseif ( get_row_layout() == 'member_story' ) { ?>
	        		<?php 
	        			$description = get_sub_field('description');
	        			$image = get_sub_field('image');
	        			$panel_class = get_sub_field('panel_class');
	        		?>
		        	<div class="panel-member-story panel-class-<?php echo $panel_class; ?>">
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 col-text">
		        					<div class="inner">
		        						<?php echo $description; ?>
		        					</div>
		        				</div>
		        				<div class="col-md-6 col-image">
		        					<div class="inner">
		        						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		        					</div>
		        				</div>
		        			</div>
		        		</div>
		        	</div>

	        	<?php } elseif ( get_row_layout() == 'home_join' ) { ?>
	        		<?php 
	        			$title = get_sub_field('title');
	        			$intro = get_sub_field('intro');
	        			$panel_class = get_sub_field('panel_class');
	        		?>
		        	<div class="panel-home-join panel-class-<?php echo $panel_class; ?>">
	        			<div class="container features-tiles">
	        				<div class="row">
	        					<div class="col-12">
	        						<h2><?php echo $title; ?></h2>
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

		        <?php } elseif ( get_row_layout() == 'instagram_feed' ) { ?>
		        	<?php 
		        		$panel_class = get_sub_field('panel_class');
		        	?>
		        	<div class="panel-instagram-feed panel-class-<?php echo $panel_class; ?>">
		        		<div class="container bcr">
		        			<?php echo do_shortcode('[instagram-feed]'); ?>
		        		</div>
		        		<div class="container scartel">
		        			<?php echo do_shortcode('[instagram-feed user="thescartel"]'); ?>
		        		</div>
		        	</div>

		        <?php } elseif ( get_row_layout() == 'contact_us_page' ) { ?>
		        	<?php 
		        		$details_heading = get_sub_field('details_heading');
		        		$form_title = get_sub_field('form_title');
		        		$instagram_title = get_sub_field('instagram_title');
		        		$facebook_title = get_sub_field('facebook_title');
		        		$twitter_title = get_sub_field('twitter_title');
		        		$panel_class = get_sub_field('panel_class');
		        	?>
		        	<div class="panel-contact-us-page panel-class-<?php echo $panel_class; ?>">
		        		<div class="container">
		        			<div class="row">

								<div class="col-lg-6 col-xl-5 col-details">
									<div class="details-inner">
										<h3><?php echo $details_heading; ?></h3>
										<p><span class="initial">E</span> <span class="text"><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></span></p>
										<p><span class="initial">A</span> <span class="text"><?php the_field('address', 'option'); ?></span></p>
										<?php if (get_field('facebook', 'option')){ ?><p><i class="fab fa-facebook-f"></i> <a href="<?php the_field('facebook', 'option'); ?>"><span><?php echo $facebook_title; ?></span></a></p><?php } ?>
										<?php if (get_field('instagram', 'option')){ ?><p><i class="fab fa-instagram"></i> <a href="<?php the_field('instagram', 'option'); ?>"><span><?php echo $instagram_title; ?></span></a></p><?php } ?>
										<?php if (get_field('twitter', 'option')){ ?><p><i class="fab fa-twitter"></i> <a href="<?php the_field('twitter', 'option'); ?>"><span><?php echo $twitter_title; ?></span></a></p><?php } ?>
									</div>
								</div>

								<div class="col-lg-6 col-xl-7 col-form">
									<div class="contact-form">
										<h3><?php echo $form_title; ?></h3>
										<?php echo do_shortcode('[contact-form-7 id="50" title="Contact Us"]'); ?>
									</div>
								</div>

							</div>
		        		</div>
		        	</div>

		        <?php } ?>

		    <?php endwhile; ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
