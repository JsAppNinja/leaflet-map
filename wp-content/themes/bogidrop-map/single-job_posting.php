<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<section id="primary" class="content-area col-sm-12 col-lg-8">
         <?php the_title( '<h1 class="entry-title">', '</h1>' ) ?>

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
            <?php // the_meta(); ?>
            <div class="JobPost">
                <div class="JobPost__Sidebar">
                    <!-- Branch -->
                    <?php if (types_render_field( 'unit_type' )) : ?> 
                        <div class="JobPost__Item">
                            <div class="JobPost__Item__Label">Branch: </div><?php echo(types_render_field( 'unit_type' )); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Squadron -->
                    <div class="JobPost__Item">
                    <?php
                        $terms = get_the_terms( $post->ID , 'squadron' );
                        if ( $terms != null ){
                            foreach( $terms as $term ) {
                                echo '<div class="JobPost__Item__Label">Squadron: </div>' . $term->name;
                                unset($term);
                            } 
                        } 
                    ?>
                    </div>

                    <!-- Wing -->
                    <div class="JobPost__Item">
                    <?php
                        $terms = get_the_terms( $post->ID , 'wing' );
                        if ( $terms != null ){
                            foreach( $terms as $term ) {
                                echo '<div class="JobPost__Item__Label">wing: </div>' . $term->name;
                                unset($term);
                            } 
                        } 
                    ?>
                    </div>

                    <!-- Address -->
                    <?php if (types_render_field( 'locality' )) : ?> 
                        <div class="JobPost__Item">
                            <div class="JobPost__Item__Label">Address: </div><?php echo(types_render_field( 'locality' )); ?>, <?php echo(types_render_field( 'administrative_area' )); ?> 
                        </div>
                    <?php endif; ?>
                    

                    <!-- Aircraft -->
                    <div class="JobPost__Item">
                    <?php
                        $terms = get_the_terms( $post->ID , 'aircraft' );
                        if ( $terms != null ){
                            foreach( $terms as $term ) {
                                echo '<div class="JobPost__Item__Label">Aircraft: </div>' . $term->name;
                                unset($term);
                            } 
                        } 
                    ?>
                    </div>

                    <!-- Job Type -->
                    <?php if (types_render_field( 'job_type' )) : ?>
                        <div class="JobPost__Item">
                            <div class="JobPost__Item__Label">Job Type: </div><?php echo(types_render_field( 'job_type' )); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Deadline -->
                    <?php if (types_render_field( 'application_deadline' )) : ?> 
                        <div class="JobPost__Item">
                            <div class="JobPost__Item__Label">Application Deadline: </div><?php echo(types_render_field( 'application_deadline' )); ?>
                        </div>
                    <?php endif; ?>
                </div>

                

                <div class="JobPosting__Main">
                    <!-- Job Description -->
                    <?php if (types_render_field( 'job_description' )) : ?> 
                        <div class="JobPost__Item__Label">Job Description: </div><?php echo(types_render_field( 'job_description' ));
                    endif; ?>

                    <!-- How To Apply -->
                    <?php if (types_render_field( 'how_to_apply' )) : ?> 
                        <div class="JobPost__Item__Label">how_to_apply: </div><?php echo(types_render_field( 'how_to_apply' ));
                    endif; ?>

                </div>
            </div>
		<?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
