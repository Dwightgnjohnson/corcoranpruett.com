<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Generate
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
<?php do_action('generate_before_footer'); ?>
<div <?php generate_footer_class(); ?> class="fourth-color">
	<?php
	do_action('generate_before_footer_content');
	global $post;
	$generate_settings = wp_parse_args(
		get_option( 'generate_settings', array() ),
		generate_get_defaults()
	);
	$stored_meta = '';
	if ( isset( $post ) ) :
		$stored_meta = get_post_meta( $post->ID, '_generate-footer-widget-meta', true );
	endif;

	// Don't run the function unless we're on a page it applies to
	if ( ! is_singular() ) :
		$stored_meta = '';
	endif;

	if ( '' !== $stored_meta && false !== $stored_meta ) :
		$generate_settings['footer_widget_setting'] = $stored_meta;
	endif;

	if ( !empty( $generate_settings['footer_widget_setting'] ) && 0 !== $generate_settings['footer_widget_setting'] ) :
		$widget_width = '';
		if ( $generate_settings['footer_widget_setting'] == 1 ) $widget_width = '100';
		if ( $generate_settings['footer_widget_setting'] == 2 ) $widget_width = '50';
		if ( $generate_settings['footer_widget_setting'] == 3 ) $widget_width = '33';
		if ( $generate_settings['footer_widget_setting'] == 4 ) $widget_width = '25';
		if ( $generate_settings['footer_widget_setting'] == 5 ) $widget_width = '20';
		?>
		<div id="footer-widgets" class="site footer-widgets">
			<div class="inside-footer-widgets grid-container grid-parent">
				<?php if ( $generate_settings['footer_widget_setting'] >= 1 ) : ?>
				<?php endif;

				if ( $generate_settings['footer_widget_setting'] >= 2 ) : ?>

				<?php endif;

				if ( $generate_settings['footer_widget_setting'] >= 3 ) : ?>
				<?php endif;

				if ( $generate_settings['footer_widget_setting'] >= 4 ) : ?>
				<?php endif;

				if ( $generate_settings['footer_widget_setting'] >= 5 ) : ?>
				<?php endif; ?>
			</div>
		</div>
	<?php
	endif;
	do_action('generate_after_footer_widgets');
	?>
	<footer class="site-info" itemtype="http://schema.org/WPFooter" itemscope="itemscope" role="contentinfo">
		<div class="inside-site-info grid-container grid-parent">
			<i class="fa fa-copyright"></i> Corcoran Pruett LLP <?php echo date("Y") ?>
			<div class="white-color">
				<h3><i>Experience. Quality. Advocacy</i></h3>
			</div>
			<br>
			<address class="">
				<a href="https://goo.gl/maps/b57q0" target="_blank"><i class="fa fa-lg fa-map-marker white-color"></i> 1740 E. Main Street, Suite 101, Grass Valley, CA 95945</a>
			</address>
			<div class="">
				<i class="fa fa-lg fa-phone white-color"></i> <a href="tel:5302647014">530-264-7014</a>
			</div>
		</div>
	</footer><!-- .site-info -->
	<?php do_action( 'generate_after_footer_content' ); ?>
</div><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
