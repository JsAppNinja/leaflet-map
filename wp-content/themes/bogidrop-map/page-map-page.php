<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Map Page
 *
 * @package Bogidope
 */

get_header(); ?>

    <div id="primary" class="content-area" style="width: 100%;">
        <main id="main" class="site-main full-width" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content-map', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            <?php if ( is_page( 172 ) ) : ?>
                <?php $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => '-1',
                    'orderby'   => 'rand',
                );
                $x = 1;
                $active = '';
                $loop = new WP_Query($args); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php 
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php
                            $word_count = str_word_count( strip_tags( types_render_field( 'testimonial_content' ) ) );
                        ?>
                        <?php if ($word_count <= 51) : ?>
                            <div class="consulting-testimonial item item-<?php echo($x); $x++; ?>">
                                <blockquote class="text-center">
                                    <?php echo(types_render_field( 'testimonial_content' )); ?>
                                    <p><strong><?php echo(types_render_field( 'testimonial_name' )); ?> &mdash; <?php echo(types_render_field( 'testimonial_info' )); ?></strong></p>
                                </blockquote>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
