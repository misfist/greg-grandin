<?php
/**
 * Title: Hero - Book
 * Slug: greg-grandin/hero-book
 * Categories: banner, media
 * Description: Banner section for single book.
 * Post Types: book
 * Block Types: core/content
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
use function Greg_Grandin\display_book_buttons;
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"banner"
		],
		"name": "About the Book"
	},
	"align": "full",
	"className": "is-style-section-1 book-hero",
	"style": {
		"spacing": {
			"padding": {
				"top": "var:preset|spacing|60",
				"bottom": "var:preset|spacing|60"
			},
			"margin": {
				"top": "0",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "default"
	}
} -->
<div class="wp-block-group alignfull is-style-section-1 book-hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"full","className":"is-style-section-1","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull is-style-section-1">
		<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top">
			<!-- wp:column {"width":"65%","className":"is-vertically-aligned-top"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:65%">
				<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="min-height:100%">
					<!-- wp:group {
						"style": {
							"spacing": {
								"blockGap": "var:preset|spacing|30"
							}
						},
						"layout": {
							"type": "constrained"
						},
						"className": "is-style-mobile-center"
					} -->
					<div class="wp-block-group is-style-mobile-center">
						<!-- wp:heading {
							"metadata": {
								"name": "Heading",
								"bindings": {
									"__default": {
										"source": "core/pattern-overrides"
									}
								}
							},
							"align": "wide",
							"style": {
								"typography": {
									"textTransform": "uppercase",
									"fontStyle": "normal",
									"fontWeight": "700",
									"letterSpacing": "1.4px"
								}
							},
							"fontSize": "small"
						} -->
						<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php echo esc_html_x( 'About the Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:post-title {"isLink":false,"fontSize":"xx-large"} /-->

						<!-- wp:heading {
							"metadata": {
								"bindings": {
									"content": {
										"source": "core/post-meta",
										"args": {
											"key": "subtitle"
										}
									}
								}
							},
							"className": "wp-block-post-title is-style-subtitle"
						} -->
						<h2 class="wp-block-heading wp-block-post-title is-style-subtitle"></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {
							"metadata": {
								"bindings": {
									"content": {
										"source": "core/post-meta",
										"args": {
											"key": "blurb"
										}
									}
								}
							},
							"className": "book-blurb has-text-align-left is-style-text-emphasis"
						} -->
						<p class="book-blurb has-text-align-left is-style-text-emphasis"></p>
						<!-- /wp:paragraph -->

						<!-- wp:post-featured-image {
							"isLink": true,
							"aspectRatio": "2/3",
							"metadata": {
								"name": "Featured Image - Mobile"
							},
							"style": {
								"shadow": "var:preset|shadow|natural"
							},
							"blockVisibility": {
								"controlSets": [
									{
										"id": 1,
										"enable": true,
										"controls": {
											"screenSize": {
												"hideOnScreenSize": {
													"medium": true,
													"large": true,
													"extraLarge": true
												}
											}
										}
									}
								]
							}
						} /-->

						<!-- wp:post-excerpt {
							"controlSets": [
								{
									"id": 1,
									"enable": true,
									"controls": {
										"screenSize": {
											"hideOnScreenSize": {
												"medium": true,
												"small": true
											}
										}
									}
								}
							]
						} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->

						<?php display_book_buttons(); ?>

						<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {
				"verticalAlignment":"top",
			 	"blockVisibility": {
					"controlSets": [
						{
							"id": 1,
							"enable": true,
							"controls": {
								"screenSize": {
									"hideOnScreenSize": {
										"small": true,
										"extraSmall": true
									}
								}
							}
						}
					]
				}
			 } -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:post-featured-image {
					"sizeSlug":"large",
					"aspectRatio": "2/3",
					"metadata": {
						"name": "Featured Image - Desktop"
					},
					"style": {
						"shadow": "var:preset|shadow|natural"
					},
					"blockVisibility": {
						"controlSets": [
							{
								"id": 1,
								"enable": true,
								"controls": {
									"screenSize": {
										"hideOnScreenSize": {
											"small": true,
											"extraSmall": true
										}
									}
								}
							}
						]
					}
				} /-->

			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
 