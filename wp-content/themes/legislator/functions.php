<?php
/**
 * Functions and definitions
 *
 * @package rescue
 */

/*----------------------------------------------------*/
/*  Loads the Options Panel - http://goo.gl/PQFH0
/*----------------------------------------------------*/
/*
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

/*
 * This function will add custom scripts to the options panel
 */

add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

    jQuery('#example_showhidden').click(function() {
        jQuery('#section-example_text_hidden').fadeToggle(400);
    });

    if (jQuery('#example_showhidden:checked').val() !== undefined) {
        jQuery('#section-example_text_hidden').show();
    }

});
</script>

<?php
}

/*----------------------------------------------------*/
/*	Set content width based on theme design
/*----------------------------------------------------*/
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* pixels */
}

if ( ! function_exists( 'rescue_setup' ) ) :

/*----------------------------------------------------*/
/*	Set defaults and register various WP features
/*----------------------------------------------------*/
function rescue_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'rescue', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// Register our navigation areas
	register_nav_menus( 
        array(
          'header' => __( 'Header', 'rescue' ),
          'footer' => __( 'Footer', 'rescue' ),
	   ) 
    );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'chat', 'quote', 'link', 'status' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rescue_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // rescue_setup
add_action( 'after_setup_theme', 'rescue_setup' );

/*----------------------------------------------------*/
/*  Enable Shortcodes in Text Widgets
/*----------------------------------------------------*/
add_filter('widget_text', 'do_shortcode');

/*----------------------------------------------------*/
/*	Register widgetized areas
/*----------------------------------------------------*/
function rescue_widgets_init() {
    register_sidebar( array(
        'name'           => __( 'Inner Pages', 'rescue' ),
        'id'             => 'inner_sidebar',
        'before_widget'  => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget'   => '</aside><br>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Home Hero Area', 'rescue' ),
        'id'             => 'home_hero',
        'before_widget'  => '<div class="home_widgets_hero large-6 columns">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => '</h3>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Home Events Area', 'rescue' ),
        'id'             => 'home_events',
        'before_widget'  => '<div class="home_widget_events">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => '</h3>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Footer', 'rescue' ),
        'id'             => 'footer_sidebar',
        'before_widget'  => '<div class="medium-3 columns footer_widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget'   => '</aside></div>',
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => '</h5>',
    ) );
}
add_action( 'widgets_init', 'rescue_widgets_init' );

/*----------------------------------------------------*/
/*	Enqueue scripts and styles
/*----------------------------------------------------*/
function rescue_scripts() {

    // Enqueue Styles & Scripts
    wp_register_style( 'foundation_style', get_template_directory_uri() . '/css/foundation.min.css', array(), '', 'all' );
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '', 'all' );
    wp_register_style('font_open_sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800');
    wp_register_style('font_fjalla_one', '//fonts.googleapis.com/css?family=Fjalla+One');
    wp_register_style('font_sigmar_one', '//fonts.googleapis.com/css?family=Sigmar+One');
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.1.0', 'all' );
    wp_register_style( 'fancybox_style', get_template_directory_uri() . '/inc/fancybox/jquery.fancybox.css', array(), '', 'all' );
    wp_register_style( 'fancybox_buttons', get_template_directory_uri() . '/inc/fancybox/helpers/jquery.fancybox-buttons.css', array(), '', 'all' );
    wp_register_style( 'fancybox_thumbs', get_template_directory_uri() . '/inc/fancybox/helpers/jquery.fancybox-thumbs.css', array(), '', 'all' );

    wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '', false ); 
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array( 'jquery' ), '', false ); 
    wp_register_script( 'fancybox_mousewheel', get_template_directory_uri() . '/inc/fancybox/jquery.mousewheel-3.0.6.pack.js', array( 'jquery' ), '', false ); 
    wp_register_script( 'fancybox_pack_js', get_template_directory_uri() . '/inc/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), '', false ); 
    wp_register_script( 'fancybox_buttons', get_template_directory_uri() . '/inc/fancybox/helpers/jquery.fancybox-buttons.js', array( 'jquery' ), '', false ); 
    wp_register_script( 'fancybox_media', get_template_directory_uri() . '/inc/fancybox/helpers/jquery.fancybox-media.js', array( 'jquery' ), '', false ); 
    wp_register_script( 'fancybox_thumbs_script', get_template_directory_uri() . '/inc/fancybox/helpers/jquery.fancybox-thumbs.js', array( 'jquery' ), '', false );
    wp_register_script( 'foundation_tooltip', get_template_directory_uri() . '/js/foundation/foundation.tooltip.js', array( 'jquery' ), '', true );
    wp_register_script( 'basic_jquery_slider', get_template_directory_uri() . '/js/bjqs-1.3.min.js', array( 'jquery' ), '', true );
    wp_register_script( 'rescue_scripts', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'modernizr');
    wp_enqueue_script( 'classie');
    wp_enqueue_script( 'uisearch'); 

    // Enqueue styles and scripts
    wp_enqueue_style( 'foundation_style' );
    wp_enqueue_style( 'normalize' );
    wp_enqueue_style( 'font_open_sans');
    wp_enqueue_style( 'font_fjalla_one');
    wp_enqueue_style( 'font_sigmar_one');
    wp_enqueue_style( 'font_awesome');
    wp_enqueue_style( 'fancybox_style' );
    wp_enqueue_style( 'fancybox_buttons' );
    wp_enqueue_style( 'fancybox_thumbs' );
    wp_enqueue_style( 'rescue_style', get_stylesheet_uri() );

    wp_enqueue_script( 'foundation');
    wp_enqueue_script( 'fancybox_mousewheel');
    wp_enqueue_script( 'fancybox_pack_js');
    wp_enqueue_script( 'fancybox_buttons');
    wp_enqueue_script( 'fancybox_media');
    wp_enqueue_script( 'fancybox_thumbs_script' );
    wp_enqueue_script( 'foundation_tooltip' );
    wp_enqueue_script( 'basic_jquery_slider' );
    wp_enqueue_script( 'rescue_scripts' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );

	}

}
add_action( 'wp_enqueue_scripts', 'rescue_scripts' );

/*----------------------------------------------------*/
/*  Custom Styles
/*----------------------------------------------------*/
if ( ! function_exists( 'dynamic_css_enqueue' ) ) :

    function dynamic_css_enqueue(){
        wp_enqueue_style('dynamic-css', admin_url('admin-ajax.php').'?action=dynamic_css');
    } 

    add_action( 'wp_enqueue_scripts', 'dynamic_css_enqueue' );

endif; // end dynamic_css_enqueue

if ( ! function_exists( 'dynaminc_css' ) ) :

    function dynaminc_css() {
        require(get_template_directory().'/css/dynamic.css.php');
        exit;
    }

    add_action('wp_ajax_dynamic_css', 'dynaminc_css');
    add_action('wp_ajax_nopriv_dynamic_css', 'dynaminc_css');

endif; // end dynaminc_css

/*----------------------------------------------------*/
/*  Custom Walker for Foundation Nav - http://goo.gl/mTkWbg
/*----------------------------------------------------*/
class foundation_walker extends Walker_Nav_Menu {
 
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
        $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';
 
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
 
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
 
} // end custom walker

/*----------------------------------------------------*/
/*  Image Resizing - http://goo.gl/93C5Ik
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_image_resize' ) ) :

    function rescue_image_resize() {
        require get_template_directory() . '/inc/BFI_Thumb.php';
    }
    add_action( 'after_setup_theme', 'rescue_image_resize' );
    
endif;

/*----------------------------------------------------*/
/*  Display Errors as Admin Alerts - http://goo.gl/kYZOl5
/*----------------------------------------------------*/
//require get_template_directory() . '/inc/errors.php';

/*----------------------------------------------------*/
/*	Custom template tags
/*----------------------------------------------------*/
require get_template_directory() . '/inc/template-tags.php';

/*----------------------------------------------------*/
/*	Functions that act independently of the theme templates
/*----------------------------------------------------*/
require get_template_directory() . '/inc/extras.php';

/*----------------------------------------------------*/
/*	Customizer additions
/*----------------------------------------------------*/
require get_template_directory() . '/inc/customizer.php';

/*----------------------------------------------------*/
/*  TGM Plugin Activation
/*----------------------------------------------------*/
require get_template_directory() . '/inc/tgm.php';

/* EOF */