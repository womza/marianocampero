<?php 
/**
 * Map View Single Event
 * This file contains one event in the map
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/map/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php 

global $post;

$venue_details = array();

if ($venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;	
}

if ($venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;	
}
// Venue microformats
$has_venue = ( $venue_details ) ? ' vcard': '';
$has_venue_address = ( $venue_address ) ? ' location': '';
?>

<div class="event_post_content">

<div class="row">
	
	<div class="large-12 columns">

		<div class="events_header">
			
		<!-- Event Cost -->
		<?php if ( tribe_get_cost() ) : ?> 
			<div class="tribe-events-event-cost">
				<span><?php echo tribe_get_cost( null, true ); ?></span>
			</div>
		<?php endif; ?>

		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h2 class="tribe-events-list-event-title summary">
			<a class="url" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h2>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>

		</div><!-- .events_header -->

	</div><!-- .large-12 -->

</div><!-- .row -->

<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
<div class="row clearfix">

	<?php
	    $thumb = get_post_thumbnail_id();
	    $img_url = wp_get_attachment_url( $thumb ); //get img URL
	    $params = array( 'width' => 1140, 'height' => 340 ); 
	    $image = bfi_thumb( "$img_url", $params ); 
	?>

		<div class="large-12 columns">
            <a href="<?php the_permalink(); ?>" class="featured_image_post inner_link_hover" title="<?php the_title(); ?>"><img alt="" src="<?php echo $image ?>" /></a>
		</div><!-- .large-12 .columns -->

</div><!-- .row -->
<?php  endif; //end image check  ?> 

<div class="row">
	
	<div class="large-12 columns">
		
	<!-- Event Content -->
	<?php do_action( 'tribe_events_before_the_content' ) ?>
	<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
		<?php the_excerpt() ?>
		<a href="<?php echo tribe_get_event_link() ?>" class="tribe-events-read-more" rel="bookmark"><?php _e( 'Find out more', 'tribe-events-calendar' ) ?> &rarr;</a>
	</div><!-- .tribe-events-list-event-description -->
	<?php do_action( 'tribe_events_after_the_content' ) ?>

	</div>

</div>

<div class="row">

<div class="large-12 columns">

<div class="events_meta">

	<!-- Event Meta -->
	<?php do_action( 'tribe_events_before_the_meta' ) ?>
	<div class="tribe-events-event-meta <?php echo $has_venue . $has_venue_address; ?>">

		<!-- Schedule & Recurrence Details -->
		<div class="updated published time-details">
			<?php echo tribe_events_event_schedule_details() ?>
			<?php echo tribe_events_recurrence_tooltip() ?>
		</div>
		
		<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
			<div class="tribe-events-venue-details">
				<?php echo implode( ', ', $venue_details) ; ?>
			</div> <!-- .tribe-events-venue-details -->
		<?php endif; ?>

	</div><!-- .tribe-events-event-meta -->
	<?php do_action( 'tribe_events_after_the_meta' ) ?>

</div><!-- .events_meta -->

</div><!-- .large-12 .columns -->

</div><!-- .row -->

</div><!-- .event_post_content -->
