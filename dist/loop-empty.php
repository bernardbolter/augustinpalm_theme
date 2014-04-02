<?php
/**
 * augustinpalm_theme template for displaying an empty Loop
 *
 * @package WordPress
 * @subpackage augustinpalm_theme
 * @since augustinpalm_theme 1.0
 */
?>

<article id="post-none" class="post empty">

	<h1 class="post-title"><?php _e( 'Nothing Found', 'augustinpalm_theme' ); ?></h1>

	<div class="post-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'augustinpalm_theme' ), admin_url( 'post-new.php' ) ); ?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p>
				<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'augustinpalm_theme' ); ?>
			</p>

			<?php get_search_form(); ?>

		<?php else : ?>

			<p>
				<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'augustinpalm_theme' ); ?>
			</p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div>

</article>