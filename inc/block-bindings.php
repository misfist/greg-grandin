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
 * Registers the post format block binding source.
 *
 * @since Greg Grandin 1.0
 *
 * @return void
 */
function register_block_bindings() {
	register_block_bindings_source(
		'greg-grandin/publication-date',
		array(
			'label'              => _x( 'Publication Date', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\publication_date_binding',
			'uses_context'       => array( 'postId' ),
		)
	);

	register_block_bindings_source(
		'greg-grandin/publication-date-full',
		array(
			'label'              => _x( 'Publication Date (Long Format)', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\publication_date_full_binding',
			'uses_context'       => array( 'postId' ),
		)
	);

	register_block_bindings_source(
		'greg-grandin/publication',
		array(
			'label'              => _x( 'Publication', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\publication_binding',
			'uses_context'       => array( 'postId' ),
		)
	);

	register_block_bindings_source(
		'greg-grandin/copyright',
		array(
			'label'              => _x( 'Copyright', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\copyright_binding',
			'uses_context'       => array( 'postId' ),
		)
	);

	register_block_bindings_source(
		'greg-grandin/subtitle',
		array(
			'label'              => _x( 'Subtitle', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\subtitle_binding',
			'uses_context'       => array( 'postId' ),
		)
	);

	register_block_bindings_source(
		'greg-grandin/full-title',
		array(
			'label'              => _x( 'Full Title', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\full_title_binding',
			'uses_context'       => array( 'postId' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_bindings' );

/**
 * Binding for linked subtitle.
 *
 * @param array            $source_args
 * @param object \WP_Block $block_instance
 * @return string
 */
function subtitle_binding( array $source_args, \WP_Block $block_instance ): string {
	$post_id = $block_instance->context['postId'] ?? 0;
	if ( ! empty( $post_id ) && isset( $source_args['key'] ) ) {
		$subtitle = get_post_meta( $post_id, $source_args['key'], true );
		if ( $subtitle ) {
			return sprintf( '<a href="%s" data-type="book" data-id="%d" rel="bookmark">%s</a>', get_the_permalink( $post_id ), $post_id, esc_html( $subtitle ) );
		}
	}
	return '';
}

/**
 * Binding for linked subtitle.
 *
 * @param array            $source_args
 * @param object \WP_Block $block_instance
 * @return string
 */
function full_title_binding( array $source_args, \WP_Block $block_instance ): string {
	$post_id = $block_instance->context['postId'] ?? get_the_ID();
	$title   = get_the_title( $post_id );
	if ( ! empty( $post_id ) ) {
		$subtitle = get_post_meta( $post_id, 'subtitle', true );
		if ( $subtitle ) {
			$title = sprintf( '<a href="%s" data-type="book" data-id="%d" rel="bookmark">%s<span class="separator">:</span> %s</a>', get_the_permalink( $post_id ), $post_id, $title, esc_html( $subtitle ) );
		}
	}
	return $title;
}

/**
 * Binding for publication_date.
 *
 * @return string
 */
function publication_date_binding( array $source_args, $block_instance ): string {
	$post_id = $block_instance->context['postId'];
	if ( $publication_date ) {
		$format = get_option( 'date_format' );
		return date( $format, strtotime( $publication_date ) );
	}
	return get_the_date();
}

/**
 * Binding for publication_date.
 *
 * @return string
 */
function publication_date_full_binding( array $source_args, $block_instance ): string {
	$post_id = $block_instance->context['postId'];
	$publication_date = get_post_meta( $post_id, 'publication_date', true );
	if ( $publication_date ) {
		$format = 'F j, Y';
		return date( $format, strtotime( $publication_date ) );
	}
	return get_the_date();
}

/**
 * Binding for publication.
 *
 * @return string
 */
function publication_binding( array $source_args, $block_instance ): string {
	$post_id = $block_instance->context['postId'];
	if ( isset( $source_args['key'] ) ) {
		$publication = get_post_meta( $post_id, $source_args['key'], true );
		if ( $publication ) {
			return sprintf( '<em>%s</em>', sanitize_text_field( $publication ) );
		}
	}
	return '';
}

/**
 * Binding for copyright info.
 *
 * @return string
 */
function copyright_binding(): string {
	return sprintf( '&copy; %s', date( 'Y' ) );
}

