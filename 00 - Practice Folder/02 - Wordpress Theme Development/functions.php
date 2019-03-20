<?php
    // Register Nav Wlaker class_alias
    require_once('wp_bootstrap_navlist_walker.php');

    //Theme Support
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');

        //Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    //Excerpt Length Control
    function set_excerpt_length(){
        return 50;
    }

    add_filter('excerpt_length', 'set_excerpt_length');