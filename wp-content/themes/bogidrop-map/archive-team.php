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
    ?>
</header><!-- .page-header -->
<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <div class="Teams__Group">
                <h2>Founders</h2>
                <?php while ( have_posts() ) : the_post() ?>  
                    <?php
                        $terms = get_the_terms( $post->ID , 'team' );
                        if ( $terms != null ){
                            foreach( $terms as $term ) {
                                $teamLevel = $term->name;
                                unset($term);
                            } 
                        } 
                    ?>
                    <?php if ($teamLevel === 'Founder') : ?>
                        <a href="<?php echo get_post_permalink(); ?>">
                            <?php if (types_render_field( 'image' )) : ?> 
                                <div class="Team__Image">
                                    <img src="" alt="">
                                    <?php echo(types_render_field( 'image' )); ?>
                                </div>
                            <?php endif; ?>
                            <div class="Team__Bio">
                                <h3><?php the_title() ?></h3>
                                <h6><?php echo(types_render_field( 'team_title' )); ?></h6>
                                <hr>
                                <?php the_content() ?>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>    
                
            <div class="Teams__Group">
                <h2>Contributor</h2>
                <?php while ( have_posts() ) : the_post() ?> 
                    <?php
                        $terms = get_the_terms( $post->ID , 'team' );
                        if ( $terms != null ){
                            foreach( $terms as $term ) {
                                $teamLevel = $term->name;
                                unset($term);
                            } 
                        } 
                    ?>
                    <?php if ($teamLevel === 'Contributor') : ?>
                        <a href="<?php echo get_post_permalink(); ?>">
                            <?php if (types_render_field( 'image' )) : ?> 
                                <div class="Team__Image">
                                    <img src="" alt="">
                                    <?php echo(types_render_field( 'image' )); ?>
                                </div>
                            <?php endif; ?>
                            <div class="Team__Bio">
                                <h3><?php the_title() ?></h3>
                                <h6><?php echo(types_render_field( 'team_title' )); ?></h6>
                                <hr>
                                <?php the_content() ?>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer();
