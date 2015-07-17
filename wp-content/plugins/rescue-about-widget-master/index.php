<?php
/* 
 Plugin Name: Rescue About Social Widget
 Plugin URI: https://github.com/RescueThemes/rescue-about-widget
 Description: Adds a widget that will display bio info, an image, and social media icons for themes developed by <a href="http://themeforest.net/user/RescueThemes?ref=RescueThemes">Rescue Themes</a>
 Author: Rescue Themes
 Version: 1.2
 Author URI: http://themeforest.net/user/RescueThemes?ref=RescueThemes
*/

class rescue_about_plugin extends WP_Widget {

	// Defines the widget name
	function rescue_about_plugin() {
		parent::WP_Widget(false, $name = __('Rescue About', 'rescue') );
	}

	// Creates the widget in the WP admin area
	function form($instance) {

		// Check values
		if( $instance) {
		     $title = esc_attr($instance['title']);
		     $textarea = esc_textarea($instance['textarea']);
		     $image_uri = esc_url($instance['image_uri']);
		     $twitter = esc_url($instance['twitter']);
		     $facebook = esc_url($instance['facebook']);
		     $google = esc_url($instance['google']);
		     $instagram = esc_url($instance['instagram']);
		     $vimeo = esc_url($instance['vimeo']);
		     $youtube = esc_url($instance['youtube']);
		} else {
		    $title = '';
		    $textarea = '';
		    $image_uri = '';
		    $twitter = '';
		    $facebook = '';
		    $google = '';
		    $instagram = '';
		    $vimeo = '';
		    $youtube = '';
		}
		?>

		<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'rescue'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Textarea:', 'rescue'); ?></label>
		<textarea class="widefat" style="min-height: 150px;" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
		</p>

	    <p>
	    <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Image:', 'rescue'); ?></label><br />
		<?php if ( $image_uri ) { ?>
		    <img class="custom_media_image" src="<?php echo $image_uri; ?>" style="margin:2em 0;padding:0;width:100px;float:left;display:inline-block" />
		<?php } ?>
	    <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $image_uri; ?>">
	    </p>

	    <p>
	    <input type="button" value="<?php _e( 'Insert Image', 'rescue' ); ?>" class="button custom_media_upload" id="custom_image_uploader"/>
	    </p><br />

		<p>
		<label for="<?php echo $this->get_field_id('social'); ?>"><?php _e('Social Media:', 'rescue'); ?></label><br />
		</p>

		<p>
        <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter', 'rescue'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" placeholder="e.g. http://twitter.com/RescueThemes" />
		</p>

		<p>
        <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook', 'rescue'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" placeholder="e.g. http://facebook.com/RescueThemes" />
		</p>

		<p>
        <label for="<?php echo $this->get_field_id( 'google' ); ?>"><?php _e('Google', 'rescue'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'google' ); ?>" name="<?php echo $this->get_field_name( 'google' ); ?>" type="text" value="<?php echo esc_attr( $google ); ?>" placeholder="e.g. https://plus.google.com/u/1/+RescueThemes" />
		</p>

		<p>
        <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram', 'rescue'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" placeholder="e.g. http://instagram.com/RescueThemes" />
		</p>

		<p>
        <label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo', 'rescue'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" type="text" value="<?php echo esc_attr( $vimeo ); ?>" placeholder="e.g. http://vimeo.com/RescueThemes" />
		</p>

		<p>
        <label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube', 'rescue'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>" placeholder="e.g. http://youtube.com/RescueThemes" />
		</p>

	<?php
	}// end admin area form

	// Widget Update
	function update($new_instance, $old_instance) {
	    $instance = $old_instance;
	    // Fields
	    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags($new_instance['title']): '';
	    $instance['textarea'] = ( ! empty( $new_instance['textarea'] ) ) ? strip_tags($new_instance['textarea'], '<a>, <strong>'): '';
	   	$instance['image_uri'] = ( ! empty( $new_instance['image_uri'] ) ) ? strip_tags( $new_instance['image_uri'] ) : '';
	   	$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
	   	$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
	   	$instance['google'] = ( ! empty( $new_instance['google'] ) ) ? strip_tags( $new_instance['google'] ) : '';
	   	$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
	   	$instance['vimeo'] = ( ! empty( $new_instance['vimeo'] ) ) ? strip_tags( $new_instance['vimeo'] ) : '';
	   	$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
	    return $instance;
	}

	// Output the content on frontend
	function widget($args, $instance) {
	   extract( $args );

	   // Widget options
	   $title = apply_filters('widget_title', $instance['title']);
	   $textarea = $instance['textarea'];
	   $image_uri = $instance['image_uri'];
	   $twitter = $instance['twitter']; 
	   $facebook = $instance['facebook']; 
	   $google = $instance['google']; 
	   $instagram = $instance['instagram']; 
	   $vimeo = $instance['vimeo']; 
	   $youtube = $instance['youtube'];

	   echo $before_widget;
	   // Display the widget
	   echo '<div class="widget-text rescue_about_wrap clearfix">';

	   echo '<div class="widget-text rescue_about_content clearfix">';

		   // Check if title is set
		   if ( $title ) {
		      echo $before_title . $title . $after_title;
		   }
		   // Check if image is set
		   if( $image_uri ) {
		     echo '<img class="alignleft" src="'.$image_uri.'" />';
		   }
		   // Check if textarea is set
		   if( $textarea ) {
		     // echo $textarea;
		   	echo '<span class="rescue_text">'.$textarea.'</span><!-- .rescue_text -->';
		   }
		   
		// Social Media Group
		echo '</div><!-- .rescue_about_content -->';

		if ($twitter or $facebook or $google or $instagram or $vimeo or $youtube) {
		echo '<ul>';

		   // Check if Twitter is set
		   if( $twitter ) { ?>
		     <li><a href="<?php echo $twitter; ?>" target="_blank" title="twitter"><i class="fa fa-twitter-square"></i></a></li>
		   <?php
		   }

		   // Check if Facebook is set
		   if( $facebook ) { ?>
		     <li><a href="<?php echo $facebook; ?>" target="_blank" title="facebook"><i class="fa fa-facebook-square"></i></a></li>
		   <?php
		   }

		   // Check if Google+ is set
		   if( $google ) { ?>
		     <li><a href="<?php echo $google; ?>" target="_blank" title="google"><i class="fa fa-google-plus-square"></i></a></li>
		   <?php
		   }

		   // Check if Instagram is set
		   if( $instagram ) { ?>
		     <li><a href="<?php echo $instagram; ?>" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
		   <?php
		   }

		   // Check if Vimeo is set
		   if( $vimeo ) { ?>
		     <li><a href="<?php echo $vimeo; ?>" target="_blank" title="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
		   <?php
		   }

		   // Check if Youtube is set
		   if( $youtube ) { ?>
		     <li><a href="<?php echo $youtube; ?>" target="_blank" title="youtube"><i class="fa fa-youtube-square"></i></a></li>
		   <?php
		   }

	   echo '</ul>';
	   } // end social check

	   echo '</div><!-- .rescue_about_wrap -->';
	   echo $after_widget;
	} // end frontend output
}// end class

// Register widget
add_action('widgets_init', create_function('', 'return register_widget("rescue_about_plugin");'));

// Load scripts in admin area
if( !function_exists ('rescue_about_scripts') ) :
	function rescue_about_scripts(){

	  wp_enqueue_media();
	  // Media upload script
	  wp_enqueue_script('rescue_about_upload', plugin_dir_url( __FILE__ ) . 'js/image-upload-widget.js');

	}
	add_action('admin_enqueue_scripts', 'rescue_about_scripts');
endif; // end rescue_about_scripts

// Load styles in frontend
if( !function_exists ('rescue_about_styles') ) :
	function rescue_about_styles() {

		wp_enqueue_style('rescue_about_style', plugin_dir_url( __FILE__ ) . 'css/style.css');
		wp_enqueue_style( 'font_awesome', plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css', array(), '4.1.0', 'all' );


	}
	add_action('wp_enqueue_scripts', 'rescue_about_styles');
endif; // end rescue_about_styles


/* EOF */