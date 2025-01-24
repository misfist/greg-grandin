<?php
/**
 * Script functions for Greg Grandin theme.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;

/**
 * Enqueues editor-style.css in the editors.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function editor_style() {
	add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\editor_style' );

/**
 * Enqueues style.css on the front.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function enqueue_styles() {
	wp_enqueue_style(
		'greg-grandin-style',
		get_parent_theme_file_uri( 'style.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_styles' );
