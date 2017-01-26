<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<p class= "info">©kreiMusic | <a href="mailto:info@kreimusic.com">info@kreimusic.com</a></p>
			<p class="redes"><a href="https://facebook.com/kreiMusic" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a> <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></p>
		</div>
	
		
			
	</footer><!-- #colophon -->


	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
