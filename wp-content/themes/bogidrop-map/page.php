<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogidope
 */

get_header(); ?>

    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

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
                    <div class="container">
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
                    </div>
                <?php endif; ?>
            </main><!-- #main -->
        </div><!-- #primary -->

        <?php get_sidebar(); ?>
    </div>

<?php
get_footer();
