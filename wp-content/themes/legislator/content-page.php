<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package rescue
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h3 class="entry-title"><?php the_title(); ?></h3>
	</header><!-- .entry-header -->

<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>

    <?php

        $thumb = get_post_thumbnail_id();
        $img_url = wp_get_attachment_url( $thumb ); //get img URL

        $params = array( 'width' => 720, 'height' => 325 ); 
        $image = bfi_thumb( "$img_url", $params ); ?>

        <div class="featured_image">
            <a href="<?php echo $img_url ?>" class="featured_image_post inner_image_hover fancybox" title="<?php the_title(); ?>"><img alt="" src="<?php echo $image ?>" /></a>
        </div><!-- .featured_image -->

<?php } //end image check ?>

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