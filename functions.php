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

/**
 * Add current-menu-ancestor class to all ancestor menu items
 * 
 * @param array $items The menu items
 * @param object $args The menu arguments (optional)
 * @return array Modified menu items
 */
function add_current_menu_ancestor_class($items, $args = null) {
	// Find the current menu item ID
	$current_item_id = null;
	
	foreach ($items as $item) {
		if (in_array('current-menu-item', $item->classes)) {
			$current_item_id = $item->ID;
			break;
		}
	}
	
	// If no current item found, return items unchanged
	if (!$current_item_id) {
		return $items;
	}
	
	// Find all ancestor IDs
	$ancestor_ids = array();
	foreach ($items as $item) {
		if ($item->ID == $current_item_id) {
			// Traverse up the menu hierarchy
			$parent_id = $item->menu_item_parent;
			while ($parent_id != 0) {
				$ancestor_ids[] = $parent_id;
				// Find the parent item to get its parent
				foreach ($items as $potential_parent) {
					if ($potential_parent->ID == $parent_id) {
						$parent_id = $potential_parent->menu_item_parent;
						break;
					}
				}
			}
			break;
		}
	}
	
	// Add the class to all ancestors
	foreach ($items as $item) {
		if (in_array($item->ID, $ancestor_ids)) {
			$item->classes[] = 'current-menu-ancestor';
		}
	}
	
	return $items;
}
// Hook into the nav menu filter
add_filter('wp_nav_menu_objects', 'add_current_menu_ancestor_class', 10, 2);
