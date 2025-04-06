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

?>

<!-- wp:group {"metadata":{"categories":["banner"],"name":"Latest Book"},"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

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

		<!-- wp:group {"align":"full","className":"is-style-section-1","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull is-style-section-1">
			<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top","width":"auto"} -->
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:auto">
					<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group" style="min-height:100%">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
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
							<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase">
								<?php
								if ( is_singular( 'book' ) ) :
									?>
									<?php echo esc_html_x( 'About the Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?>
									<?php
								else :
									?>
									<?php echo esc_html_x( 'Latest Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?>
									<?php
								endif;
								?>
							</h2>
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
								"blockVisibility": {
									"controlSets": [
										{
											"id": 1,
											"enable": true,
											"controls": {
												"screenSize": {
													"hideOnScreenSize": {
														"small": true,
														"medium": true
													}
												}
											}
										}
									]
								}
							} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group">
							<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->

							<!-- wp:pattern {"slug":"greg-grandin/buttons"} /-->
						
							<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
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
		</div>
		<!-- /wp:group -->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
