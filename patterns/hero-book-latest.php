<?php
/**
 * Title: Hero - Latest Book
 * Slug: greg-grandin/hero-book-latest
 * Categories: theme
 * Keywords: hero, book
 * Block Types: core/post-template
 * Description: A hero for the most recent book.
 * Insert: false
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
use function Greg_Grandin\display_book_buttons;
use function Greg_Grandin\get_latest_book_id;
$post_id        = get_latest_book_id();
$number_reviews = get_option( 'hero_review_count', null );
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"banner"
		],
		"name": "Latest Book"
	},
	"align": "full",
	"className": "is-style-section-1 book-hero book-hero-latest is-style-mobile-center",
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
<div class="wp-block-group alignfull is-style-section-1 book-hero book-hero-latest is-style-mobile-center" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:query {
	"queryId": 115,
	"query": {
		"perPage": 1,
		"pages": 0,
		"offset": 0,
		"postType": "book",
		"order": "desc",
		"orderBy": "date",
		"author": "",
		"search": "",
		"exclude": [],
		"sticky": "",
		"inherit": false,
		"parents": [],
		"format": []
	}
} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"constrained","align":"wide","contentSize":"1240px"}} -->

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
			<div class="wp-block-group alignfull is-style-section-1 book-hero book-hero-latest" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
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
									<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php echo esc_html_x( 'Latest Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?></h2>
									<!-- /wp:heading -->

									<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

									<!-- wp:pattern {"slug":"greg-grandin/binding-subtitle"} /-->

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
										"className": "book-blurb is-style-text-emphasis"
									} -->
									<p class="book-blurb is-style-text-emphasis"></p>
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

									<!-- wp:heading {
										"level": 3,
										"metadata": {
											"bindings": {
												"content": {
													"source": "core/post-meta",
													"args": {
														"key": "awards"
													}
												}
											}
										},
										"className": "is-style-text-emphasis"
									} -->
									<h3 class="wp-block-heading is-style-text-emphasis"></h3>
									<!-- /wp:heading -->

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

								<!-- wp:group {
									"layout":{
										"type":"flex",
										"orientation":"vertical",
										"justifyContent":"stretch"
									},
									"className":"is-style-mobile-center"
								} -->
								<div class="wp-block-group is-style-mobile-center">
									<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->

									<?php display_book_buttons( $post_id ); ?>

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
								"isLink": true,
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

					<!-- wp:site-functionality/quotes {
						"metadata": {
							"name": "Quotes - Non-mobile"
						},
						"number": "<?php echo esc_attr( $number_reviews ); ?>",
						"blockVisibility": {
							"controlSets": [
								{
									"id": 1,
									"enable": false,
									"controls": {
										"screenSize": {
											"hideOnScreenSize": {
												"extraSmall": true,
												"small": true
											}
										}
									}
								}
							]
						}
					} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- wp:site-functionality/edit-link /-->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
