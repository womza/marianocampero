<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<section class="no-results not-found">

	<header class="page-header">
		<h3 class="page-title"><?php _e( 'Drats. Nothing Found', 'rescue' ); ?></h3>
	</header><!-- .page-header -->

	<div class="page-content clearfix">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'rescue' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'We weren&#39;t able to find anything that matched your search terms. Give it another go with some different keywords perchance.', 'rescue' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rescue' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
	
</section><!-- .no-results -->
