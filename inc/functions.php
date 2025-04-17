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

/**
 * Display blockquote from post
 *
 * @link https://www.billerickson.net/access-gutenberg-block-data/
 */

 /**
 * Get book quotes
 *
 * @return void
 */
function get_blockquotes( $post_id = null ) {
	global $post;
	$post_id = ( $post_id ) ? $post_id : $post->ID;
	$block_name = 'core/quote';

	if( ! has_block( $block_name, $post_id ) ) {
		return;
	}
	
	$blocks = parse_blocks( $post->post_content );
	$max    = 2;
	$count  = 0;

	$output = '';

	foreach ( $blocks as $block ) {
		if ( 'core/quote' === $block['blockName'] ) {
			if ( $max < $count ) {
				break;
			}
			// error_log( $block['blockName'] . '' . $count );
			$output .= render_block( $block );
			++$count;
		}
	}
	return $output;
}


/**
 * Display book quotes
 *
 * @return void
 */
function render_blockquotes( $post_id = null ) {
	global $post;
	$post_id = ( $post_id ) ? $post_id : $post->ID;

	echo get_blockquotes( $post_id );
	// $block_name = 'core/quote';

	// if( ! has_block( $block_name, $post_id ) ) {
	// 	return;
	// }
	
	// $blocks = parse_blocks( $post->post_content );
	// $max    = 2;
	// $count  = 0;

	// foreach ( $blocks as $block ) {
	// 	if ( 'core/quote' === $block['blockName'] ) {
	// 		if ( $max < $count ) {
	// 			break;
	// 		}
	// 		// error_log( $block['blockName'] . '' . $count );
	// 		echo render_block( $block );
	// 		++$count;
	// 	}
	// }
	// // return;
}
