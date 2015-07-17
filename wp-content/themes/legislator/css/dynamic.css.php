<?php 
  require_once( trailingslashit( get_template_directory() ). 'inc/options-framework.php' );
  header("Content-type: text/css; charset: UTF-8");

$color_scheme = of_get_option( 'color_scheme' ); 

if ($color_scheme == 'red') : ?>

/* Universal */
#rescue_site a:hover, #rescue_site a:focus, .tribe-events-widget-link a:hover {
  color: #ff0000!important;
}
#rescue_site button, #rescue_site .button, .search-form input[type="submit"], .tribe-events-list .tribe-events-event-cost span, a.tribe-events-read-more, .tribe-events-single .tribe-events-event-cost span, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a, .rescue_portfolio .filter_wrap ul li.filter.active, .rescue_portfolio .filter_wrap ul li.filter:hover, #comments .rescue_staff  {
  background-color: #DF1818!important;
  border-color: #DF1818!important;
}
#rescue_site button:hover, #rescue_site .button:hover, .search-form input[type="submit"]:hover, .tribe-events-list .tribe-events-event-cost span:hover, a.tribe-events-read-more:hover, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a:hover, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a:hover {
  background-color: #bf0d0d!important;
  color: #ffffff!important;
}
.format-quote .entry-content, .format-link .entry-content {
    background-color: #DF1818!important;
}
ul.pagination li span.current {
  background-color: #DF1818!important;
}

/* Home Header */
.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area { 
  background-color: #6d0000!important;
}
.top-bar-section li.active:not(.has-form) a:hover:not(.button) {
    color: #ff0000!important;
}
.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section li.active:not(.has-form) a:hover:not(.button) {
  background-color: #b71b1b!important;
}

/* Home Hero Section */
.hero_section, .inner_sidebar .widget_mailchimpsf_widget {
  background-color: #9e1313!important;
}
.hero_section h1.hero_h1 {
  color: #ffffff!important;
}
.hero_section hr {
  background: #E91F26!important;
}
.hero_section h2.hero_h2 {
  color: #ffffff!important;
}
.hero_section .button {
  background-color: #df1818!important;
}
.hero_section .button:hover {
  background-color: #bf0d0d!important;
}

/* Home Bio */
.home_bio .button:hover {
  color: #ffffff!important;
}

/* Home Events */
.home_widget_events .tribe-events-list-widget-events:hover .home_event_button {
  border: 4px solid #df1818!important;
  background: #df1818!important;
  color: #ffffff!important;
}
.home_widget_events .tribe-events-list-widget-events:hover a {
  color: #df1818!important;
}
.home_widget_events .home_event_button {
  border: 4px solid #ffffff!important;
  color: #ffffff!important;
}

/* Home Posts */
ul.bjqs-controls.v-centered li a {
  background: #b71b1b!important;
}
ul.bjqs-controls.v-centered li a:hover, ul.bjqs-controls.v-centered li a:focus {
  background: #9e1313!important;
}

/* Home Images */
.view h2 {
  background: rgba(183, 27, 27, 0.8)!important;
}
.view a.info {
  background: #b71b1b!important;
}

/* Footer */
.donation_wrap {
  background: #34383c!important;
}
.donation_wrap .donation_button:hover {
  border: 4px solid #b71b1b!important;
  background: #b71b1b!important;
}
footer#site_footer {
  background: #222425!important;
}


<?php elseif ($color_scheme == 'green') : ?>

/* Universal */
#rescue_site a:hover, #rescue_site a:focus, .tribe-events-widget-link a:hover {
  color: #5cc26e!important;
}
#rescue_site button, #rescue_site .button, .search-form input[type="submit"], .tribe-events-list .tribe-events-event-cost span, a.tribe-events-read-more, .tribe-events-single .tribe-events-event-cost span, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a, .rescue_portfolio .filter_wrap ul li.filter.active, .rescue_portfolio .filter_wrap ul li.filter:hover, #comments .rescue_staff  {
  background-color: #5cc26e!important;
  border-color: #5cc26e!important;
}
#rescue_site button:hover, #rescue_site .button:hover, .search-form input[type="submit"]:hover, .tribe-events-list .tribe-events-event-cost span:hover, a.tribe-events-read-more:hover, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a:hover, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a:hover, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a:hover, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a:hover  {
  background-color: #43a955!important;
  color: #ffffff!important;
}
.format-quote .entry-content, .format-link .entry-content {
    background-color: #5cc26e!important;
}
ul.pagination li span.current {
  background-color: #5cc26e!important;
}


/* Home Header */
.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area { 
  background-color: #126620!important;
}
.top-bar-section li.active:not(.has-form) a:hover:not(.button) {
    color: #5cc26e!important;
}
.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section li.active:not(.has-form) a:hover:not(.button) {
  background-color: #569f39!important;
}

/* Home Hero Section */
.hero_section, .inner_sidebar .widget_mailchimpsf_widget {
  background-color: #2f863e!important;
}
.hero_section h1.hero_h1 {
  color: #cafea0!important;
}
.hero_section hr {
  background: #5cc26e!important;
}
.hero_section h2.hero_h2 {
  color: #ffffff!important;
}
.hero_section .button {
  background-color: #5cc26e!important;
}
.hero_section .button:hover {
  background-color: #3da550!important;
}

/* Home Bio */
.home_bio .button:hover {
  color: #ffffff!important;
}

/* Home Events */
.home_widget_events .tribe-events-list-widget-events:hover .home_event_button {
  border: 4px solid #5cc26e!important;
  background: #5cc26e!important;
  color: #ffffff!important;
}
.home_widget_events .tribe-events-list-widget-events:hover a {
  color: #5cc26e!important;
}
.home_widget_events .home_event_button {
  border: 4px solid #5cc26e!important;
  color: #5cc26e!important;
}

/* Home Posts */
ul.bjqs-controls.v-centered li a {
  background: #569f39!important;
}
ul.bjqs-controls.v-centered li a:hover, ul.bjqs-controls.v-centered li a:focus {
  background: #448c28!important;
}

/* Home Images */
.view h2 {
  background: rgba(86, 159, 57, 0.8)!important;
}
.view a.info {
  background: #569f39!important;
}

/* Footer */
.donation_wrap {
  background: #34383c!important;
}
.donation_wrap .donation_button:hover {
  border: 4px solid #5cc26e!important;
  background: #5cc26e!important;
}
footer#site_footer {
  background: #222425!important;
}

  <?php elseif ($color_scheme == 'purple') : ?>

/* Universal */
#rescue_site a:hover, #rescue_site a:focus, .tribe-events-widget-link a:hover, .top-bar-section li.active:not(.has-form) a:hover:not(.button), .tribe-events-widget-link a:hover, .tribe-events-single .tribe-events-event-cost span {
  color: #8a5de1!important; 
}
#rescue_site button, #rescue_site .button, .search-form input[type="submit"], .tribe-events-list .tribe-events-event-cost span, a.tribe-events-read-more, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a, .rescue_portfolio .filter_wrap ul li.filter.active, .rescue_portfolio .filter_wrap ul li.filter:hover, #comments .rescue_staff {
  background-color: #8a5de1!important;
  border-color: #8a5de1!important;
}
#rescue_site button:hover, #rescue_site .button:hover, .search-form input[type="submit"]:hover, .tribe-events-list .tribe-events-event-cost span:hover, a.tribe-events-read-more:hover, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a:hover, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a:hover {
  background-color: #6f41c8!important;
  color: #ffffff!important;
}
.format-quote .entry-content, .format-link .entry-content {
    background-color: #8a5de1!important;
}
ul.pagination li span.current {
  background-color: #8a5de1!important;
}

/* Home Header */
.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area { 
  background-color: #250e50!important;
}
.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section li.active:not(.has-form) a:hover:not(.button) {
  background-color: #56407f!important;
}

/* Home Hero Section */
.hero_section, .inner_sidebar .widget_mailchimpsf_widget {
  background-color: #4f3b75!important;
}
.hero_section h1.hero_h1 {
  color: #ba9cf2!important;
}
.hero_section hr {
  background: #8a5de1!important;
}
.hero_section h2.hero_h2 {
  color: #ffffff!important;
}
.hero_section .button {
  background-color: #8a5de1!important;
}
.hero_section .button:hover {
  background-color: #713ed1!important;
}

/* Home Bio */
.home_bio .button:hover {
  color: #ffffff!important;
}

/* Home Events */
.home_widget_events .tribe-events-list-widget-events:hover .home_event_button {
  border: 4px solid #8a5de1!important;
  background: #8a5de1!important;
  color: #ffffff!important;
}
.home_widget_events .tribe-events-list-widget-events:hover a {
  color: #8a5de1!important;
}
.home_widget_events .home_event_button {
  border: 4px solid #8a5de1!important;
  color: #8a5de1!important;
}

/* Home Posts */
ul.bjqs-controls.v-centered li a {
  background: #56407f!important;
}
ul.bjqs-controls.v-centered li a:hover, ul.bjqs-controls.v-centered li a:focus {
  background: #4f3b75!important;
}

/* Home Images */
.view h2 {
  background: rgba(113, 62, 209, 0.8)!important;
}
.view a.info {
  background: #713ed1!important;
}

/* Footer */
.donation_wrap {
  background: #34383c!important;
}
.donation_wrap .donation_button:hover {
  border: 4px solid #713ed1!important;
  background: #713ed1!important;
}
footer#site_footer {
  background: #222425!important;
}

  <?php elseif ($color_scheme == 'black') : ?>

/* Universal */
#rescue_site a:hover, #rescue_site a:focus, .tribe-events-widget-link a:hover, .top-bar-section li.active:not(.has-form) a:hover:not(.button), .tribe-events-widget-link a:hover, .tribe-events-single .tribe-events-event-cost span {
  color: #838383!important;
}
#rescue_site button, #rescue_site .button, .search-form input[type="submit"], .tribe-events-list .tribe-events-event-cost span, a.tribe-events-read-more, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a, .rescue_portfolio .filter_wrap ul li.filter.active, .rescue_portfolio .filter_wrap ul li.filter:hover, #comments .rescue_staff {
  background-color: #171818!important;
  border-color: #171818!important;
}
#rescue_site button:hover, #rescue_site .button:hover, .search-form input[type="submit"]:hover, .tribe-events-list .tribe-events-event-cost span:hover, a.tribe-events-read-more:hover, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a:hover, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a:hover {
  background-color: #3e3e3e!important;
  color: #ffffff!important;
}
.format-quote .entry-content, .format-link .entry-content {
    background-color: #171818!important;
}
ul.pagination li span.current {
  background-color: #171818!important;
}


/* Home Header */
.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area { 
  background-color: #212426!important;
}
.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section li.active:not(.has-form) a:hover:not(.button) {
  background-color: #43484b!important;
}

/* Home Hero Section */
.hero_section, .inner_sidebar .widget_mailchimpsf_widget {
  background-color: #33383b!important;
}
.hero_section h1.hero_h1 {
  color: #ffffff!important;
}
.hero_section hr {
  background: #838383!important;
}
.hero_section h2.hero_h2 {
  color: #ffffff!important;
}
.hero_section .button {
  background-color: #171818!important;
}
.hero_section .button:hover {
  background-color: #000000!important;
}

/* Home Bio */
.home_bio .button:hover {
  color: #ffffff!important;
}

/* Home Events */
.home_widget_events .tribe-events-list-widget-events:hover .home_event_button {
  border: 4px solid #171818!important;
  background: #171818!important;
  color: #ffffff!important;
}
.home_widget_events .tribe-events-list-widget-events:hover a {
  color: #ffffff!important;
}
.home_widget_events .home_event_button {
  border: 4px solid #ffffff!important;
  color: #ffffff!important;
}

/* Home Posts */
ul.bjqs-controls.v-centered li a {
  background: #838383!important;
}
ul.bjqs-controls.v-centered li a:hover, ul.bjqs-controls.v-centered li a:focus {
  background: #717171!important;
}

/* Home Images */
.view h2 {
  background: rgba(23, 24, 24, 0.8)!important;
}
.view a.info {
  background: #171818!important;
}
.view-first .mask {
    background-color: rgba(0,0,0, 0.1)!important; 
}

/* Footer */
.donation_wrap {
  background: #34383c!important;
}
.donation_wrap .donation_button:hover {
  border: 4px solid #171818!important;
  background: #171818!important;
}
footer#site_footer {
  background: #222425!important;
}

  <?php elseif ($color_scheme == 'white') : ?>

/* Universal */
#rescue_site a:hover, #rescue_site a:focus, .tribe-events-widget-link a:hover, .top-bar-section li.active:not(.has-form) a:hover:not(.button), .tribe-events-widget-link a:hover, .tribe-events-single .tribe-events-event-cost span {
  color: #838b92!important;
}
#rescue_site button, #rescue_site .button, .search-form input[type="submit"], .tribe-events-list .tribe-events-event-cost span, a.tribe-events-read-more, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a, .rescue_portfolio .filter_wrap ul li.filter.active, .rescue_portfolio .filter_wrap ul li.filter:hover, #comments .rescue_staff {
  background-color: #838b92!important;
  border-color: #838b92!important;
}
#rescue_site button:hover, #rescue_site .button:hover, .search-form input[type="submit"]:hover, .tribe-events-list .tribe-events-event-cost span:hover, a.tribe-events-read-more:hover, .inner_sidebar .tribe-events-list-widget .tribe-events-widget-link a:hover, .footer_widget .tribe-events-list-widget .tribe-events-widget-link a:hover {
  background-color: #aaaaaa!important;
  color: #ffffff!important;
}
.format-quote .entry-content, .format-link .entry-content {
    background-color: #838b92!important;
}
ul.pagination li span.current {
  background-color: #838b92!important;
}


/* Home Header */
.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area { 
  background-color: #404040!important;
}
.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section li.active:not(.has-form) a:hover:not(.button) {
  background-color: #cccccc!important;
}

/* Home Hero Section */
.hero_section, .inner_sidebar .widget_mailchimpsf_widget {
  background-color: #f7f7f7!important;
}
.hero_section h1.hero_h1 {
  color: #263d4f!important;
}
.hero_section hr {
  background: #e1e1e1!important;
}
.hero_section h2.hero_h2 {
  color: #6a7985!important;
}
.hero_section .button {
  background-color: #838b92!important;
}
.hero_section .button:hover {
  background-color: #626e79!important;
}
.home_widgets_hero h3.widget-title, .hero_section #mc_subheader {
  color: #485865!important;
}
.hero_section input[type="text"], .hero_section input[type="password"], .hero_section input[type="date"], .hero_section input[type="datetime"], .hero_section input[type="datetime-local"], .hero_section input[type="month"], .hero_section input[type="week"], .hero_section input[type="email"], .hero_section input[type="number"], .hero_section input[type="search"], .hero_section input[type="tel"], .hero_section input[type="time"], .hero_section input[type="url"], .hero_section textarea {
  border: 4px solid #aaaaaa!important;
  box-shadow: none!important;
}
.hero_section input[type="text"], .hero_section input[type="password"], .hero_section input[type="date"], .hero_section input[type="datetime"], .hero_section input[type="datetime-local"], .hero_section input[type="month"], .hero_section input[type="week"], .hero_section input[type="email"], .hero_section input[type="number"], .hero_section input[type="search"], .hero_section input[type="tel"], .hero_section input[type="time"], .hero_section input[type="url"], .hero_section textarea, .inner_sidebar .mc_var_label, .inner_sidebar .mc_merge_var input, .inner_sidebar input.mc_input[type="text"], .inner_sidebar input.mc_input[type="password"], .inner_sidebar input.mc_input[type="date"], .inner_sidebar input.mc_input[type="datetime"], .inner_sidebar input.mc_input[type="datetime-local"], .inner_sidebar input.mc_input[type="month"], .inner_sidebar input.mc_input[type="week"], .inner_sidebar input.mc_input[type="email"], .inner_sidebar input.mc_input[type="number"], .inner_sidebar input.mc_input[type="search"], .inner_sidebar input.mc_input[type="tel"], .inner_sidebar input.mc_input[type="time"], .inner_sidebar input.mc_input[type="url"], textarea.mc_input, .inner_sidebar label.mc_var_label, .inner_sidebar .mc_help, .inner_sidebar #mc-indicates-required, .inner_sidebar .mc_interests_header {
  color: #666666!important;
}

/* Mailchimp Widget */
.inner_sidebar .widget_mailchimpsf_widget h4.widget-title, .inner_sidebar .widget_mailchimpsf_widget label.mc_radio_label, .inner_sidebar .widget_mailchimpsf_widget label.mc_interest_label, .inner_sidebar .widget_mailchimpsf_widget label.mc_email_format, .inner_sidebar .widget_mailchimpsf_widget label.mc_email_type {
  color: #333!important;
}

/* Home Bio */
.home_bio .button:hover {
  color: #ffffff!important;
}

/* Home Events */
.home_widget_events .tribe-events-list-widget-events:hover .home_event_button {
  border: 4px solid #ffffff!important;
  background: #ffffff!important;
  color: #485865!important;
}
.home_widget_events .tribe-events-list-widget-events:hover a {
  color: #ffffff!important;
}
.home_widget_events .home_event_button {
  border: 4px solid #ffffff!important;
  color: #ffffff!important;
}

/* Home Posts */
ul.bjqs-controls.v-centered li a {
  background: #838b92!important;
}
ul.bjqs-controls.v-centered li a:hover, ul.bjqs-controls.v-centered li a:focus {
  background: #707b84!important;
}

/* Home Images */
.view h2 {
  background: rgba(255, 255, 255, 0.8)!important;
  color: #485865!important;
}
.view a.info {
  background: #ffffff!important;
  color: #485865!important;
}

/* Footer */
.donation_wrap {
  background: #34383c!important;
}
.donation_wrap .donation_button:hover {
  border: 4px solid #ffffff!important;
  background: #ffffff!important;
  color: #485865!important;
}
footer#site_footer {
  background: #222425!important;
}
  <?php else : // show default blue ?>

<?php endif; //end color scheme check ?>

.events_bg_image_pos {
      <?php if ( of_get_option( 'home_events_image' ) ) { //check if there's a bg image ?>
        background: url('<?php echo of_get_option( 'home_events_image' ); ?>');
      <?php } else { ?>
        background: url('<?php echo get_stylesheet_directory_uri() ?>/img/events_bg.jpg');
      <?php } //end events image check ?>
}

<?php echo of_get_option( 'custom_css' ) ?>