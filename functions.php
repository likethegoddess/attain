<?php
/**
 * Attain functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package attain
 * @since 1.0.0
 */

if ( ! function_exists( 'attain_styles' ) ) :

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

endif;

add_action( 'wp_enqueue_scripts', 'attain_styles' );

if ( ! function_exists( 'attain_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.1.5
	 *
	 * @return void
	 */

	function attain_support() {

		// Add wide and full width block support 
		add_theme_support( 'align-wide' );

		// Replace the default [...] excerpt more with an elipsis.
		add_filter(
			'excerpt_more',
			function( $more ) {
				return '&hellip;';
			}
		);

	}

endif;

add_action( 'after_setup_theme', 'attain_support' );
