<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Generate
 */
?>

<section class="no-results not-found">
	<div class="inside-article">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'generate' ); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'generate' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

				<?php elseif ( is_search() ) : ?>

					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'generate' ); ?></p>
					<?php get_search_form(); ?>

				<?php else : ?>

					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'generate' ); ?></p>
					<?php get_search_form(); ?>

				<?php endif; ?>
			
		</div><!-- .entry-content -->
	</div><!-- .inside-article -->
</section><!-- .no-results -->
