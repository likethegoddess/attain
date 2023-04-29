<?php
/**
 * Afset functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package afset
 * @since 1.0.0
 */

define( 'AFSET_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function afset_styles() {
	wp_enqueue_style(
		'afset-style',
		get_stylesheet_uri(),
		[],
		AFSET_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'afset_styles' );
