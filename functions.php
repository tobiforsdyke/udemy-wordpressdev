<?php

// Setup
// REMEMBER TO SET DEV MODE TO FALSE
define( 'TF_DEV_MODE', true ); //Defines whether in development mode to refresh the cache on stylesheets

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/custom-nav-walker.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'tf_enqueue' );
add_action( 'after_setup_theme', 'tf_setup_theme' );
add_action( 'widgets_init', 'tf_widgets' );

// Shortcodes

// Test
