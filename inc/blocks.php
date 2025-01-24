<?php
/**
 * Block functions for Greg Grandin theme.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;

/**
 * Registers custom block styles.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function block_styles() {
	register_block_style(
		'core/list',
		array(
			'name'         => 'checkmark-list',
			'label'        => __( 'Checkmark', 'greg-grandin' ),
			'inline_style' => '
			ul.is-style-checkmark-list {
				list-style-type: "\2713";
			}

			ul.is-style-checkmark-list li {
				padding-inline-start: 1ch;
			}',
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\block_styles' );

/**
 * Registers pattern categories.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function pattern_categories() {

	register_block_pattern_category(
		'page',
		array(
			'label'       => __( 'Pages', 'greg-grandin' ),
			'description' => __( 'A collection of full page layouts.', 'greg-grandin' ),
		)
	);

	register_block_pattern_category(
		'post-format',
		array(
			'label'       => __( 'Post formats', 'greg-grandin' ),
			'description' => __( 'A collection of post format patterns.', 'greg-grandin' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories' );

/**
 * Registers the post format block binding source.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function register_block_bindings() {
	register_block_bindings_source(
		'greg-grandin/format',
		array(
			'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => 'format_binding',
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_bindings' );

/**
 * Callback function for the post format name block binding source.
 *
 * @since Greg Grandin 1.0
 *
 * @return string|void Post format name, or nothing if the format is 'standard'.
 */
function format_binding() {
	$post_format_slug = get_post_format();

	if ( $post_format_slug && 'standard' !== $post_format_slug ) {
		return get_post_format_string( $post_format_slug );
	}
}
