<?php
    function load_stylesheet(){
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('custom_css', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('custom_css');
    }
    add_action('wp_enqueue_scripts','load_stylesheet');

    function include_jquery(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', '', 1, true);
        add_action('wp_enqueue_scripts', 'jquery');
    }
    add_action('wp_enqueue_scripts', 'include_jquery');

    function load_js(){
        wp_register_script('custom_js', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
        wp_enqueue_script('custom_js');
    }
    add_action('wp_enqueue_scripts', 'load_js');

    add_theme_support('menus');

    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme')
        )
    );

    add_theme_support('post-thumbnails');

    add_image_size('smallest', 300, 300, true);
    add_image_size('largest', 800, 800, true);