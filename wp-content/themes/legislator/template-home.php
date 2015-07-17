<?php
/*
Template Name: Home
*/

get_header(); ?>


<div class="hero_section">

  <div class="row">

    <div class="large-12 columns">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'home' ); ?>

    <?php endwhile; // end of the loop. ?>

    <div class="home_widgets_hero">

    <div class="row">

  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_hero') ) : ?>
        
      <!-- For demo purposes. Add widgets in WP. -->
      <div class="home_widgets_hero_demo large-6 columns">
        <div class="textwidget">
          <iframe src="//player.vimeo.com/video/57712615?title=0&amp;byline=0&amp;portrait=0" width="530" height="298" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>

      <div class="home_widgets_hero_demo large-6 columns">

        <h3 class="widget-title">Need More Information<span data-tooltip class="has-tip tip-left" title="pssst... this is just a demo.">?</span></h3>

        <div id="mc_signup">
        <form action="#">
          <div class="row">
            <div class="mc_merge_var large-12 columns">
            <input id="mc_mv_NAME" class="mc_input" type="text" name="mc_mv_NAME" placeholder="Name" size="18">
            </div>
          </div><!-- .row -->

          <div class="row">
            <div class="mc_merge_var large-12 columns">
            <input id="mc_mv_EMAIL" class="mc_input" type="text" name="mc_mv_EMAIL" placeholder="Email" size="18">
            </div>
          </div><!-- .row -->

          <div class="row">
            <div class="mc_merge_var large-4 columns">
            <input id="mc_mv_FNAME" class="mc_input" type="text" name="mc_mv_FNAME" placeholder="State" size="18">
            </div>
            <div class="mc_signup_submi large-8 columns">
            <input id="mc_signup_submit" class="button" type="submit" value="Get Informed" name="mc_signup_submit">
            </div>
          </div><!-- .row -->
        </form>
        </div><!-- #mc_signup -->
      </div><!-- .home_widgets_hero -->

  	<?php endif; //  home_hero ?>

    </div><!-- .row -->

  </div><!-- .home_widgets_hero -->

    </div><!-- .large-12 -->

  </div><!-- .row -->

</div> <!-- end .hero_section -->

<div class="main_content_wrap">

  <?php if ( of_get_option('home_bio_area_show') ) : ?>

  <div class="row home_bio">

    <?php if ( of_get_option( 'home_bio_image' ) ) { //check if there's a bio image ?>
    <div class="medium-3 columns">
        <img src="<?php echo of_get_option( 'home_bio_image' ); ?>" alt="<?php bloginfo('name'); ?>">
    </div><!-- .large-3 -->
    <?php } //end bio image check ?>

    <div class="<?php if ( of_get_option( 'home_bio_image' ) ) { echo "medium-9"; } else { echo "medium-12"; } ?> columns">

    <h2 class="home_bio_title" style="<?php if ( !of_get_option( 'home_bio_image' ) ) { echo "text-align:center;"; }; ?>"><?php echo of_get_option( 'home_bio_section_title' ); ?></h2>
      
    <div class="row">

      <div class="large-6 columns">

      <?php if ( of_get_option( 'home_bio_summary' ) ) { ?>
       <p><?php echo of_get_option( 'home_bio_summary' ); ?></p> 
      <?php } ?>

      </div>

      <div class="large-6 columns">

      <?php 
        $bio_details = of_get_option( 'home_details_list' );
        echo do_shortcode($bio_details); 
      ?>

      </div>

    </div><!-- .row -->

      <a class="button small expand" style="background-color:<?php echo of_get_option( 'home_button_color' ); ?>!important" href="<?php echo of_get_option( 'home_bio_button_link' ); ?>"><?php echo of_get_option( 'home_bio_button_name' ); ?></a>


    </div><!-- .medium-9 -->

  </div><!-- .row .home_bio -->

  <?php endif; // end check for home bio area show ?>

  <?php if ( of_get_option('home_events_area_show') ) { ?>

  <!-- Upcoming Events -->

    <div class="home_events_wrap clearfix">

      <div class="events_bg_image events_bg_image_pos bg_center_center">

        <div class="row hideme">

          <hr>

          <div class="large-12 columns">

            <div class="row">

          	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_events') ); ?>

            </div><!-- .row -->

          </div><!-- .large-12 -->

        </div><!-- .row .hideme -->

      </div><!-- .events_bg_image -->

    </div><!-- .home_events_wrap -->

  <?php } // end check for home events area show ?>

  <?php if ( of_get_option('home_news_area_show') ) { ?>

  <div class="home_latest_news">

      <div class="row">

        <div class="large-3 columns">
          <h3><a href="<?php echo of_get_option( 'home_blog_link'); ?>"><?php echo of_get_option('home_news_title'); ?></a></h3>
        </div><!-- .large-2 -->

        <div class="large-9 columns"><hr></div>

      </div><!-- .row -->

      <div class="row">

      <div class="large-12 columns" id="home_post_slider">

        <ul class="bjqs">

      <?php 
          $home_news_number = of_get_option( 'home_news_number');
          $formats = new WP_Query( array( // Display most recent standard posts
      		'posts_per_page' => $home_news_number,
      		'paged' => get_query_var('paged'),
      		'tax_query' => array(
      		  	array(
      		  	'taxonomy' => 'post_format',
      			  'field'    => 'slug',
      		  	'terms'    => array( 
                            'post-format-link', 
                            'post-format-aside', 
                            'post-format-gallery', 
                            'post-format-status', 
                            'post-format-quote', 
                            'post-format-chat', 
                            'post-format-image' ),
      		    'operator' => 'NOT IN',
      		  ))
          )
        );
      	if( $formats->have_posts() ) : while( $formats->have_posts() ) : $formats->the_post(); ?>

      <li>

      <div class="row">
        <div class="large-12 columns">
      		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div><!-- .large-12 -->
      </div>

      <div class="row">

        <div class="<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { echo "large-8"; } else { echo "large-12"; } ?> columns">
          <?php the_excerpt(); ?>
        </div>

        <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
        <div class="large-4 columns">

          <?php

                  $thumb = get_post_thumbnail_id();
                  $img_url = wp_get_attachment_url( $thumb ); //get img URL

                  $params = array( 'width' => 340, 'height' => 200 ); 
                  $image = bfi_thumb( "$img_url", $params ); ?>

            <div class="featured_image">
            <a href="<?php the_permalink(); ?>" class="featured_image_post inner_link_hover" title="<?php the_title(); ?>"><img alt="" src="<?php echo $image ?>" /></a>
            </div><!-- .featured_image -->

        </div><!-- .large-4 -->
        <?php } // end image check ?>

      </div><!-- .row -->

      </li>

  <?php endwhile; endif; wp_reset_postdata(); // end most recent standard post ?>

  </ul>

  </div><!-- #home_post_slider -->

</div><!-- .row -->

  </div><!-- .home_latest_news -->

  <?php } // end check for latest news area show ?>

  <?php if ( of_get_option('home_gallery_area_show') ) { //check if we want to show the home gallery section ?>

  <div class="home_image_gallery clearfix">
    <div class="row ">

      <?php // Checking for Rescue Portfolio Plugin
      include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

      if ( is_plugin_active( 'rescue-portfolio/index.php' ) or is_plugin_active( 'rescue-portfolio-master/index.php' ) ) : ?>

        <div class="large-3 columns">
          <h3><a href="<?php echo of_get_option( 'home_gallery_link'); ?>"><?php echo of_get_option('home_gallery_title'); ?></a></h3>
        </div><!-- .large-2 -->

        <div class="large-9 columns"><hr></div>

    </div>

    <div class="row">

      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">

          <?php
              // Query Our Database
              $wpbp = new WP_Query(array( 'post_type' => 'portfolio', 'posts_per_page' =>'4' ) ); 

              // Begin The Loop
              if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 

              // Get The Taxonomy 'Filter' Categories
              // $terms = get_the_terms( get_the_ID(), 'filter' ); 

              // Get the image URL
              $thumb = get_post_thumbnail_id();
              $img_url = wp_get_attachment_url( $thumb ); //get img URL
          ?>
                <li>
                  <div class="view view-first">
                  
                    <?php // Check for featured image
                      if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : 

                      $params = array( 'width' => 245, 'height' => 245 ); 
                      $image = bfi_thumb( "$img_url", $params ); ?>

                      <img alt="<?php echo get_the_title(); ?>" src="<?php echo $image ?>" />
                                       
                    <?php  endif; //end image check  ?> 

                    <div class="mask">
                        <h2><?php echo get_the_title(); ?></h2>
                        <!-- Fancybox Image -->
                        <a href="<?php echo $img_url ?>" class="fancybox info" rel="gallery_group" title="<?php echo get_the_title(); ?>"><?php _e('View Larger','rescue');?></a>
                        <!-- Permalink -->
                        <a href="<?php the_permalink(); ?>" class="info" rel="gallery_group" title="<?php echo get_the_title(); ?> Details"><?php _e('Details','rescue');?></a>
                    </div>

                    </div><!-- .view .view-first -->
                </li>
            
            <?php // $count++; // Increase the count by 1 ?>   
            <?php endwhile; endif; // END the Wordpress Loop ?>
            <?php wp_reset_query(); // Reset the Query Loop?>

      </ul><!-- .small-block-grid-1 medium-block-grid-4 large-block-grid-4 -->

    </div><!-- .row .home_image_gallery -->

    <div class="row">

      <div class="medium-12 columns home_gallery_button">
        <a href="<?php echo of_get_option( 'home_gallery_link'); ?>" class="right"><?php _e('View All Images','rescue'); ?></a>
      </div><!-- .medium-12 .home_gallery_button -->
      
    </div><!-- .row -->

  </div><!-- .home_image_gallery -->

  </div><!-- .hideme -->

    <?php endif; // end our plugin check ?>

  <?php } // end check for home gallery area show ?>

</div><!-- .main_content_wrap -->

<?php get_footer(); ?>