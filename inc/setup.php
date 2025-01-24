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
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\post_format_setup' );
