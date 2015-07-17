<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 * 
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  2.1
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single vevent hentry">

	<p class="tribe-events-back"><a href="<?php echo tribe_get_events_link() ?>"> <?php _e( '&laquo; All Events', 'tribe-events-calendar' ) ?></a></p>

<article>

	<!-- Notices -->
	<?php tribe_events_the_notices() ?>

	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Navigation', 'tribe-events-calendar' ) ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul><!-- .tribe-events-sub-nav -->
	</div><!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
	
				<div class="large-12 columns">

					<div class="events_header">

						<?php if ( tribe_get_cost() ) : ?> 
							<div class="tribe-events-event-cost">
								<span><?php echo tribe_get_cost( null, true ); ?></span>
							</div>
						<?php endif; ?>

						<!-- Event Title -->
						<?php do_action( 'tribe_events_before_the_event_title' ) ?>
							<?php the_title( '<h2 class="tribe-events-single-event-title summary entry-title">', '</h2>' ); ?>
						<?php do_action( 'tribe_events_after_the_event_title' ) ?>

					</div><!-- .events_header -->

				</div><!-- .large-12 -->

			</div><!-- .row -->

	<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>

	<div class="row">

		<div class="large-12 columns">

			<?php
			    $thumb = get_post_thumbnail_id();
			    $img_url = wp_get_attachment_url( $thumb ); //get img URL
			    $params = array( 'width' => 1140, 'height' => 340 ); 
			    $image = bfi_thumb( "$img_url", $params ); 
			?>

            <a href="<?php echo $img_url ?>" class="featured_image_post inner_image_hover fancybox" title="<?php the_title(); ?>"><img alt="" src="<?php echo $image ?>" /></a>
		</div><!-- .large-12 -->

	</div>

	<?php  endif; //end image check  ?> 

	<div class="row">

		<div class="large-12 columns">

			<div class="tribe-events-schedule updated published tribe-clearfix">
				<?php echo tribe_events_event_schedule_details( $event_id, '<h3>', '</h3>'); ?>
				<?php  if ( tribe_get_cost() ) :  ?>
					<span class="tribe-events-divider">|</span>
					<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
				<?php endif; ?>
			</div>

			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content entry-content description">
					<?php the_content(); ?>
			</div><!-- .tribe-events-single-event-description -->
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

		</div><!-- .large-12  -->

	</div><!-- .row -->

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
				<?php
				/**
				 * The tribe_events_single_event_meta() function has been deprecated and has been
				 * left in place only to help customers with existing meta factory customizations
				 * to transition: if you are one of those users, please review the new meta templates
				 * and make the switch!
				 */
				if ( ! apply_filters( 'tribe_events_single_event_meta_legacy_mode', false ) )
					tribe_get_template_part( 'modules/meta' );
				else echo tribe_events_single_event_meta()
				?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>

			</div> <!-- #post-x -->
		<?php if( get_post_type() == TribeEvents::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	<!-- Event footer -->
    <div id="tribe-events-footer">
		<!-- Navigation -->
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Navigation', 'tribe-events-calendar' ) ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul><!-- .tribe-events-sub-nav -->
	</div><!-- #tribe-events-footer -->

</article>

</div><!-- #tribe-events-content -->
