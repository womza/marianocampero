<?php
/**
 * The Header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56812811-1', 'auto');
  ga('send', 'pageview');

</script></head>

<body <?php body_class(); ?> id="rescue_site">

<?php do_action( 'before' ); ?>

<div class="top_header_wrap contain-to-grid">
  
  <div class="row">

    <div class="large-12 columns logo">
      <?php if ( of_get_option( 'logo_image' ) ) { //check if there's a logo image ?>

        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo of_get_option( 'logo_image' ); ?>" alt="<?php bloginfo('name'); ?>"></a>

      <?php } else { ?>

      <hgroup>  
        <h3 class="logo-text"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a></h3>
      </hgroup>
          
      <?php } // end logo check ?>

    </div><!-- .large-12 .logo -->

  </div><!-- .row -->

</div><!-- .top_header_wrap .contain-to-grid -->

<div class="bottom_header_wrap clearfix">

  <div class="row">
    
    <div class="large-12 columns">
      <nav class="top-bar table" data-topbar data-options="mobile_show_parent_link: true">

          <ul class="title-area">
            <li class="name"></li>
             <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><?php _e('Menu','rescue'); ?></a></li>
          </ul><!-- .title-area -->

          <section class="top-bar-section">

			<?php 
				$defaults = array(
			        'theme_location' => 'header',
			        'container' => false,
			        'menu_class' => 'left bottom_nav',
			        'depth' => 5,
			        'fallback_cb' => false,
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker' => new foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

          </section><!-- .top-bar-section -->

      </nav><!-- .top-bar -->

    </div><!-- large-12 -->

  </div><!-- .row -->

</div><!-- .bottom_header_wrap -->
