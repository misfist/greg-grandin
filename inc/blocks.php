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
	if ( isset( $source_args['key'] ) ) {
		$publication_date = get_post_meta( $post_id, $source_args['key'], true );
		if ( $publication_date ) {
			$format = get_option( 'date_format' );
			return date( $format, strtotime( $publication_date ) );
		}
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
 * Display book buttons
 *
 * @return void
 */
function display_book_buttons() {
	global $post;

	$blocks = parse_blocks( $post->post_content );

	foreach ( $blocks as $block ) {

		if ( 'core/buttons' === $block['blockName'] ) {

			echo apply_filters( 'the_content', render_block( $block ) );

			break;

		}
	}
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
	$banner = array(
		'core/group',
		array(
			'metadata'  => array(
				'categories' => array(
					0 => 'banner',
				),
				'name'       => 'About the Book',
			),
			'align'     => 'full',
			'className' => 'is-style-section-1',
			'style'     => array(
				'spacing' => array(
					'padding' => array(
						'top'    => 'var:preset|spacing|50',
						'right'  => 'var:preset|spacing|50',
						'bottom' => 'var:preset|spacing|50',
						'left'   => 'var:preset|spacing|50',
					),
					'margin'  => array(
						'top'    => '0',
						'bottom' => '0',
					),
				),
			),
			'layout'    => array(
				'type' => 'default',
			),
		),
		array(
			array(
				'core/group',
				array(
					'align'     => 'full',
					'className' => 'is-style-section-1',
					'layout'    =>
					array(
						'type' => 'constrained',
					),
				),
				array(
					array(
						'core/columns',
						array(
							'verticalAlignment' => 'top',
							'align'             => 'wide',
						),
						array(
							array(
								'core/column',
								array(
									'verticalAlignment' => 'top',
									'width'             => '55%',
								),
								array(
									array(
										'core/group',
										array(
											'style'  => array(
												'dimensions' => array(
													'minHeight' => '100%',
												),
											),
											'layout' => array(
												'type'     => 'flex',
												'orientation' => 'vertical',
												'justifyContent' => 'left',
												'flexWrap' => 'nowrap',
												'verticalAlignment' => 'top',
											),
										),
										array(
											array(
												'core/group',
												array(
													'style' => array(
														'spacing' => array(
															'blockGap' => 'var:preset|spacing|30',
														),
													),
													'layout' => array(
														'type' => 'constrained',
													),
												),
												array(
													array(
														'core/heading',
														array(
															'metadata' => array(
																'name' => 'Heading',
																'bindings' => array(
																	'__default' => array(
																		'source' => 'core/pattern-overrides',
																	),
																),
															),
															'align' => 'wide',
															'style' =>
															array(
																'typography' => array(
																	'textTransform' => 'uppercase',
																	'fontStyle' => 'normal',
																	'fontWeight' => '700',
																	'letterSpacing' => '1.4px',
																),
															),
															'fontSize' => 'small',
														),
													),
													array(
														'core/post-title',
														array(
															'isLink' => false,
															'fontSize' => 'xx-large',
															'placeholder' => __( 'Add Book Title...', 'greg-grandin' ),
														),
													),
													array(
														'site-functionality/subtitle',
														array(
															'className' => 'is-subtitle-style',
														),
													),
													array(
														'core/post-excerpt',
														array(),
													),
												),
											),
										),
									),
									array(
										'core/group',
										array(
											'layout' =>
											array(
												'type' => 'flex',
												'orientation' => 'vertical',
												'justifyContent' => 'stretch',
											),
										),
										array(
											array(
												'core/spacer',
												array(
													'style' => array(
														'layout' => array(
															'selfStretch' => 'fit',
															'flexSize' => null,
														),
														'spacing' => array(
															'margin' => array(
																'top' => 'var:preset|spacing|20',
																'bottom' => 'var:preset|spacing|20',
															),
														),
													),
												),
											),
											array(
												'site-functionality/buy-buttons',
												array(),
												array(
													array(
														'core/buttons',
														array(
															'className' => 'buy-buttons',
															'layout' => array(
																'type' => 'flex',
																'justifyContent' => 'center',
																'flexWrap' => 'wrap',
																'orientation' => 'horizontal',
															),
														),
														array(
															array(
																'core/button',
																array(
																	'className' => 'buy-button',
																	'placeholder' => 'Add Button...',
																),
															),
															array(
																'core/button',
																array(
																	'className' => 'buy-button',
																	'placeholder' => 'Add Button...',
																),
															),
															array(
																'core/button',
																array(
																	'className' => 'buy-button',
																	'placeholder' => 'Add Button...',
																),
															),
															array(
																'core/button',
																array(
																	'className' => 'buy-button',
																	'placeholder' => 'Add Button...',
																),
															),
														),
													),
												),
											),
											array(
												'core/spacer',
												array(
													'style' => array(
														'layout' => array(
															'selfStretch' => 'fit',
															'flexSize' => null,
														),
														'spacing' => array(
															'margin' => array(
																'top' => 'var:preset|spacing|20',
																'bottom' => 'var:preset|spacing|20',
															),
														),
													),
												),
											),
										),
									),
								),
							),
							array(
								'core/column',
								array(
									'verticalAlignment' => 'top',
									'width'             => '45%',
								),
								array(
									array(
										'core/post-featured-image',
										array(
											'isLink'      => false,
											'aspectRatio' => '2/3',
											'style'       =>
											array(
												'shadow' => 'var:preset|shadow|natural',
											),
										),
									),
									array(
										'core/group',
										array(
											'layout' =>
											array(
												'type'     => 'flex',
												'flexWrap' => 'nowrap',
												'justifyContent' => 'center',
											),
										),
										array(
											array(
												'site-functionality/publisher',
												array(
													'style' => array(
														'elements' => array(
															'link' => array(
																'color' => array(
																	'text' => 'var:preset|color|accent-4',
																),
															),
														),
													),
													'textColor' => 'accent-4',
													'fontSize' => 'small',
												),
											),
											array(
												'site-functionality/publication-date',
												array(
													'style' => array(
														'elements' => array(
															'link' => array(
																'color' => array(
																	'text' => 'var:preset|color|accent-4',
																),
															),
														),
													),
													'textColor' => 'accent-4',
													'fontSize' => 'small',
												),
											),
										),
									),
								),
							),
						),
					),
				),

			),
		),
	);

	$template         = array(
		$banner,
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
	// $args['template_lock'] = 'contentOnly';
	return $args;
}
add_action( 'register_book_post_type_args', __NAMESPACE__ . '\register_template' );
