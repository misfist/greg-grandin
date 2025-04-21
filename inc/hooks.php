<?php
/**
 * Custom hook functions for Greg Grandin theme.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

namespace Greg_Grandin;

/**
 * Adds custom classes to the array of body classes.
 *
 * @author WebDevStudios
 *
 * @param array $classes Classes for the body element.
 *
 * @return array Body classes.
 */
function body_classes( $classes ) {
	// Allows for incorrect snake case like is_IE to be used without throwing errors.
	global $is_IE, $is_edge, $is_safari;

	if ( $is_IE ) {
		$classes[] = 'ie';
	}

	if ( $is_edge ) {
		$classes[] = 'edge';
	}

	if ( $is_safari ) {
		$classes[] = 'safari';
	}

	if ( wp_is_mobile() ) {
		$classes[] = 'mobile';
	}

	if ( is_singular() ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;

		if ( is_front_page() ) {
			$classes[] = 'is-front-page';
		}

		if ( has_post_thumbnail( $post ) ) {
			$classes[] = 'has-featured-image';
		} else {
			$classes[] = 'has-no-featured-image';
		}
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'single-' . get_post_type();
	}

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	$classes[] = 'no-js';

	return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\body_classes' );

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
