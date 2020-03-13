<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogidope
 */

get_header(); ?>

    <header class="page-header">
        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <table class="views-table cols-6 table">
                <thead>
                    <tr>
                        <th>Aircraft</th>
                        <th>Job Type</th>
                        <th>Location</th>
                        <th>Squadron</th>
                        <th>Deadline</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ( have_posts() ) : the_post() ?>  
                        <?php 
                            $deadline = types_render_field( 'application_deadline' );
                            time() - strtotime($deadline);
                            if((time()-(60*60*24)) < strtotime($deadline)) : ?>
                            <tr>
                                <td>
                                    <?php //Aircraft
                                        $terms = get_the_terms( $post->ID , 'aircraft' );
                                        if ( $terms != null ){
                                            foreach( $terms as $term ) {
                                                echo $term->name;
                                                unset($term);
                                            } 
                                        } 
                                    ?>
                                </td>

                                <td>
                                    <?php echo(types_render_field( 'job_type' )); ?>
                                </td>

                                <td>
                                    <?php echo(types_render_field( 'locality' )); ?>, <?php echo(types_render_field( 'administrative_area' )); ?>
                                </td>

                                <td>
                                    <?php // Squadron
                                        $terms = get_the_terms( $post->ID , 'squadron' );
                                        if ( $terms != null ){
                                            foreach( $terms as $term ) {
                                                echo $term->name;
                                                unset($term);
                                            } 
                                        } 
                                    ?>
                                </td>

                                <td>
                                    <?php echo(types_render_field( 'application_deadline' )); ?>
                                </td>
                                <td>
                                    <a href="<?php echo get_post_permalink(); ?>">View Job Listing</a>
                                    
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
