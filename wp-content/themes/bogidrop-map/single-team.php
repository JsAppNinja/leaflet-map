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
            <div class="Team__Bio">
                <div class="Team__Image">
                    <?php echo get_the_post_thumbnail(  ); ?>
                </div>
                <h3><?php the_title() ?></h3>
                <strong><?php echo(types_render_field( 'team_title' )); ?></strong>
                <h6><?php echo(types_render_field( 'thumbnail' )); ?></h6>
                <hr>
                <?php the_content() ?>
            </div>
		<?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
