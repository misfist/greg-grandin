<?php
/**
 * Set up functions for Greg Grandin theme.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;

/**
 * Adds theme support for post formats.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function post_format_setup() {
	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'image', 'link', 'quote', 'video' ) );

	update_option( 'thumbnail_size_w', 150 );
	update_option( 'thumbnail_size_h', 225 );
	update_option( 'thumbnail_crop', 1 );

	update_option( 'medium_size_w', 400 );
	update_option( 'medium_size_h', 600 );
	update_option( 'medium_crop', 1 );

	update_option( 'medium_large_size_w', 500 );
	update_option( 'medium_large_size_h', 750 );
	update_option( 'medium_large_crop', 1 );

	update_option( 'large_size_w', 600 );
	update_option( 'large_size_h', 900 );
	update_option( 'large_crop', 1 );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\post_format_setup' );
