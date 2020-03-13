<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Team Page
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

            <div class="team-section">
                <h2>Our Team</h2>
                <div class="team-block">
                    <h3>Founders</h3>
                    <?php 
                        $args = array(
                            'post_type'      => 'team',
                            'posts_per_page' => '-1',
                            'meta_key'       => 'wpcf-order',
                            'orderby'        => 'meta_value_num',
                            'order'          => 'ASC'
                        );
                        $loop = new WP_Query($args); ?>
                        
                    <?php if ( $loop->have_posts() ) : ?>
                        <div class="team-row founder">
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php if ( has_term( 'founder', 'team' ) ) : ?>
                                    <div class="team">
                                        <div class="team-image"><?php echo get_the_post_thumbnail( $loop->ID, 'team-thumbs' ); ?></div>
                                        <div class="team-info">
                                            <div class="team-info-name">
                                                <h4><?php echo get_the_title(); ?></h4>
                                                <strong><?php echo(types_render_field( 'team_title' )); ?></strong>
                                            </div>
                                            <div class="team-info-bio"><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></div>
                                            <a href="<?php echo the_permalink(); ?>" class="team-info-link">Full Bio</a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="team-block">
                    <h3>Contributors</h3>
                    <?php 
                        $args = array(
                            'post_type'      => 'team',
                            'posts_per_page' => '-1',
                            'meta_key'       => 'wpcf-order',
                            'orderby'        => 'meta_value_num',
                            'order'          => 'ASC'
                        );
                        $loop = new WP_Query($args); ?>
                        
                    <?php if ( $loop->have_posts() ) : ?>
                        <div class="team-row contributor">
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php if ( has_term( 'contributor', 'team' ) ) : ?>
                                    <div class="team">
                                        <div class="team-image"><?php echo get_the_post_thumbnail( $loop->ID, 'team-thumbs' ); ?></div>
                                        <div class="team-info">
                                            <div class="team-info-name">
                                                <h4><?php echo get_the_title(); ?></h4>
                                                <strong><?php echo(types_render_field( 'team_title' )); ?></strong>
                                            </div>
                                            <div class="team-info-bio"><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></div>
                                            <a href="<?php echo the_permalink(); ?>" class="team-info-link">Full Bio</a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
