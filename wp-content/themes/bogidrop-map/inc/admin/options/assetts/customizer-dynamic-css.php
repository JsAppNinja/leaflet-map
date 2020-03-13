<?php
/************************************************************************************
* TEMPLATE DYNAMIC CSS
*************************************************************************************/
add_action( 'wp_enqueue_scripts', 'igthemes_add_daynamic_css', 20 );
function igthemes_add_daynamic_css() {
    wp_enqueue_style( 'dynamic-style', get_template_directory_uri() . '/css/dynamic.css');   
    
    //DEFAULTS
    include get_template_directory() . '/inc/admin/options/assetts/customizer-defaults.php';
    $bg_color =  '#'.get_theme_mod('background_color', $background_color);
    
    $style = '
    input[type="text"],
    input[type="email"],
    input[type="url"],
    input[type="password"],
    input[type="search"],
    input[type="number"],
    input[type="tel"],
    textarea,
    select  {
        background:  '. igthemes_color_brightness($bg_color,5) .';
        border: 1px solid '. igthemes_color_brightness($bg_color,-20) .';
        color:'. get_theme_mod( 'body_text_color', $body_text_color ).';
    }
    
    table {
        border:1px solid '. igthemes_color_brightness($bg_color,-20) .'; 
        background:'. $bg_color .';
    }
    table th {
        background:'. igthemes_color_brightness($bg_color,-1) .';
        border-bottom: 1px solid '. igthemes_color_brightness($bg_color,-20) .';
    }
    table td {
        background: '. igthemes_color_brightness($bg_color,5 ).';
        border: 1px solid '. igthemes_color_brightness($bg_color,-20) .';
    }
    
    .site-footer table {
        border:1px solid '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-20) .'; 
        background:'. $bg_color .';
    }
    .site-footer table th {
        background:'. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-1) .';
        border-bottom: 1px solid '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-20) .';
    }
    .site-footer table td {
        background: '. igthemes_color_brightness( get_theme_mod('footer_background_color', $footer_background_color ),5 ).';
        border: 1px solid '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-20) .';
    }
    
    ul.page-numbers li {
        background: '. igthemes_color_brightness($bg_color,5 ).';
        border: 1px solid '. igthemes_color_brightness($bg_color,-20 ).';
    }

    ul.page-numbers .current {
        background: '. igthemes_color_brightness($bg_color,-5 ).';
    }
    
    pre {
        background: ' . igthemes_color_brightness($bg_color,-20) .';
    }
    blockquote {
        border-left-color: ' . igthemes_color_brightness($bg_color,-20) .';
    }
    
    .site-main .posts-navigation,
    .site-main .comment-navigation,
    .site-main .post-navigation,
    .breadcrumb,
    .header-widget-region .widget,
    .widget-area .widget,
    .hentry,
    .comment-body {
        background: '. igthemes_color_brightness($bg_color,15 ).';
        border: 1px solid '. igthemes_color_brightness($bg_color,-20 ).';
    }
    
    .comment-meta,
    .entry-footer {
        background: '. igthemes_color_brightness($bg_color,-5 ).';
        border: 1px solid '. igthemes_color_brightness($bg_color,5 ).';
    }
    
    .site-footer .widget {
        background: '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),15 ).';
        border: 1px solid '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-20 ).';
    }
    .site-footer .widget .widget-title {
        background: '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-5 ).';
        border: 1px solid '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),5 ).';
    }
    .header-widget-region .widget .widget-title,
    .widget-area .widget .widget-title {
        background: '. igthemes_color_brightness($bg_color,-5 ).';
        border: 1px solid '. igthemes_color_brightness($bg_color,5 ).';
    }
    
    .widget .sub-menu {
        background: '. igthemes_color_brightness($bg_color,-1 ).';
    }
    .widget li.sub-menu.sub-menu {
        background: '. igthemes_color_brightness($bg_color,-3 ).';
    }
    .site-footer .widget .sub-menu {
        background: '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-1 ).';
    }
    .site-footer .widget li.sub-menu.sub-menu {
        background: '. igthemes_color_brightness(get_theme_mod('footer_background_color', $footer_background_color ),-3 ).';
    }
    
    .woocommerce .shop-table {
        border:1px solid '. igthemes_color_brightness($bg_color,-20) .'; 
        background:'. $bg_color .';
    }
    .woocommerce table.shop_table th {
        background:'. igthemes_color_brightness($bg_color,-1) .';
        border-bottom: 1px solid '. igthemes_color_brightness($bg_color,-20) .';
        border-top:none;
    }
    .woocommerce table.shop_table td {
        background: '. igthemes_color_brightness($bg_color,5 ).';
        border: 1px solid '. igthemes_color_brightness($bg_color,-20) .';
        border-top:none!important;
    }
    .widget_shopping_cart .widget_shopping_cart_content {
        background: '. igthemes_color_brightness($bg_color,15 ).';
        border:1px solid '. igthemes_color_brightness($bg_color,-5) .';
    }
    .woocommerce .woocommerce-tabs ul.tabs {
        background: '. igthemes_color_brightness($bg_color,5 ).';
    }
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
        background: '. igthemes_color_brightness($bg_color,15 ).'!important;
    }
    .woocommerce .woocommerce-tabs .panel {
        background: '. igthemes_color_brightness($bg_color,15 ).';
    }
    .woocommerce-error, .woocommerce-info, .woocommerce-message {
        background: '. igthemes_color_brightness($bg_color, -1 ).';
    }
    .woocommerce .woocommerce-checkout #payment, .woocommerce #add_payment_method #payment{
        background: '. igthemes_color_brightness($bg_color,15 ).';
    }
    ';
    wp_add_inline_style( 'dynamic-style', $style );
}
/************************************************************************************
* CUSTOMIZER CSS
*************************************************************************************/
add_action( 'wp_enqueue_scripts', 'igthemes_add_customizer_css', 20 );
//start functions
function igthemes_add_customizer_css() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css');
    
    //DEFAULTS
    include get_template_directory() . '/inc/admin/options/assetts/customizer-defaults.php';
    $bg_color =  '#'.get_theme_mod('background_color', $background_color);

    $style = '
    .site-header {
        background:'. get_theme_mod( 'header_background_color', $header_background_color ) .';
        border-bottom: 1px solid '. igthemes_color_brightness( get_theme_mod('header_background_color', $header_background_color ), -20) .';
    }
    .site-description {
        color:'. get_theme_mod( 'header_text_color', $header_text_color ) .';
    }
    .header-nav ul li a,
    .site-title a,
    .menu-toggle {
        color:'. get_theme_mod('header_link_normal', $header_link_normal ) .';
    }
    .header-nav {
        background:'. igthemes_color_brightness( get_theme_mod('header_background_color', $header_background_color ), -10) .';
    }
    .menu-toggle:hover,
    .header-nav ul li a:hover {
        color:'. get_theme_mod('header_link_hover', $header_link_hover ) .';
    }
    .main-navigation {
        border-top: 1px solid '. igthemes_color_brightness( get_theme_mod('header_background_color', $header_background_color ), -20) .';
        background: '. igthemes_color_brightness( get_theme_mod('header_background_color', $header_background_color ), 5) .';        
    }
    .main-navigation a {
        color:'. get_theme_mod( 'header_link_normal', $header_link_normal ) .';
    }
    .main-navigation a:hover {
        color:'. get_theme_mod( 'header_link_hover', $header_link_hover ) .';
    }
    .main-navigation ul ul {
       background: '. get_theme_mod('header_background_color', $header_background_color ) .';      
    }
    .main-navigation ul li:hover > a {
        color: '. get_theme_mod( 'header_link_hover', $header_link_hover ) .';
    }
    .site-footer {
        border-top: 1px solid '. igthemes_color_brightness( get_theme_mod('footer_background_color', $footer_background_color ), -20) .';
        background:'. get_theme_mod('footer_background_color', $footer_background_color) .';
        color:'. get_theme_mod('footer_text_color', $footer_text_color) .';
    }
    .site-footer a {
        color:'. get_theme_mod('footer_link_normal', $footer_link_normal) .';
    }
    .site-footer a:hover,
    .site-footer a:focus {
        color:'. get_theme_mod('footer_link_hover', $footer_link_hover) .';
    }
    .site-footer h1,
    .site-footer h2,
    .site-footer h3,
    .site-footer h4,
    .site-footer h5,
    .site-footer h6 {
        color:'. get_theme_mod('footer_headings_color', $footer_headings_color) .';
    }
    .site-content {
        color: '. get_theme_mod('body_text_color', $body_text_color) .';
    }
    .site-content a {
        color: '. get_theme_mod('body_link_normal', $body_link_normal) .';
    }
    .site-content a:hover,
    .site-content a:focus,
    .archive .entry-title a:hover {
        color: '. get_theme_mod('body_link_hover', $body_link_hover) .';
    }
    .site-content h1,
    .site-content h2,
    .site-content h3,
    .site-content h4,
    .site-content h5,
    .site-content h6,
    .archive .entry-title a {
        color: '. get_theme_mod('body_headings_color', $body_headings_color) .';
    }
    .site .button,
    .site input[type="button"],
    .site input[type="reset"],
    .site input[type="submit"] {
        border-color: '. get_theme_mod('button_background_normal', $button_background_normal) .';
        background-color: '. get_theme_mod('button_background_normal', $button_background_normal) .';
        color: '. get_theme_mod('button_text_normal', $button_text_normal) .';
    }
    .site .button:hover,
    .site input[type="button"]:hover,
    .site input[type="reset"]:hover,
    .site input[type="submit"]:hover,
    .site input[type="button"]:focus,
    .site input[type="reset"]:focus,
    .site input[type="submit"]:focus {
        border-color: '. get_theme_mod('button_background_hover', $button_background_hover) .';
        background-color: '. get_theme_mod('button_background_hover', $button_background_hover) .';
        color: '. get_theme_mod('button_text_hover', $button_text_hover) .';
    }
    ';
   wp_add_inline_style( 'custom-style', $style );
}