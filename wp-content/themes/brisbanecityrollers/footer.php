<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brisbanecityrollers
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">		
			<div class="social">
				<p>follow us</p>
				<?php if (get_field('facebook', 'option')) { ?><a class="fb" href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a><?php } ?>
				<?php if (get_field('instagram', 'option')) { ?><a class="ig" href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a><?php } ?>
				<?php if (get_field('twitter', 'option')) { ?><a class="tw" href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a><?php } ?>
			</div>

			<div class="site-info">
				<p>&copy; Brisbane City Rollers <?php echo date('Y'); ?></p>
			</div>	
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
