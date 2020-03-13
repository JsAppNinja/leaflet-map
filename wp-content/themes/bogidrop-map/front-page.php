<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<?php 
    $args = array(
        'post_type' => 'homepage'
    );
    $loop = new WP_Query($args); ?>
    
<?php if ( $loop->have_posts() ) : ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php if (get_the_ID() === 797) : ?>
            <header class="big-hero overlay col-lg-12">
                <div class="container">
                    <div class="svg-hero">
                        <img src="<?php bloginfo('template_directory'); ?>/images/pilot-hero-graphic.png" alt="">
                    </div>
                    <div class="big-hero__left">
                        <?php echo(types_render_field( 'hero-area' )); ?>
                    </div>
                </div>
            </header>
            <section id="about" class="oval-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="intro col-lg-8">
                                <?php echo(types_render_field( 'intro-area' )); ?>
                            </div>

                            <div class="row">

                                <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                                    <div class="card">
                                        <a href="/civilian-to-guard-reserve/">
                                            <div class="card-body">
                                                <?php // echo(types_render_field( 'block-one' )); ?>
                                                
                                                <img class="alignnone wp-image-881 size-full" src="/wp-content/uploads/2019/04/image-01.png" alt="Trainer T-6 Texan II" width="345" height="120" />
                                                <h2>Civilian to Guard/Reserve</h2>
                                                <p>Do you want to become an officer and aviator in the most advanced military aircraft in the world with little to no aviation experience?</p>
                                                <strong>Learn More &gt;</strong>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                                    <div class="card">
                                        <a href="/active-duty-transition/">
                                            <div class="card-body">
                                                <?php // echo(types_render_field( 'block-two' )); ?>
                                                    <img class="alignnone wp-image-882 size-full" src="/wp-content/uploads/2019/04/image-02.png" alt="C-130's flying in formation" width="345" height="120" />
                                                    <h2>Active Duty Transition</h2>
                                                    <p>Do you want to continue to serve as a pilot/crew member while having control over your location, schedule, and aircraft?</p>
                                                    <strong>Learn More &gt;</strong>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                                    <div class="card">
                                        <a href="/military-to-airlines/"> 
                                            <div class="card-body">
                                                <?php // echo(types_render_field( 'block-three' )); ?>
                                                <img class="alignnone wp-image-883 size-full" src="/wp-content/uploads/2019/04/image-03.png" alt="Commercial jet on tarmac" width="345" height="120" />
                                                <h2>Military to Airlines</h2>
                                                <p>Do you want to leverage your military experience into a lucrative airline career? There has literally never been a better time to start.</p>
                                                <strong>Learn More &gt;</strong>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="oval-bg-3"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services">

                <h1 class="section-title"><?php echo(types_render_field( 'section-title' )); ?></h1>
                <div class="space-line-center"></div>
                <div class="container">

                    <div class="row">
                        <div class="svg-hero-object"></div>
                        <div class="row">
                            <?php
                                $child_posts = types_child_posts('prepare-blocks');
                                foreach ($child_posts as $child_post) : ?>
                                <?php if(types_render_field('icon-four-block', array( 'id' => "$child_post->ID", 'output' => 'raw'))) : ?>
                                    <div class="col-sm-6 ">
                                        <div class="row">
                                            <div class="col-sm-2 text-right">
                                                <span class="<?php echo(types_render_field('icon-four-block', array( 'id' => "$child_post->ID", 'output' => 'raw'))) ?>"></span>
                                            </div>
                                            <div class="col-sm-8">
                                                <h2><?php echo(types_render_field('title-four-block', array( 'id' => "$child_post->ID", 'output' => 'raw'))) ?></h2>
                                                <?php echo(types_render_field('body-four-block', array( 'id' => "$child_post->ID", 'output' => 'raw'))) ?>
                                            </div>
                                        </div>
                                    </div>
                                 <?php endif; ?>      
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="tools" class="overlay col-lg-12 oval-bg-2">
                <div class="container">
                    <div class="intro">
                        <?php echo(types_render_field( 'tools' )); ?>
                    </div>
                    <div class="row col-lg-12">
                        <div class="col-lg-12">
                            <div class="row flex__space-between">
                                <?php
                                    $child_posts = types_child_posts("homepage-product");
                                    foreach ($child_posts as $child_post) : ?>
                                    <?php if(types_render_field("product-name", array( "id" => "$child_post->ID"))) : ?>
                                        <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
                                            <div class="card product-link" data-url="<?php echo(types_render_field("product-url", array( "id" => "$child_post->ID", 'output' => 'raw'))) ?>">
                                                <div class="card-body-app">
                                                    <div class="curve wave <?php echo(types_render_field("card-color", array( "id" => "$child_post->ID", 'output' => 'raw'))) ?>">
                                                        <i class="fa <?php echo(types_render_field("icon", array( "id" => "$child_post->ID"))) ?>" aria-hidden="true"></i>
                                                        <span class="text-right"><span class="price">$<?php echo(types_render_field("price", array( "id" => "$child_post->ID"))) ?></span></span>
                                                        <h2><?php echo(types_render_field("product-name", array( "id" => "$child_post->ID"))) ?></h2>
                                                    </div>
                                                    <div class="product-information">
                                                        <?php echo(types_render_field("product-information", array( "id" => "$child_post->ID"))) ?>
                                                    </div>
                                                    <a class="hide" href="<?php echo(types_render_field("product-url", array( "id" => "$child_post->ID", 'output' => 'raw'))) ?>"><?php echo(types_render_field("product-name", array( "id" => "$child_post->ID"))) ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="carousel">
                <div class="dia-white"></div>

                <div class="container">
                    <div class="row">
                        <div class="svg-caro-1">
                        </div>
                        <div class="col-md-12">
                            <!-- Carousel indicators -->
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5000">
                                <div class="quote"><img src="<?php bloginfo('template_directory'); ?>/images/bluequotes.png" alt="Quote"></div>
                                <!-- Carousel items -->
                                <a data-slide="prev" href="#fade-quote-carousel" class="left carousel-control"><img src="<?php bloginfo('template_directory'); ?>/images/leftarrow.png" alt=""></a>
                                <a data-slide="next" href="#fade-quote-carousel" class="right carousel-control"><img src="<?php bloginfo('template_directory'); ?>/images/rightarrow.png" alt=""></a>
                                <div class="carousel-inner">
                                    <!-- <div class="quote-header center">
                                        <h2>See what they're saying about us</h2>
                                        <div class="space-line-center"></div>
                                    </div> -->
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
                                                if ( $x === 1 ) { 
                                                    $active = 'active ';
                                                } else {
                                                    $active = '';
                                                }
                                            ?>
                                            <?php if ($word_count <= 51) : ?>
                                                <div class="<?php echo($active); ?>item item-<?php echo($x); $x++; ?>">
                                                    <blockquote class="text-center">
                                                        <?php echo(types_render_field( 'testimonial_content' )); ?>
                                                        <p><strong><?php echo(types_render_field( 'testimonial_name' )); ?> &mdash; <?php echo(types_render_field( 'testimonial_info' )); ?></strong></p>
                                                    </blockquote>
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </div>
                        <div class="svg-caro-2">
                        </div>
                    </div>
                </div>

            </section>
            <section id="email" class="bg-header-blue">
                <div class="container">
                    <div class="row flex__space-around">
                        <div class="email-box">
                            <img class="icon-mail" src="<?php bloginfo('template_directory'); ?>/images/email-icon.png" />
                            <script src="https://f.convertkit.com/ckjs/ck.5.js"></script>
                            <form action="https://app.convertkit.com/forms/931713/subscriptions" 
                                class="seva-form formkit-form" 
                                method="post" 
                                data-sv-form="931713" 
                                data-uid="6ebe4df404" 
                                data-format="inline" 
                                data-version="5" 
                                data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;action&quot;:&quot;message&quot;,&quot;success_message&quot;:&quot;Success! Now check your email to confirm your subscription.&quot;,&quot;redirect_url&quot;:&quot;&quot;},&quot;modal&quot;:{&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null},&quot;recaptcha&quot;:{&quot;enabled&quot;:false},&quot;return_visitor&quot;:{&quot;action&quot;:&quot;show&quot;,&quot;custom_content&quot;:&quot;&quot;},&quot;slide_in&quot;:{&quot;display_in&quot;:null,&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null}}}" 
                                min-width="400 500 600 700 800">
                                <div class="formkit-background" style="opacity: 0.2;"></div>
                                    <div data-style="minimal">
                                        <div class="formkit-header" data-element="header">
                                            <h2>Still thinking about it?</h2>
                                        </div>
                                        <div class="formkit-subheader" data-element="subheader">
                                            <p>Subscribe to get our latest content by email.</p>
                                        </div>
                                        <ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
                                        <div data-element="fields" data-stacked="true" class="seva-fields formkit-fields">
                                            <div class="formkit-field">
                                                <input class="formkit-input" aria-label="Your first name" name="fields[first_name]" placeholder="Your first name" type="text">
                                            </div>
                                        <div class="formkit-field">
                                            <input class="formkit-input" name="email_address" placeholder="Your email address" required="" type="email">
                                        </div>
                                        <div class="formkit-field">
                                            <fieldset data-group="checkboxes" class="formkit-2059" type="Custom" order="2" save_as="Tag" group="field">
                                                <div class="formkit-checkboxes" data-element="tags-checkboxes" data-group="checkbox">
                                                    <input class="formkit-checkbox" id="tag-1120907-877519" type="checkbox" name="tags[]" value="877519">
                                                    <label for="tag-1120907-877519">I'm already a rated military pilot</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <button data-element="submit" class="formkit-submit formkit-submit">
                                        <div class="formkit-spinner">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <span>Subscribe</span>
                                        </button>
                                    </div>
                                    <div class="formkit-guarantee" data-element="guarantee">
                                        <p>We don't spam. Unsubscribe at any time.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- <div class="col-lg-6">
                            <div class="intro-verted">
                                <?php // echo(types_render_field( 'newsletter-left' )); ?>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<section id="job" class="bg-light">
    <div class="container">
        <h1 class="section-title">Check out some of our content</h1>
        <div class="space-line-center"></div>
        <h1>Job Listings</h1>
        <p><a href="/job-posting/">View All Job Listings ></a></p>
        <div class="row">
        <?php 
            $args = array(
                'post_type'      => 'job-posting',
                'posts_per_page' => '-1',
                'meta_key'       => 'wpcf-application_deadline',
                'orderby'        => 'meta_value_num',
                'order'          => 'ASC'
            );
            $loop = new WP_Query($args); 
            $counter = 0;
            $max = 4;
            ?>
            
            <?php if ( $loop->have_posts() ) : ?>
                <?php while ( ($loop->have_posts()) and ($counter < $max )) : $loop->the_post(); ?>
                    <?php 
                    $deadline = types_render_field( 'application_deadline' );
                    time() - strtotime($deadline);

                    $jobType = '';

                    if((types_render_field( 'job_type' ) === 'UPT') || types_render_field( 'job-post-job-type' ) === 'UPT') {
                        $jobType = 'orange-tag';
                    }

                    if((types_render_field( 'job_type' ) === 'Rated') || types_render_field( 'job-post-job-type' ) === 'Rated') {
                        $jobType = 'purple-tag';
                    }

                    if((time()-(60*60*24)) < strtotime($deadline)) : 

                    ?>
                    <a class="card" href="<?php echo get_post_permalink(); ?>">
                            <?php $counter++; ?>
                            <div class="card-body">
                                <?php if(types_render_field( 'job_type' )) : ?>
                                    <span class="badge <?php echo($jobType) ?> badge-secondary right-status"><?php echo(types_render_field( 'job_type' )); ?></span>
                                <?php endif; ?>
                                <?php if(types_render_field( 'job-post-job-type' )) : ?>
                                    <span class="badge <?php echo($jobType) ?> badge-secondary right-status"><?php echo(types_render_field( 'job-post-job-type' )); ?></span>
                                <?php endif; ?>
                                
                                <h4 >
                                    <span>
                                        <?php 
                                            $newPost = false;
                                            $updatedPost = false;
                                            if ( (strtotime('-10 day') <= strtotime(get_the_date())) && (types_render_field( 'not-new' ) != 1) ) {
                                                $newPost = true;
                                            }
                                            if ( (strtotime('-10 day') <= strtotime(the_modified_date( '', '', '', false))) && (types_render_field( 'not-new' ) != 1) && ($newPost != true) && (types_render_field( 'not-updated' ) != 1) ) {
                                                $updatedPost = true;
                                            }
                                        ?>
                                        <?php if($newPost) : ?>
                                            <div class="corner-ribbon bottom-right blue shadow">New</div>
                                        <?php endif; ?>
                                        <?php if($updatedPost) : ?>
                                            <div class="corner-ribbon bottom-right blue shadow">Updated</div>
                                        <?php endif; ?>
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
                                    </span>
                                    <?php if (types_render_field( 'job-post-job-type' ) != 'CSO') {
                                            echo(' Pilot');
                                        } 
                                    ?>
                                </h4>
                                <p class="map">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?php echo(types_render_field( 'locality' )); ?>, <?php echo(types_render_field( 'administrative_area' )); ?>
                                    <br>
                                    <?php the_title(); ?>
                                </p>
                                <p class="calendar-text"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Deadline: <?php echo(types_render_field( 'application_deadline' )); ?>
                                    <br>
                                    <?php 
                                        $date1 = new DateTime(date('Y-m-d', strtotime($deadline)));
                                        $date2 = new DateTime(date('Y-m-d'));
                                        echo $date1->diff($date2)->days;
                                    ?> days left to apply   
                                </p>
                                <p></p>
                            </div>
                        
                    </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
</section>
<section id="articles" class="bg-light">
    <div class="container">
        <h1>Industry Articles</h1>
        <p><a href="/articles/">View All Articles ></a></p>

        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'orderby'   => 'rand',
                    'posts_per_page' => '3'
                );
                $loop = new WP_Query($args); ?>
                
            <?php if ( $loop->have_posts() ) : ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="card" data-url="<?php echo the_permalink(); ?>">
                        <div class="card-body">
                            <?php the_post_thumbnail('homepage-thumbs', array( 'class' => 'aligncenter' )); ?>
                            <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span><i class="fa fa-user"></i> by <?php the_author(); ?></span>
                            <p></p>
                            <p><?php echo substr(get_the_content(), 0, 128); ?>...</p>  
                        </div>
                    </div>
                
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
