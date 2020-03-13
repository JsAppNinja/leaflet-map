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
        <?php echo(types_render_field( 'product-one' )); ?>
    <?php endwhile; ?>
<?php endif; ?>
<header class="big-hero overlay col-lg-12">
            <div class="container">
                <div class="svg-hero">
                </div>
                <div class="container text-left">
                    <h1>Next Mission: <br>
                Your Future</h1>
                    <p class="lead">You spend your life landing, aircraft,
                        <br> let us help you land the perfect job.</p>
                    <a href="#" class="btn btn-primary">View Our Consultation Packages</a>
                </div>
            </div>
        </header>
        <section id="about" class="oval-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro">
                            <h2>Take Control of your aviation career</h2>
                            <div class="space-line-left"></div>
                            <p>Our team of experts are here to help you build a better tomorrow. At BogiDope, we want to understand your personal goals to better prepare you when you face the hiring board. We offer a variety of tools and content that allow you to stay informed and ready for your next big move. </p>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <img width="70" src="<?php bloginfo('template_directory'); ?>/images/pilot.png" />
                                        <h2>Civilian to Guard/Reserves</h2>
                                        <div class="space-line-light"></div>
                                        <p>We tailored the Civilian to Guard/Reserves content specifically for the men and women interested in attending Undergraduate Pilot Training (UPT)</p>
                                        <p><a href="#">Learn More ></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <img width="70" src="<?php bloginfo('template_directory'); ?>/images/wpilot.png" />
                                        <h2>Active Duty Transition</h2>
                                        <div class="space-line-light"></div>
                                        <p>We tailored the Active Duty to Guard/ Reserve content specifically for current military pilots from all branches interested in making this transition.</p>
                                        <p><a href="#">Learn More ></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <img width="70" src="<?php bloginfo('template_directory'); ?>/images/military.png" />
                                        <h2>Military to Airlines</h2>
                                        <div class="space-line-light"></div>
                                        <p>We tailored the Military to Airlines content specifically for current or former military pilots from all branches interested in making this transition</p>
                                        <p><a href="#">Learn More ></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oval-bg-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">

            <h1 class="section-title">The content to help you succeed</h1>
            <div class="space-line-center"></div>
            <div class="container">

                <div class="row">
                    <div class="svg-hero-object">
                    </div>
                    <div class="col-sm-6 ">
                        <div class="row">
                            <div class="col-sm-2">
                                <img width="50" src="<?php bloginfo('template_directory'); ?>/images/icon-1.png" />
                            </div>
                            <div class="lists col-sm-10">
                                <h2>Job Listings <span class="badge badge-secondary">Updated Daily</span></h2>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                                <p><a href="#">View Job Listings ></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2">
                                <img width="50" src="<?php bloginfo('template_directory'); ?>/images/icon-3.png" />
                            </div>
                            <div class="col-sm-10">
                                <h2>Industry Articles</h2>
                                <p class="lead">The most current, consolidated, and complete list of squadron hiring deadlines, requirements and Points of Contact.
                                </p>
                                <p><a href="#">View Latest Articles ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2">
                                <img width="50" src="<?php bloginfo('template_directory'); ?>/images/icon-2.png" />
                            </div>
                            <div class="col-sm-10">
                                <h2>Interactive Map</h2>
                                <p class="lead">The locations and contact information of over 175 flying Air National Guard and Air Force Reserve squadrons and locations of every major airline hub.</p>
                                <p><a href="#">View Map ></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2">
                                <img width="60" src="<?php bloginfo('template_directory'); ?>/images/icon-4.png" /> </div>
                            <div class="col-sm-10">
                                <h2>Consultation</h2>
                                <p class="lead">The locations and contact information of over 175 flying Air National Guard and Air Force Reserve squadrons and locations of every major airline hub.</p>
                                <p><a href="#">View Consultation Packages ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tools" class="overlay col-lg-12 oval-bg-2">
            <div class="svg-hero-tools">
            </div>
            <div class="container">
                <div class="intro">
                    <h2>The tools to help you prepare</h2>
                    <div class="space-line-left"></div>
                    <p>Pilot slots are extremely competitive. Your application directly affects your chances to get an interview, and your interview directly affects your chances of getting the job offer.</p>
                    <p>
                        We’ll guide you through the entire process from the first draft of your resume to a mock interview at your dream squadron.</p>
                </div>

                <div class="row col-lg-12">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
                                <div class="card">
                                    <div class="card-body-app">
                                        <div class="card-purple curve wave-b">
                                            <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                            <span class="text-right"><sup class="dollar">$</sup><span class="price">249</span></span>
                                            <h2>Application Review</h2>
                                        </div>
                                        <ul class="app-list">
                                            <li>Resume Creation Guide</li>
                                            <li>Cover Letter Creation Guide</li>
                                            <li>Resume & Cover Letter Templates</li>
                                            <li>Two 1-on-1 Consultations</li>
                                            <li>And More!</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
                                <div class="card">
                                    <div class="card-body-app">
                                        <div class="card-blue curve wave-c">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <span class="text-right"><sup class="dollar">$</sup><span class="price">249</span></span>
                                            <h2>Interview Prep Package</h2>
                                        </div>
                                        <ul class="app-list">
                                            <li>Interview Prep Guide</li>
                                            <li>Interview Question Bank</li>
                                            <li>2+ hours of 1-on-1 Interview Prep</li>
                                            <li>30+ Pages of Interview Advice and Examples</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 mx-auto">
                                <div class="card">
                                    <div class="card-body-app">
                                        <div class="card-green curve wave">

                                            <i class="fa fa-gift" aria-hidden="true"></i>
                                            <span class="text-right"><sup class="dollar">$</sup><span class="price">249</span>
                                            </span>
                                            <h2>Combo Package</h2>
                                        </div>
                                        <div class="row">
                                            <div class="combo-pk col-sm-5">
                                                Application Review Package
                                                <br>
                                                <span class="green-price">($249 value)</span>
                                            </div>
                                            <i class="fa fa-plus green col-sm-1"></i>
                                            <div class="combo-pk col-sm-5">
                                                Application Review Package
                                                <br>
                                                <span class="green-price">($349 value)</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                        <div class="quote"><img src="<?php bloginfo('template_directory'); ?>/images/bluequotes.png" alt=""></div>

                        <!-- Carousel indicators -->
                        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                            <!-- Carousel items -->
                            <a data-slide="prev" href="#fade-quote-carousel" class="left carousel-control"><img src="<?php bloginfo('template_directory'); ?>/images/leftarrow.png" alt=""></a>
                            <a data-slide="next" href="#fade-quote-carousel" class="right carousel-control"><img src="<?php bloginfo('template_directory'); ?>/images/rightarrow.png" alt=""></a>
                            <div class="carousel-inner">

                                <div class="active item">
                                    <blockquote class="text-center">
                                        <h2>See what they're saying about us</h2>
                                        <div class="space-line-center"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio</p>
                                        <p><strong>Kevin D. (ANG F-16 UPT Slectee</strong></p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="text-center">
                                        <h2>Again See what they're saying about us</h2>
                                        <div class="space-line-center"></div>
                                        <p>Second slide Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam.</p>
                                        <p><strong>Kevin D. (ANG F-16 UPT Slectee</strong></p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="text-center">
                                        <h2>Again third See what they're saying about us</h2>
                                        <div class="space-line-center"></div>
                                        <p>This carousel Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas</p>
                                        <p><strong>Kevin D. (ANG F-16 UPT Slectee</strong></p>
                                    </blockquote>
                                </div>

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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="intro-verted">
                                    <h2>Lets set you up for success</h2>
                                    <div class="space-line-left"></div>
                                    <p>This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
                                    <a href="#" class="btn btn-primary">View Our Consultation Packages</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="email-box">
                                    <img class="icon-mail" src="<?php bloginfo('template_directory'); ?>/images/email-icon.png" />
                                    <h2>Still thining about it?</h2>
                                    <p>Enter your email and we'll send you a PDF filled with this and that for FREE!: We promise we'll never spam you.</p>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                                        </div>
                                        <button class="pdf-btn btn btn-secondary">Get my FREE PDF</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="job" class="bg-light">
            <div class="container">
                <h1 class="section-title">Check out some of our content</h1>
                <div class="space-line-center"></div>
                <h1>Job Listings</h1>
                <p><a href="/job-posting/">View All Job Listings ></a></p>
                <div class="row">
                <?php 
                    $args = array('post_type' => 'job-posting');
                    $loop = new WP_Query($args); ?>
                    
                    <?php if ( $loop->have_posts() ) : ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <?php 
                            $deadline = types_render_field( 'application_deadline' );
                            time() - strtotime($deadline);

                            $jobType = '';

                            if(types_render_field( 'job_type' ) === 'UPT') {
                                $jobType = 'orange-tag';
                            }

                            if(types_render_field( 'job_type' ) === 'Rated' ) {
                                $jobType = 'purple-tag';
                            }

                            if((time()-(60*60*24)) < strtotime($deadline)) : ?>
                            <div class="card">
                                <div class="card-body">
                                    <span class="badge <?php echo($jobType) ?> badge-secondary right-status"><?php echo(types_render_field( 'job_type' )); ?></span>
                                    <h5>
                                        <a href="<?php echo get_post_permalink(); ?>">
                                            <?php // Squadron
                                                the_title();
                                            ?>
                                        </a>
                                    </h5>
                                    <p class="map">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Location: <?php echo(types_render_field( 'locality' )); ?>, <?php echo(types_render_field( 'administrative_area' )); ?>
                                        
                                        <!-- <span class="right-status">New!</span> -->
                                    </p>
                                    <p></p>
                                    <p class="aircraft">AIRCRAFT
                                        <br>
                                        <span>
                                            <?php //Aircraft
                                                $terms = get_the_terms( $post->ID , 'aircraft' );
                                                if ( $terms != null ){
                                                    foreach( $terms as $term ) {
                                                        echo $term->name;
                                                        unset($term);
                                                    } 
                                                } 
                                            ?>
                                        </span>
                                    </p>
                                    <p></p>
                                    <p class="calendar-text"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        Deadline: <?php echo(types_render_field( 'application_deadline' )); ?>
                                        <br>
                                        <?php 
                                            $date1 = new DateTime(date('Y-m-d', strtotime($deadline)));
                                            $date2 = new DateTime(date('Y-m-d'));
                                            echo $date1->diff($date2)->days;
                                        ?> days left to apply   
                                    </p>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
        </section>
        <section id="articles" class="bg-light">
            <div class="container">
                <h1>Latest Articles</h1>
                <p><a href="#">View All Articles ></a></p>

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
                            <div class="card">
                                <div class="card-body">
                                    <?php the_post_thumbnail('homepage-thumbs', array( 'class' => 'aligncenter' )); ?>
                                    <h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
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
