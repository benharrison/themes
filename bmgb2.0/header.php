<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/bmgb" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" type="image/png" href="<?php theme_url('favicon.png') ?>" />

        <link rel="stylesheet" href="<?php theme_url('css/normalize.css'); ?>">
        <link rel="stylesheet" href="<?php theme_url('css/main.css?v=1.02'); ?>">
        <link rel="stylesheet" href="<?php theme_url('css/comments.css?v=1.02'); ?>">
        
<?php 
//wp_get_archives('type=monthly&format=link');
//comments_popup_script(); // off by default
//wp_head(); 
?>
        <script src="<?php theme_url('js/modernizr.custom.js') ?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <div class="container">
            <header>
                <h1 id="logo"><a href="<?php bloginfo("url"); ?>"><strong><?php bloginfo("name"); ?></strong></a></h1>
                <img id="mobilelogo" src="<?php theme_url("images/logo.png") ?>"></img>
                <a href="/wp-admin" id="admin">admin</a>
            </header>
            
            <nav>
                <ul class="group">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/workout-journal">Workout Journal</a></li>
                    <li><a href="/category/recipes">Recipes</a></li>
                </ul>
            </nav>
        </div>

