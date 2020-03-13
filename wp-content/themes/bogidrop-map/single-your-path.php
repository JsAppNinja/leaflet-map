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
			<?php get_template_part( 'template-parts/content', get_post_format() ) ?>
            <div class="faq">
                <?php if (types_render_field( 'question-1' )) : ?> 
                    <div class="faq__item">
                        <div data-question="1" class="faq__item__question">
                            <?php echo(types_render_field( 'question-1' )); ?>
                        </div>
                        <div data-answer="1" class="faq__item__answer faq__item__answer--open">
                            <?php echo(types_render_field( 'answer-1' )); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (types_render_field( 'question-2' )) : ?> 
                    <div class="faq__item">
                        <div data-question="2" class="faq__item__question">
                            <?php echo(types_render_field( 'question-2' )); ?>
                        </div>
                        <div data-answer="2" class="faq__item__answer">
                            <?php echo(types_render_field( 'answer-2' )); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (types_render_field( 'question-3' )) : ?> 
                    <div class="faq__item">
                        <div data-question="3" class="faq__item__question">
                            <?php echo(types_render_field( 'question-3' )); ?>
                        </div>
                        <div data-answer="3" class="faq__item__answer">
                            <?php echo(types_render_field( 'answer-3' )); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (types_render_field( 'question-4' )) : ?> 
                    <div class="faq__item">
                        <div data-question="4" class="faq__item__question">
                            <?php echo(types_render_field( 'question-4' )); ?>
                        </div>
                        <div data-answer="4" class="faq__item__answer">
                            <?php echo(types_render_field( 'answer-4' )); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (types_render_field( 'question-5' )) : ?> 
                    <div class="faq__item">
                        <div data-question="5" class="faq__item__question">
                            <?php echo(types_render_field( 'question-5' )); ?>
                        </div>
                        <div data-answer="5" class="faq__item__answer">
                            <?php echo(types_render_field( 'answer-5' )); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php $key="wpcf-notes"; echo get_post_meta($post->ID, $key, true); ?>

		<?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
