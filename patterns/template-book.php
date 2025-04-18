<?php
/**
 * Title: Book Archive Post Template
 * Slug: greg-grandin/template-book
 * Categories: query, posts
 * Block Types: core/post-template
 * Description: A list of books.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
?>
<!-- wp:post-template -->
	<!-- wp:columns {
		"style": {
			"spacing": {
				"blockGap": {
					"top": "0",
					"left": "var:preset|spacing|40"
				},
				"padding": {
					"bottom": "var:preset|spacing|40"
				},
				"margin": {
					"top": "0",
					"bottom": "0"
				}
			},
			"border": {
				"bottom": {
					"color": "var:preset|color|accent-4",
					"width": "1px"
				}
			}
		}
	} -->
	<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--accent-4);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)">

		<!-- wp:column {
			"metadata": {
				"name": "Left Column"
			},
			"className":"column-left column-1"
		} -->
		<div class="wp-block-column column-left column-1">

			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:pattern {"slug":"greg-grandin/binding-subtitle"} /-->

			<!-- wp:post-excerpt {"fontSize":"medium"} /-->

			<!-- wp:site-functionality/quotes {
				"metadata": {
					"name": "Quotes - Non-mobile"
				},
				"number": 2,
				"blockVisibility": {
					"controlSets": [
						{
							"id": 1,
							"enable": true,
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

			<!-- wp:spacer {"height":"1em","metadata":{"name":"Spacer - Mobile"},"blockVisibility":{"visibilityPresets":{"presets":[],"operator":"atLeastOne"},"controlSets":[{"id":1,"enable":true,"controls":{"screenSize":{"hideOnScreenSize":{"extraLarge":true,"large":true}}}}]}} -->
			<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {
			"metadata": {
				"name": "Right Column"
			},
			"width":"20%",
			"className":"column-right column-2"
		} -->
		<div class="wp-block-column column-right column-2" style="flex-basis:20%">
			<!-- wp:post-featured-image {
				"isLink": true,
				"aspectRatio": "2/3",
				"style": {
					"shadow": "var:preset|shadow|natural"
				}
			} /-->

			<!-- wp:site-functionality/quotes {
				"metadata": {
					"name": "Quotes - Mobile"
				},
				"number":1,
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
				},
				"className": "is-style-mobile-center"
			} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
<!-- /wp:post-template -->