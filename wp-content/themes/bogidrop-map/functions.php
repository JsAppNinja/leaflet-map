<?php
/**
 * Bogidope functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bogidope
 */

if ( ! function_exists( 'bogidope_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bogidope_setup() {
    /*
	 * Make theme available for translation.
	 * If you're building a theme based on this theme, use a find and replace
	 * to change 'bogidope' to the name of your theme in all the template files.
	 */
    load_theme_textdomain( 'bogidope' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'bogidope' ),
        'header-menu' => esc_html__( 'Header Menu', 'bogidope' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'bogidope_custom_background_args', array(
        'default-color' => 'fafafa',
        'default-image' => '',
    ) ) );

    // Custom logo support.
    add_theme_support( 'custom-logo' );
    
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'bogidope_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bogidope_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'bogidope_content_width', 1140 );
}
add_action( 'after_setup_theme', 'bogidope_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bogidope_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'bogidope' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'bogidope' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Header widget area', 'bogidope' ),
        'id'            => 'header-widget',
        'description'   => esc_html__( 'Add widgets here.', 'bogidope' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    for ( $i = 1; $i <= intval( 4 ); $i++ ) {
        register_sidebar( array(
            'name' 				=> sprintf( __( 'Footer %d', 'bogidope' ), $i ),
            'id' 				=> sprintf( 'footer-%d', $i ),
            'description' 		=> sprintf( esc_html__( 'Widgetized Footer Region %d.','bogidope' ), $i ),
            'before_widget'     => '<section id="%1$s" class="widget %2$s">',
            'after_widget' 		=> '</section>',
            'before_title' 		=> '<h3 class="widget-title">',
            'after_title' 		=> '</h3>',
            )
        );
    }
    if( is_edd_activated() || is_woocommerce_activated() ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Shop widget area', 'bogidope' ),
            'id'            => 'sidebar-shop',
            'description'   => esc_html__( 'Add widgets here.', 'bogidope' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }

}
add_action( 'widgets_init', 'bogidope_widgets_init' );


/**
 * Enqueue scripts and styles.
 */

function bogidope_scripts() {
    wp_enqueue_style( 'bogidope-style', get_stylesheet_uri() );

    wp_enqueue_script( 'bogidope-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'bogidope-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0.10', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'bogidope-theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), '1.0', true );

    //conditional ie scripts
    global $wp_scripts;
    wp_enqueue_script('igthemes-ie9',
                 get_template_directory_uri() . '/js/ie-fix.js',
                 array(),
                 '1.0',
                 false );
    wp_enqueue_script('igthemes-ie9');
    wp_script_add_data('igthemes-ie9', 'conditional', 'lt IE 9');
}
add_action( 'wp_enqueue_scripts', 'bogidope_scripts' );

//Gooogle fonts
function bogidope_google_fonts() {
        wp_enqueue_style( 'bogidope-fonts', '//fonts.googleapis.com/css?family='. apply_filters( 'igthemes_google_font', 'Open+Sans:300,300i,400,400i,700,700i&subset=latin-ext'));
}

add_action( 'wp_enqueue_scripts', 'bogidope_google_fonts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/admin/options/customizer.php';
/**
 * Welcome screen.
 */
require get_template_directory() . '/inc/admin/welcome/welcome-screen.php';

/**
 * Template functions an actionss.
 */
require get_template_directory() . '/inc/render/template-functions.php';
require get_template_directory() . '/inc/render/template-tags.php';
require get_template_directory() . '/inc/render/extras.php';
//structure
require get_template_directory() . '/inc/render/structure/header.php';
require get_template_directory() . '/inc/render/structure/content-top.php';
require get_template_directory() . '/inc/render/structure/footer.php';
require get_template_directory() . '/inc/render/structure/loop.php';
require get_template_directory() . '/inc/render/structure/post.php';
require get_template_directory() . '/inc/render/structure/page.php';
//plugins
require get_template_directory() . '/inc/plugins/jetpack/jetpack-funtions.php';
require get_template_directory() . '/inc/plugins/beaver-builder/bbuilder-functions.php';

/*----------------------------------------------------------------------
# EDD SUPPORT
------------------------------------------------------------------------*/
if ( ! function_exists( 'is_edd_activated' ) ) {
    function is_edd_activated() {
        return class_exists( 'Easy_Digital_Downloads' ) ? true : false;
    }
}
if (is_edd_activated()) {
    require get_template_directory() . '/inc/plugins/edd/edd-functions.php';
}

/*----------------------------------------------------------------------
# WOOCOMMERCE SUPPORT
------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'igthemes_woocommerce_support' );
function igthemes_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Check if woocommerce is active and prevent fatal error
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
    function is_woocommerce_activated() {
        return class_exists( 'woocommerce' ) ? true : false;
    }
}

if (is_woocommerce_activated()) {
    require get_template_directory() . '/inc/plugins/woocommerce/wc-functions.php';
}

// Custom Taxonomy 
function wpa_show_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'post' ){
        $terms = wp_get_object_terms( $post->ID, 'article_categories' );
        if( $terms ){
            return str_replace( '%article_categories%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_show_permalinks', 1, 2 );

add_action( 'pre_get_posts', 'show_all_jobs' );

function show_all_jobs( $query ) {
    
    if ( ! is_admin() && $query->is_main_query() ) {
    
        if ( is_post_type_archive( 'job-posting' ) ) {
            
            $query->set('posts_per_page', -1 );
    
        }
    }
}
function sort_teams($query) {
    if ($query->is_post_type_archive('team') && $query->is_archive) {
        $query->set('order', 'ASC');
        $query->set('meta_key', 'wpcf-order');
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'sort_teams');


add_image_size( 'post-thumbnails', '850', '250', true );

add_image_size( 'homepage-thumbs', '400', '118', true );

add_image_size( 'team-thumbs', '300', '300', true );

add_theme_support( 'homepage-thumbs' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-post-ancestor', $classes) || in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'menu-item--active ';
    }
    return $classes;
}

function my_custom_mime_types( $mimes ) {
    // New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'my_custom_mime_types' );

add_editor_style('editor-style.css');