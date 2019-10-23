<?php

// Setup
// REMEMBER TO SET DEV MODE TO FALSE
define( 'JU_DEV_MODE', true ); //Defines whether in development mode to refresh the cache on stylesheets

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );

// Shortcodes
