<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Responsive Starter
 */
?>
	<div id="secondary" class="c4 end widget-area" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	</div><!-- #secondary -->
