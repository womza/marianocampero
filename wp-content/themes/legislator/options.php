<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'rescue'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$numbers_array = array(
		'1' => __('One', 'rescue'),
		'2' => __('Two', 'rescue'),
		'3' => __('Three', 'rescue'),
		'4' => __('Four', 'rescue'),
		'5' => __('Five', 'rescue')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'rescue'),
		'two' => __('Pancake', 'rescue'),
		'three' => __('Omelette', 'rescue'),
		'four' => __('Crepe', 'rescue'),
		'five' => __('Waffle', 'rescue')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/img/';

	$options = array(); 

/*----------------------------------------------------*/
/*  General Settings
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('General', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo Image', 'rescue'),
		'desc' => __('Upload your logo image. Recommended width: 200px.', 'rescue'),
		'id' => 'logo_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Footer Copyright', 'rescue'),
		'desc' => __('Enter copyright details for display in the footer. Copyright character ( &#169; ) and current year will automatically appear.', 'rescue'),
		'id' => 'footer_copyright',
		'std' => 'Rescue themes. All rights reserved',
		'type' => 'textarea');

	$options[] = array(
		'name' => "Main Color Scheme",
		'desc' => "Select the color scheme for your site.",
		'id' => "color_scheme",
		'std' => "blue",
		'type' => "images",
		'options' => array(
			'blue' => $imagepath . 'blue.png',
			'red' => $imagepath . 'red.png',
			'green' => $imagepath . 'green.png',
			'purple' => $imagepath . 'purple.png',
			'black' => $imagepath . 'black.png',
			'white' => $imagepath . 'white.png')
	);

	// $options[] = array(
	// 	'name' => __('Custom CSS', 'rescue'),
	// 	'desc' => __('Enter any custom CSS in this box.', 'rescue'),
	// 	'id' => 'custom_css',
	// 	'std' => '',
	// 	'type' => 'textarea');

/*----------------------------------------------------*/
/*  Home Bio Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Bio', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Home Biography Area?', 'rescue'),
		'desc' => __('Check here if you want to display the biography section on the home page.', 'rescue'),
		'std' => '1',
		'id' => 'home_bio_area_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Home Bio Section Title', 'rescue'),
		'desc' => __('Enter the main title of the home page bio section.', 'rescue'),
		'id' => 'home_bio_section_title',
		'std' => 'Meet Your Candidate',
		'type' => 'text');

	$options[] = array(
		'name' => __('Image', 'rescue'),
		'desc' => __('Upload an image for the biography section. Recommended width: 245px.', 'rescue'),
		'id' => 'home_bio_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Summary', 'options_framework_theme'),
		'desc' => __('Enter your bio summary text here (HTML will work too).', 'rescue'),
		'id' => 'home_bio_summary',
		'std' => 'Enter your bio summary text in the theme options panel.',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Bio Button Color', 'rescue'),
		'desc' => __('Change the button color in the home page bio section. The default is this sharp red: #e91f26 ', 'rescue'),
		'id' => 'home_button_color',
		'std' => '#e91f26',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Home Bio Button Name', 'rescue'),
		'desc' => __('Enter what you want your bio button to say.', 'rescue'),
		'id' => 'home_bio_button_name',
		'std' => 'Full Biography',
		'type' => 'text');

	$options[] = array(
		'name' => __('Home Bio Button Link', 'rescue'),
		'desc' => __('Enter the direct link to your about page (or any link, for that matter).', 'rescue'),
		'id' => 'home_bio_button_link',
		'std' => '#',
		'type' => 'text');

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 20,
	);

	$options[] = array(
		'name' => __('More Details', 'rescue'),
		'desc' => sprintf( __( 'Enter details forthe right side of the bio area. You can even use <a href="%1$s" target="_blank">Rescue Shortcodes</a> if the plugin is activated.', 'rescue' ), 'http://rescuethemes.com/themes/advocator/documentation/#shortcodes' ),
		'id' => 'home_details_list',
		'std' => 'Lorem Ipsum Dolar',
		'type' => 'editor',
		'settings' => $wp_editor_settings );


/*----------------------------------------------------*/
/*  Home Events Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Events', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Home Events Area?', 'rescue'),
		'desc' => __('Check here if you want to display the Events area on the home page. Add content to this area in <b>Appearance > Widgets > Home Events Area</b>. Recommended Events Plugin: <a href="http://wordpress.org/plugins/the-events-calendar/">The Events Calendar</a>', 'rescue'),
		'std' => '1',
		'id' => 'home_events_area_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Background Image', 'rescue'),
		'desc' => __('Upload an image for the background of the home page events section.', 'rescue'),
		'id' => 'home_events_image',
		'type' => 'upload');

/*----------------------------------------------------*/
/*  Home Latest News Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Latest News', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Latest news Area?', 'rescue'),
		'desc' => __('Check here if you want to display the Latest News area on the home page.', 'rescue'),
		'std' => '1',
		'id' => 'home_news_area_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Home Latest News Title', 'rescue'),
		'desc' => __('Enter the title for the home page Latest News area.', 'rescue'),
		'id' => 'home_news_title',
		'std' => 'Press Releases',
		'type' => 'text');

	$options[] = array(
		'name' => __('Home Blog Link', 'rescue'),
		'desc' => __('Enter the direct link to your main blog or news page.', 'rescue'),
		'id' => 'home_blog_link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Number of Posts', 'rescue'),
		'desc' => __('Enter the number of posts you want displayed on the home page. ', 'rescue'),
		'id' => 'home_news_number',
		'std' => '2',
		'type' => 'text');

/*----------------------------------------------------*/
/*  Home Gallery Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Gallery', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Home Gallery Area?', 'rescue'),
		'desc' => __('Check here if you want to display the Gallery area on the home page. Make sure that you activate the <a href="http://rescuethemes.com/plugins/">Rescue Portfolio Plugin</a>', 'rescue'),
		'std' => '1',
		'id' => 'home_gallery_area_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Home Gallery Area Title', 'rescue'),
		'desc' => __('The title displayed at the top of the gallery area on the home page. ', 'rescue'),
		'id' => 'home_gallery_title',
		'std' => 'Campaign Images',
		'type' => 'text');

	$options[] = array(
		'name' => __('Home Gallery Link', 'rescue'),
		'desc' => __('Enter the direct link to your image gallery page. This is the URL of the page where you entered the Rescue Portfolio shortcode: [rescue_portfolio]', 'rescue'),
		'id' => 'home_gallery_link',
		'std' => '#',
		'type' => 'text');

/*----------------------------------------------------*/
/*  Footer
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Footer', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show donation bar?', 'rescue'),
		'desc' => __('Check here if you want to display the donation bar.', 'rescue'),
		'std' => '1',
		'id' => 'home_donation_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Donation Button Text', 'rescue'),
		'desc' => __('The text to be displayed on the donation button.', 'rescue'),
		'id' => 'donate_button_text',
		'std' => 'Donate Now!',
		'type' => 'text');

	$options[] = array(
		'name' => __('Donation Button Link', 'rescue'),
		'desc' => __('The direct link to your donation page. Recommended Donation Plugin: <a href="http://wordpress.org/plugins/seamless-donations/">Seamless Donations</a>', 'rescue'),
		'id' => 'donation_button_link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Twitter', 'rescue'),
		'desc' => __('Enter your Twitter profile link.', 'rescue'),
		'id' => 'twitter_icon',
		'std' => 'https://twitter.com/rescuethemes',
		'type' => 'text');

	$options[] = array(
		'name' => __('Facebook', 'rescue'),
		'desc' => __('Enter your Facebook link.', 'rescue'),
		'id' => 'facebook_icon',
		'std' => 'https://www.facebook.com/RescueThemes',
		'type' => 'text');

	$options[] = array(
		'name' => __('Google+', 'rescue'),
		'desc' => __('Enter your Google Plus profile link.', 'rescue'),
		'id' => 'google_icon',
		'std' => 'https://plus.google.com/u/1/+rescuethemes/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Instagram', 'rescue'),
		'desc' => __('Enter your Instagram profile link.', 'rescue'),
		'id' => 'instagram_icon',
		'std' => 'https://instagram.com/rescuethemes/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Vimeo', 'rescue'),
		'desc' => __('Enter your Vimeo profile link.', 'rescue'),
		'id' => 'vimeo_icon',
		'std' => 'https://vimeo.com/rescuethemes/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Youtube', 'rescue'),
		'desc' => __('Enter your Vimeo profile link.', 'rescue'),
		'id' => 'youtube_icon',
		'std' => 'http://www.youtube.com/user/rescuethemes',
		'type' => 'text');


/*----------------------------------------------------*/
/*  Custom Styles
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Custom Styles', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Custom CSS', 'rescue'),
		'desc' => __('All default styles are located in /css/style.css but you can overide those styles by entering CSS here. It\'s recommended that a <a href="http://codex.wordpress.org/Child_Themes">child theme</a> is used but if that isn\'t possible, add your custom styles here.' , 'rescue'),
		'id' => 'custom_css',
		'type' => 'textarea');

	return $options;
}