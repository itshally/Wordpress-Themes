<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="#"><?php bloginfo('name'); ?></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>
    </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between blog-nav">
      <!-- <a class="p-2 text-muted" href="#">World</a> -->
      <?php
        wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'false',
          'menu_class'        => 'nav nav-list',
          'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
          'walker'			=> new wp_bootstrap_navlist_walker())
        );
      ?>
    </nav>
  </div>
</div>