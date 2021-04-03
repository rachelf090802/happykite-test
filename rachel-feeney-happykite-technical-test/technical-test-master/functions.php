<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hpy
 */
define( 'THEME_URL', get_stylesheet_directory_uri() );
define( 'THEME_PATH', get_template_directory() . '/' );
define( 'IMAGES', THEME_URL .'/assets/img/' );

function hpy_scripts() {
    wp_enqueue_style( 'hpy-style', get_stylesheet_uri(), array(), filemtime(THEME_PATH . 'style.css') );
    wp_enqueue_style( 'hpy-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700', array(), '21052015' );
}
add_action( 'wp_enqueue_scripts', 'hpy_scripts' );