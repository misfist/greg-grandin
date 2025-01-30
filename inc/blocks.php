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
		'greg-grandin/publication-date',
		array(
			'label'              => _x( 'Publication Date', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\publication_date_binding',
		)
	);

	register_block_bindings_source(
		'greg-grandin/copyright',
		array(
			'label'              => _x( 'Copyright', 'Label for the block binding placeholder in the editor', 'greg-grandin' ),
			'get_value_callback' => __NAMESPACE__ . '\copyright_binding',
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_bindings' );

/**
 * Binding for publication_date.
 *
 * @return string
 */
function publication_date_binding(): string {
	$publication_date = get_post_meta( get_the_ID(), 'publication_date', true );
	if ( $publication_date ) {
		$format = get_option( 'date_format' );
		return date( $format, strtotime( $publication_date ) );
	}
	return get_the_date();
}

/**
 * Binding for copyright info.
 *
 * @return string
 */
function copyright_binding(): string {
	return sprintf( '&copy; %s', date( 'Y' ) );
}
/**
 * Register block template for book post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/register_post_type_post_type_args/
 *
 * @param  array  $args
 * @param  string $post_type
 * @return array $args
 */
function register_template( array $args ): array {
	$template = array(
		array(
			'core/paragraph',
			array(
				'placeholder' => __( 'Add subtitle...', 'greg-grandin' ),
				'className'   => 'is-style-subtitle',
				'metadata'    => array(
					'bindings' => array(
						'content' => array(
							'source' => 'core/post-meta',
							'args'   => array( 'key' => 'subtitle' ),
						),
					),
				),
			),
		),
		array(
			'core/group',
			array(
				'metadata'  => array( 'name' => 'Book Metadata' ),
				'className' => 'is-style-section-1',
				'layout'    => array( 'type' => 'default' ),
			),
			array(
				array(
					'core/paragraph',
					array(
						'placeholder' => __( 'Add publication date...', 'greg-grandin' ),
						'className'   => 'is-style-postmeta',
						'metadata'    => array(
							'name'     => __( 'Publication Date', 'greg-grandin' ),
							'bindings' => array(
								'content' => array(
									'source' => 'greg-grandin/publication-date',
								),
							),
						),
						'fontSize'    => 'small',
					),
				),
				array(
					'core/paragraph',
					array(
						'placeholder' => __( 'Add publisher...', 'greg-grandin' ),
						'className'   => 'is-style-postmeta',
						'metadata'    => array(
							'name'     => __( 'Publisher', 'greg-grandin' ),
							'bindings' => array(
								'content' => array(
									'source' => 'core/post-meta',
									'args'   => array( 'key' => 'publisher' ),
								),
							),
						),
						'fontSize'    => 'small',
					),
				),
				array(
					'core/paragraph',
					array(
						'placeholder' => __( 'Add ISBN...', 'greg-grandin' ),
						'className'   => 'is-style-postmeta',
						'metadata'    => array(
							'name'     => __( 'ISBN', 'greg-grandin' ),
							'bindings' => array(
								'content' => array(
									'source' => 'core/post-meta',
									'args'   => array( 'key' => 'isbn' ),
								),
							),
						),
						'fontSize'    => 'small',
					),
				),

			),
		),
		array(
			'core/buttons',
			array(
				'className' => 'is-style-buy-buttons',
				'metadata'  => array(
					'name' => __( 'Buy Buttons', 'greg-grandin' ),
				),
			),
			array(
				array(
					'core/button',
					array(
						'placeholder' => __( 'Add buy button text and URL...', 'greg-grandin' ),
						'className'   => 'is-style-button-text',
						'text'        => esc_html__( 'Buy', 'greg-grandin' ),
						'url'         => '',
					),
				),
				array(
					'core/button',
					array(
						'placeholder' => __( 'Add buy button text and URL...', 'greg-grandin' ),
						'className'   => 'is-style-button-text',
						'text'        => esc_html__( 'Buy', 'greg-grandin' ),
						'url'         => '',
					),
				),
			),
		),
		array(
			'core/separator',
			array(),
			array(),
		),
		array(
			'core/paragraph',
			array(
				'placeholder' => __( 'Add description...', 'greg-grandin' ),
			),
		),
		array(
			'core/separator',
			array(),
			array(),
		),
		array(
			'core/heading',
			array(
				'content'   => __( 'Reviews', 'greg-grandin' ),
				'className' => 'is-style-text-subtitle',
				'level'     => 2,
			),
			array(),
		),
		array(
			'core/quote',
			array(
				'placeholder' => __( 'Add reviews...', 'greg-grandin' ),
			),
			array(
				array(
					'core/paragraph',
					array(
						'placeholder' => __( 'Add review text and citation...', 'greg-grandin' ),
					),
				),
			),
		),
	);
	$args['template'] = $template;
	return $args;
}
add_action( 'register_book_post_type_args', __NAMESPACE__ . '\register_template' );
