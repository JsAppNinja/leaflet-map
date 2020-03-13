<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}
// echo apply_filters( 'the_content',' [leaflet-map zoom=2 zoomcontrol doubleClickZoom height=300 scrollwheel] ');
$drag = __('Drag Me', 'leaflet-map');
	echo do_shortcode('[leaflet-map zoom=7 zoomcontrol doubleClickZoom height=300 scrollwheel]');
	echo do_shortcode(sprintf('[leaflet-marker draggable visible] %s [/leaflet-marker]',
			$drag
	));
?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
