<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bogidope
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="oAYduBr--WJQmRI1CcAhKt41X4xDmqGouDkBj1irRHM" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/light.css" integrity="sha384-0WqtEOayxoyo7wgxUc5l2RvIbaWTyny0LrJbwsKhrKXUyopxvaNFLIoob4dXRwLO" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/fontawesome.css" integrity="sha384-fqilzf6i0kkOYm+DT4UC9pWzYf4/eFdJKroY1jZyE7n8eYLujyYM9VCucGf/LdVD" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body cl <?php body_class(); ?>>
<div id="page-top" class="site">
<nav class="navbar navbar-expand-lg bg-transparent" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">
            <img class="text-left logo" src="<?php bloginfo('template_directory'); ?>/images/bogidope-logo-white.svg" />
            <div class="site-slogan">Targeted Aviation Career Consulting</div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white fal fa-bars"></span>
        </button>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
</nav>

    
