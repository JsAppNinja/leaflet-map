<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container">
	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
            <?php the_meta(); ?>

			<?php get_template_part( 'template-parts/content', get_post_format() ) ?>
            
            <?php $key="wpcf-notes"; echo get_post_meta($post->ID, $key, true); ?>
		<?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
