<?php

function tf_enqueue(){
  $uri    =   get_theme_file_uri();
  $ver    =   TF_DEV_MODE ? time() : false;

  wp_register_style( 'tf_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver );
  wp_register_style( 'tf_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
  wp_register_style( 'tf_style', $uri . '/assets/css/style.css', [], $ver );
  wp_register_style( 'tf_dark', $uri . '/assets/css/dark.css', [], $ver );
  wp_register_style( 'tf_font_icons', $uri . '/assets/css/font-icons.css', [], $ver );
  wp_register_style( 'tf_animate', $uri . '/assets/css/animate.css', [], $ver );
  wp_register_style( 'tf_magnific_popup', $uri . '/assets/css/magnific-popup.css', [], $ver );
  wp_register_style( 'tf_responsive', $uri . '/assets/css/responsive.css', [], $ver );
  wp_register_style( 'tf_custom', $uri . '/assets/css/custom.css', [], $ver );

  wp_enqueue_style( 'tf_google_fonts' );
  wp_enqueue_style( 'tf_bootstrap' );
  wp_enqueue_style( 'tf_style' );
  wp_enqueue_style( 'tf_dark' );
  wp_enqueue_style( 'tf_font_icons' );
  wp_enqueue_style( 'tf_animate' );
  wp_enqueue_style( 'tf_magnific_popup' );
  wp_enqueue_style( 'tf_responsive' );
  wp_enqueue_style( 'tf_custom' );

  wp_register_script( 'tf_plugins', $uri . '/assets/js/plugins.js', [], $ver, true );
  wp_register_script( 'tf_functions', $uri . '/assets/js/functions.js', [], $ver, true );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'tf_plugins' );
  wp_enqueue_script( 'tf_functions' );
}
