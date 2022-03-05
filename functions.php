<?php

/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */

define('BASE_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function enqueue_base_theme_styles() {
	wp_enqueue_style( 'base-theme-custom-style', get_stylesheet_directory_uri() . '/dist/css/app.css', BASE_THEME_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_base_theme_styles' );

function enqueue_base_theme_scripts() {
	wp_enqueue_script( 'base-theme-custom-script', get_stylesheet_directory_uri() . '/dist/js/app.js', [ 'jquery', 'slick-js' ], BASE_THEME_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_base_theme_scripts' );

function enqueue_third_party_styles() {
	// slick
	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/src/third-party/css/slick.css', false, 'all' );
	wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/src/third-party/css/slick-theme.css', 'slick-css', false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_third_party_styles' );

function enqueue_third_party_scripts() {
	// slick
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/src/third-party/js/slick.js', 'jquery', false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_third_party_scripts' );


