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
 * Get book quotes
 *
 * @return string
 */
function get_blockquotes( $post_id = null, $number = 2 ): ?string {
	global $post;
	$post_id    = ( $post_id ) ? $post_id : $post->ID;
	$block_name = 'core/quote';

	if ( ! has_block( $block_name, $post_id ) ) {
		return null;
	}

	$blocks = parse_blocks( $post->post_content );
	$max    = $number;
	$count  = 0;

	$output = '';

	foreach ( $blocks as $block ) {
		if ( $block_name === $block['blockName'] ) {
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
function render_blockquotes( $post_id = null, $number = 2 ) {
	global $post;
	$post_id = ( $post_id ) ? $post_id : $post->ID;

	echo get_blockquotes( $post_id, $number );
}

/**
 * Get book quotes
 *
 * @return string
 */
function get_book_buttons( $post_id = null ): ?string {
	global $post;
	$post_id    = ( $post_id ) ? $post_id : get_the_ID();
	$post = get_post( $post_id );

	$block_name = 'site-functionality/buy-buttons';

	if ( ! has_block( $block_name, $post_id ) ) {
		return null;
	}

	$blocks = parse_blocks( $post->post_content );


	$output = '';

	foreach ( $blocks as $block ) {
		if ( $block_name === $block['blockName'] ) {
			$output .= render_block( $block );
		}
	}
	return $output;
}


/**
 * Display book buttons
 *
 * @return void
 */
function display_book_buttons( $post_id = null ): void {
	global $post;
	$post_id = ( $post_id ) ? $post_id : $post->ID;

	echo get_book_buttons( $post_id, $number );
}

/**
 * Get the Latest Book ID
 *
 * @return integer|null
 */
function get_latest_book_id() : ?int {
	$args = array(
		'post_type'      => 'book',
		'posts_per_page' => 1,
		'orderby'        => 'menu_order',
		'order'          => 'asc',
		'fields' => 'ids',
	);
	$posts = get_posts( $args );
	if( ! empty( $posts ) && ! is_wp_error( $posts ) ) {
		return $posts[0];
	}
	return null;
}
