<?php
/**
 * The template used for displaying content in single.php
 */
?>

<?php 
$format = get_post_format(); 
	if ( false === $format ) {
	$format = 'standard';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<header class="entry-header clearfix">

		<div class="entry_date">
			<?php rescue_posted_on(); ?>
		</div><!-- .entry_date -->

		<div class="entry_title">
			<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		</div><!-- .entry_title -->

	</header><!-- .entry-header -->

<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>

    <?php

        $thumb = get_post_thumbnail_id();
        $img_url = wp_get_attachment_url( $thumb ); //get img URL

        $params = array( 'width' => 720 , 'height' => 325 ); 
        $image = bfi_thumb( "$img_url", $params ); ?>

        <div class="featured_image">
            <a href="<?php echo $img_url ?>" class="featured_image_post inner_image_hover fancybox" title="<?php the_title(); ?>"><img alt="" src="<?php echo $image ?>" /></a>
        </div><!-- .featured_image -->

<?php } //end image check ?>


	<div class="entry-content clearfix">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Post Pages:', 'rescue' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry_meta">
		<ul>
			<li class="post_format"><span class="rescue_staff"><?php echo ucfirst($format); _e(' Post','rescue');?></span></li>
			<li><?php _e('Written by ','rescue'); the_author(); _e(' in','rescue'); ?>
			<span class="category_details">
						<?php 
						$category_list = get_the_category_list( __( ', ', 'rescue' ) );
							printf(
								$category_list,
								get_permalink()
							);
						?>
			</span></li>
			<li class="tags"><?php the_tags() ?></li>
			<li><?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'rescue' ), __( '1 Comment', 'rescue' ), __( '% Comments', 'rescue' ) ); ?></span>
			<?php endif; ?></li>
			<li><?php edit_post_link( __( 'Edit', 'rescue' ), '<span class="edit-link">', '</span>' ); ?></li>
		</ul>

	</footer>

</article><!-- #post-## -->
