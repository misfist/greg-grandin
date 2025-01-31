<?php
/**
 * Custom functions for Greg Grandin theme.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;

/**
 * Get the subtitle as a link
 *
 * @return string
 */
function get_subtitle(): string {
	global $post;
	$post_id  = get_the_ID();
	$subtitle = get_post_meta( $post_id, 'subtitle', true );
	if ( $subtitle ) {
		return sprintf( '<a href="%s" data-type="book" data-id="%d" rel="bookmark">%s</a>', get_the_permalink( $post_id ), $post_id, esc_html( $subtitle ) );
	}
	return '';
}

/**
 * Render the subtitle as a link.
 *
 * @return void
 */
function render_subtitle() {
	$subtitle = get_subtitle();
	if ( $subtitle ) {
		echo $subtitle;
	}
}
