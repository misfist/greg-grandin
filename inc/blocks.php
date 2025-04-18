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
 * Register block template for book post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/register_post_type_post_type_args/
 *
 * @param  array  $args
 * @param  string $post_type
 * @return array $args
 */
function register_book_template( array $args ): array {
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
						'top'    => 'var:preset|spacing|40',
						'right'  => 'var:preset|spacing|40',
						'bottom' => 'var:preset|spacing|40',
						'left'   => 'var:preset|spacing|40',
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
	$metadata = array(
		'site-functionality/book-details',
		array(
			'className' => 'metadata',
			'lock'      => array(
				'move'   => true,
				'remove' => true,
			),
		),
		array(),
	);

	$template         = array(
		$metadata,
		array(
			'site-functionality/buy-buttons',
			array(
				'lock' => array(
					'move'   => false,
					'remove' => true,
				),
			),
			array(
				array(
					'core/buttons',
					array(
						'className' => 'buy-buttons',
						'layout'    => array(
							'type'           => 'flex',
							'justifyContent' => 'center',
							'flexWrap'       => 'wrap',
							'orientation'    => 'horizontal',
						),
					),
					array(
						array(
							'core/button',
							array(
								'className'   => 'buy-button',
								'placeholder' => 'Add Button...',
							),
						),
						array(
							'core/button',
							array(
								'className'   => 'buy-button',
								'placeholder' => 'Add Button...',
							),
						),
						array(
							'core/button',
							array(
								'className'   => 'buy-button',
								'placeholder' => 'Add Button...',
							),
						),
						array(
							'core/button',
							array(
								'className'   => 'buy-button',
								'placeholder' => 'Add Button...',
							),
						),
					),
				),
			),
		),
		array(
			'core/heading',
			array(
				'content'   => __( 'About the Book', 'greg-grandin' ),
				'className' => 'is-style-text-subtitle',
				'level'     => 2,
			),
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
	// $args['template_lock'] = 'contentOnly';
	return $args;
}
add_action( 'register_book_post_type_args', __NAMESPACE__ . '\register_book_template' );

/**
 * Register block template for book post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/register_post_type_post_type_args/
 *
 * @param  array  $args
 * @param  string $post_type
 * @return array $args
 */
function register_post_template( array $args ): array {
	$metadata = array(
		'site-functionality/post-details',
		array(
			'className' => 'metadata',
			'lock'      => array(
				'move'   => true,
				'remove' => false,
			),
		),
		array(),
	);

	$template         = array(
		$metadata,
	);
	$args['template'] = $template;
	return $args;
}
add_action( 'register_post_post_type_args', __NAMESPACE__ . '\register_post_template' );

/**
 * Modify Core Quote block markup
 * Make sure block always has 'is-style-background' class added.
 * 
 * @link https://developer.wordpress.org/reference/classes/wp_html_tag_processor/
 *
 * @param string    $block_content
 * @param array     $block
 * @param \WP_Block $instance
 * @return string|null
 */
function modify_core_quote( string $block_content, array $block, \WP_Block $instance ): ?string {
	$block_content = new \WP_HTML_Tag_Processor( $block_content );
	$block_content->next_tag();
	$block_content->add_class( 'is-style-background' );
	$block_content->add_class( 'has-accent-5-background-color' );
	$block_content->get_updated_html();

	return $block_content;
}
add_filter( 'render_block_core/quote', __NAMESPACE__ . '\modify_core_quote', null, 3 );

/**
 * Modify Core Quote block markup
 * Make sure block always has 'is-style-background' class added.
 * 
 * @link https://developer.wordpress.org/reference/classes/wp_html_tag_processor/
 *
 * @param string    $block_content
 * @param array     $block
 * @param \WP_Block $instance
 * @return string|null
 */
function modify_core_paragraph( string $block_content, array $block, \WP_Block $instance ): ?string {
	$block_content = new \WP_HTML_Tag_Processor( $block_content );
	$block_content->next_tag( array( 'class_name' => 'is-style-post-meta' ) );

	if ( $block_content->has_class( 'publication-date' ) ) {
		$label = esc_html__( 'Published', 'greg-grandin' );
		$block_content->set_attribute( 'aria-label', $label );
		// $block_content->add_class( 'label-hidden' );
	}
	if ( $block_content->has_class( 'publisher' ) ) {
		$label = esc_html__( 'Publisher', 'greg-grandin' );
		$block_content->set_attribute( 'aria-label', $label );
	}
	if ( $block_content->has_class( 'edition' ) ) {
		$label = esc_html__( 'Edition', 'greg-grandin' );
		$block_content->set_attribute( 'aria-label', $label );
	}
	if ( $block_content->has_class( 'language' ) ) {
		$label = esc_html__( 'Language', 'greg-grandin' );
		$block_content->set_attribute( 'aria-label', $label );
	}
	if ( $block_content->has_class( 'isbn' ) ) {
		$label = esc_html__( 'ISBN', 'greg-grandin' );
		$block_content->set_attribute( 'aria-label', $label );
	}
	if ( $block_content->has_class( 'pages' ) ) {
		$label = esc_html__( 'Pages', 'greg-grandin' );
		$block_content->set_attribute( 'aria-label', $label );
	}
	$block_content->get_updated_html();

	return $block_content;
}
add_filter( 'render_block_core/paragraph', __NAMESPACE__ . '\modify_core_paragraph', null, 3 );

/**
 * Modify Core Group Block
 * Add class to site `main`
 * 
 * @link https://developer.wordpress.org/reference/classes/wp_html_tag_processor/
 *
 * @param string    $block_content
 * @param array     $block
 * @param \WP_Block $instance
 * @return string|null
 */
function modify_core_group_main( string $block_content, array $block, \WP_Block $instance ): ?string {
	$block_content = new \WP_HTML_Tag_Processor( $block_content );
	$block_content->next_tag( array( 'tag_name' => 'main' ) );
	$block_content->add_class( 'site-main' );

	$block_content->get_updated_html();

	return $block_content;
}
add_filter( 'render_block_core/group', __NAMESPACE__ . '\modify_core_group_main', null, 3 );

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
 * Sort by Menu Order
 * 
 * @link https://developer.wordpress.org/reference/hooks/query_loop_block_query_vars/
 *
 * @param array $query
 * @return array $query
 */
function modify_book_query( $query ) {
	if ( 'book' !== $query['post_type'] ) {
		return $query;
	}

	$query['orderby'] = 'menu_order';
	$query['order']   = 'asc';

	return $query;
}
add_filter( 'query_loop_block_query_vars', __NAMESPACE__ . '\modify_book_query' );
