<?php
/**
 * Template Name: Leaflet Map Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage leaflet_map
 * @since 1.0
 */

get_template_part( 'singular' );
// echo apply_filters( 'the_content',' [leaflet-map zoom=2 zoomcontrol doubleClickZoom height=300 scrollwheel] ');
echo do_shortcode("[leaflet-map zoom=2 zoomcontrol doubleClickZoom height=300 scrollwheel]");
