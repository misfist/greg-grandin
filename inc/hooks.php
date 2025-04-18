<?php
/**
 * Custom hook functions for Greg Grandin theme.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;

function append_subtitle( $title, $post_id ): string {
	$title = (string) $title;
	if ( 'book' === get_post_type( $post_id ) && ! is_admin() ) {
		$subtitle = get_post_meta( $post_id, 'subtitle', true );
		if ( $subtitle ) {
			$title = sprintf( '%s <span class="separator">-</span> %s', $title, esc_html( $subtitle ) );
		}
	}
	return $title;
}
// add_filter( 'the_title', __NAMESPACE__ . '\append_subtitle', 10, 2 );

/**
 * Only display manual post excerpt.
 *
 * @param string          $excerpt
 * @param object \WP_Post $post
 * @return string|null
 */
function post_excerpt( $excerpt, \WP_Post $post ): ?string {
	if ( 'book' === get_post_type( $post->ID ) ) {
		return $post->post_excerpt;
	}
	return $excerpt;
}
// add_filter( 'the_excerpt', __NAMESPACE__ . '\post_excerpt' );
add_filter( 'get_the_excerpt', __NAMESPACE__ . '\post_excerpt', 10, 2 );
