<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title();?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/material-kit.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php wp_head(); ?>
    <style>
        .banner-img {
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/images/banner.jpeg');?>) no-repeat center center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-default navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">My Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse justify-content-end',
                        'container_id'      => 'bs-example-navbar-collapse-1 collapsibleNavbar',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
            </div>
        </nav>
    </header>
   