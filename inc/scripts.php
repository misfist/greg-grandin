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
function enqueue_styles(): void {
	$asset_file_path = get_template_directory() . '/build/style.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => \wp_get_theme()->get( 'Version' ),
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	wp_enqueue_style(
		'greg-grandin',
		get_parent_theme_file_uri( 'build/style.css' ),
		$asset_file['dependencies'],
		$asset_file['version']
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_styles' );

/**
 * Load block scripts
 *
 * @return void
 */
function enqueue_scripts(): void {
	$asset_file_path = get_template_directory() . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => \wp_get_theme()->get( 'Version' ),
			'dependencies' => array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		);
	}

	wp_enqueue_script(
		'greg-grandin-js',
		get_parent_theme_file_uri( 'build/index.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_scripts' );
