<?php
/**
 * Greg Grandin functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;


/**
 * Get all the include files for the theme.
 * 
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function include_inc_files(): void {
	$files = array(
		'inc/',
	);

	foreach ( $files as $include ) {
		$include = trailingslashit( get_template_directory() ) . $include;

		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				include $file;
			}
		} else {
			include $include;
		}
	}
}

include_inc_files();