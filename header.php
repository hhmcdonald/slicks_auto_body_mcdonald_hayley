<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <div class="topBar"></div>
    <div class="container">  <!-- BEGIN CONTAINER DIV -->
        <header class="row">
            <div class="three columns">
                <div>
                    <img src="http://www.hayleymacdesigns.com/slicksautobody/wp-content/uploads/2016/08/logo-e1470078609667.png" alt="logo" />
                </div>
            </div>
            <div class="nine columns">
                <?php wp_nav_menu( array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                    ));?>
            </div>
        </header>
