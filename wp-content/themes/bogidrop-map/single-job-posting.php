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
	<section id="primary" class="content-area">
        

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
            <?php // the_meta(); ?>
            <div class="JobPost hentry">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ) ?>
                    <div class="entry-content">
                        <div class="JobPost__Sidebar">
                            <!-- Branch -->
                            <div class="JobPost__Item">
                                <div class="JobPost__Item__Label">Branch: </div>
                                <?php if(types_render_field( 'unit_type')) {echo types_render_field( 'unit_type');} ?>
                                <?php if(types_render_field( 'job-post-branch' )) {echo types_render_field( 'job-post-branch');} ?>
                            </div>

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
                                <?php if (types_render_field( 'job-post-squadron' )) : ?>
                                    <div class="JobPost__Item__Label">Squadron: </div>
                                    <?php if(types_render_field( 'job-post-squadron' )) {echo types_render_field( 'job-post-squadron');} ?>
                                <?php endif; ?>
                            </div>

                        <!-- Wing -->
                        <div class="JobPost__Item">
                            <?php
                                $terms = get_the_terms( $post->ID , 'wing' );
                                if ( $terms != null ){
                                    foreach( $terms as $term ) {
                                        echo '<div class="JobPost__Item__Label">Wing: </div>' . $term->name;
                                        unset($term);
                                    } 
                                } 
                            ?>
                            <?php if (types_render_field( 'job-post-wing' )) : ?>
                                <div class="JobPost__Item__Label">Wing: </div>
                                <?php if(types_render_field( 'job-post-wing' )) {echo types_render_field( 'job-post-wing');} ?> 
                            <?php endif; ?>
                        </div>

                        <!-- Address -->
                        <div class="JobPost__Item">
                            <div class="JobPost__Item__Label">Location: </div>
                            <?php echo(types_render_field( 'locality' )); ?>, <?php echo(types_render_field( 'administrative_area' )); ?> 
                        </div>
                        

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
                            <?php if (types_render_field( 'job-post-aircraft' )) : ?>
                                <div class="JobPost__Item__Label">Aircraft: </div>
                                <?php echo types_render_field( 'job-post-aircraft'); ?> 
                            <?php endif; ?>
                        </div>

                        <!-- Job Type -->
                        <?php if (types_render_field( 'job_type' ) || types_render_field( 'job-post-job-type' )) : ?>
                            <div class="JobPost__Item">
                                <div class="JobPost__Item__Label">Job Type: </div>
                                <?php echo(types_render_field( 'job_type', array('output' => 'raw') )); ?>
                                <?php echo(types_render_field( 'job-post-job-type' )); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Deadline -->
                        <?php if (types_render_field( 'application_deadline' )) : ?> 
                            <div class="JobPost__Item">
                                <div class="JobPost__Item__Label">Application Deadline: </div>
                                <?php echo(types_render_field( 'application_deadline' )); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="JobPosting__Main">
                        <!-- Job Description -->
                        <?php if (types_render_field( 'job_description' )) : ?> 
                            <div class="JobPost__Item__Label">Job Description: </div>
                            <?php echo(types_render_field( 'job_description' ));
                        endif; ?>

                        <!-- How To Apply -->
                        <?php if (types_render_field( 'how_to_apply' )) : ?> 
                            <div class="JobPost__Item__Label">How to Apply: </div>
                            <?php echo(types_render_field( 'how_to_apply' ));
                        endif; ?>
                        
                        <?php if (types_render_field( 'contact-poc' ) === 'Yes') : ?>
                            <?php if (types_render_field( 'hiring-poc' )) : ?> 
                                <div class="JobPost__Item__Label">Hiring POC: </div>
                                <p><?php echo(types_render_field( 'hiring-poc' ));?></p>
                            <?php endif; ?>

                            <?php if (types_render_field( 'hiring-poc-email' )) : ?> 
                                <div class="JobPost__Item__Label">Hiring POC Email: </div>
                                <p><?php echo(types_render_field( 'hiring-poc-email' ));?></p>
                            <?php endif; ?>

                            <?php if (types_render_field( 'hiring-poc-phone' )) : ?> 
                                <div class="JobPost__Item__Label">Hiring POC Phone: </div>
                                <p><?php echo(types_render_field( 'hiring-poc-phone' ));?></p>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if (types_render_field( 'attachment_job_posting' ) || types_render_field( 'job-posting-attachment' )) : ?> 
                            <div class="JobPost__Item__Label">Attachments: </div>
                            <div class="JobPost__Item__Attachment">
                                <?php if (types_render_field( 'attachment_job_posting' )) : ?>
                                    <?php 
                                        $url = strip_tags(types_render_field( 'attachment_job_posting' ));
                                        $fileName = basename($url);

                                        $files = types_render_field( 'attachment_job_posting' );
                                        echo($files);
                                    ?> 
                                    
                                <?php endif; ?> </div>
                            <?php if (types_render_field( 'job-posting-attachment' )) : ?>
                                <p><?php echo types_render_field( 'job-posting-attachment' ); ?></p>
                            <?php endif; ?> 
                        <?php endif; ?>

                    </div>
                </div>
            </div>
		<?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
