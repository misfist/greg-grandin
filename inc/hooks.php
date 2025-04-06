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
 * Remove blocks from post-content blocks.
 */
function remove_book_blocks( $block_content, $block ) {
	if ( is_singular( 'book' ) && 'core/post-content' === $block['blockName'] ) {

		$block_types = array(
			'core/post-excerpt',
			'site-functionality/buy-buttons',
			'site-functionality/publication-date',
			'site-functionality/publisher',
			'site-functionality/subtitle',
		);

		$post = get_post();
		if ( ! $post || empty( $post->post_content ) ) {
			return $block_content;
		}

		$blocks           = parse_blocks( $post->post_content );
		$filtered_content = '';

		foreach ( $blocks as $block ) {
			if ( in_array( $block['blockName'], $block_types, true ) ) {
				continue;
			}
			$filtered_content .= render_block( $block );
		}

		return $filtered_content;

	}
	return $block_content;
}
// add_filter( 'get_the_content', __NAMESPACE__ . '\remove_book_blocks', 11 );
// add_filter( 'render_block', __NAMESPACE__ . '\remove_book_blocks', 10, 2 );
add_filter( 'render_block_core/post-content', __NAMESPACE__ . '\remove_book_blocks', 10, 2 );

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