<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Responsive Starter
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="row site-footer" role="contentinfo">
		<div class="c12 site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dgraystarter' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dgraystarter' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'dgraystarter' ), 'Responsive Starter', '<a href="http://deborahgraydesign.com">Deborah Gray</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
