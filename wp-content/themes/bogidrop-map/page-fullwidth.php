<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package Bogidope
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main full-width" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            <?php if (!empty(types_child_posts('faq-item'))) : ?>
                <div class="faq">
                    <h3 class="faq__title"><?php echo(types_render_field('faq-title')); ?></h3>
                    <div class="faq-questions">
                        <?php
                            // $child_posts = types_child_posts('faq-item');
                            $child_posts = toolset_get_related_posts( 
                                get_the_ID(), 
                                'faq-item', 
                                array( 
                                    'query_by_role' => 'parent', 
                                    'args' => array(
                                        'meta_key' => 'toolset-post-sortorder',
                                        'meta_compare' => 'EXISTS'
                                    ),
                                    'orderby' => 'meta_value_num',
                                    'order' => 'ASC',
                                    'return' => 'post_object'
                                ) 
                            );
                            $i = 1;
                            foreach ($child_posts as $key => $child_post) : ?>
                            <?php
                                $firstClass = '';
                                reset($child_posts);
                                if ($key === key($child_posts))
                                    $firstClass = ' faq__item__answer--open';

                                end($child_posts);
                                if ($key === key($child_posts))
                                    $firstClass = '';
                            ?>
                            <div class="faq__item">
                                <div data-question="<?php echo $i; ?>" class="faq__item__question">
                                    <?php echo(types_render_field("question", array( "id" => "$child_post->ID"))) ?>
                                </div>
                                <div data-answer="<?php echo $i; ?>" class="faq__item__answer<?php echo $firstClass; ?>">
                                    <?php echo(types_render_field("faq-answer-wysiwyg", array( "id" => "$child_post->ID"))) ?>
                                </div>
                            </div>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

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
