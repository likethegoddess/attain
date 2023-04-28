<?php
/**
 * Afsey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Afsey
 * @since 1.0.0
 */

define( 'AFSEY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function afsey_styles() {
	wp_enqueue_style(
		'afsey-style',
		get_stylesheet_uri(),
		[],
		AFSEY_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'afsey_styles' );
