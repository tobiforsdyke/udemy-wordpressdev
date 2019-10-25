<?php

// Setup
// REMEMBER TO SET DEV MODE TO FALSE
define( 'TF_DEV_MODE', true ); //Defines whether in development mode to refresh the cache on stylesheets

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'tf_enqueue' );
add_action( 'after_theme_setup', 'tf_setup_theme' );

// Shortcodes
