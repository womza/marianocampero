<?php
/**
 * The template used for displaying home page content in template-home.php
 *
 * @package rescue
 */
?>
<div class="row">

	<div class="large-8 large-centered columns">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content clearfix">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'rescue' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			
			<?php edit_post_link( __( 'Edit', 'rescue' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

		</article><!-- #post-## -->
		
	</div><!-- .large-8 .large-centered -->

</div><!-- .row -->