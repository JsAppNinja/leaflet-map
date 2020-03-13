<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogidope
 */

get_header(); ?>
<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <div class="hentry">
               <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <div class="entry-content">

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
                        <tbody id="JobListing">
                            <?php 
                                $args = array(
                                    'post_type'      => 'job-posting',
                                    'posts_per_page' => '-1',
                                    'meta_key'       => 'wpcf-application_deadline',
                                    'orderby'        => 'meta_value_num',
                                    'order'          => 'ASC'
                                );
                                $loop = new WP_Query($args); 
                            ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post() ?>  
                                <?php 
                                    $deadline = types_render_field( 'application_deadline' );
                                    
                                    time() - strtotime($deadline);
                                    
                                    $newPost = false;
                                    
                                    $updatedPost = false;
                                    
                                    if ( (strtotime('-10 day') <= strtotime(get_the_date())) && (types_render_field( 'not-new' ) != 1) ) {
                                        $newPost = true;
                                    }
                                    
                                    if ( (strtotime('-10 day') <= strtotime(the_modified_date( '', '', '', false))) && (types_render_field( 'not-new' ) != 1) && ($newPost != true) && (types_render_field( 'not-updated' ) != 1) ) {
                                        $updatedPost = true;
                                    }
                                    
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
                                            <?php if(types_render_field( 'job-post-aircraft' )) { echo(types_render_field( 'job-post-aircraft' ));} ?>
                                        </td>

                                        <td>
                                            <?php if(types_render_field( 'job_type' )) { echo(types_render_field( 'job_type' ));} ?>
                                            <?php if(types_render_field( 'job-post-job-type' )) { echo(types_render_field( 'job-post-job-type' ));} ?>
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
                                            <?php if(types_render_field( 'job-post-squadron' )) { echo(types_render_field( 'job-post-squadron' ));} ?>
                                            
                                            <?php if($updatedPost) { echo ' <span class="status status--updated">Updated</span>'; }?>
                                            <?php if($newPost) { echo '<span class="status status--new">New</span>'; }?>
                                        </td>

                                        <td>
                                            <?php echo(types_render_field( 'application_deadline' )); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo get_post_permalink(); ?>">View</a>
                                            
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer();
