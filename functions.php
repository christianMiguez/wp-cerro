<?php

function add_theme_scripts() {
  
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_deregister_script('jquery');
  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.slim.min.js', array(), '3.4.1' );
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'slickstyle', get_template_directory_uri() . '/css/slick.css', array(), '1.2', 'all');
  
  }
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_image_size( 1200, 630, 'nota1' );

add_theme_support( 'sportspress' );

  
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );  