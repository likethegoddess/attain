<?php
/**
 * Attain functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package attain
 * @since 1.0.0
 */

define( 'ATTAIN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function attain_styles() {
	wp_enqueue_style(
		'attain-style',
		get_stylesheet_uri(),
		[],
		ATTAIN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'attain_styles' );
