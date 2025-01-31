<?php
/**
 * Title: Hero, latest book
 * Slug: greg-grandin/template-query-loop-book-latest
 * Categories: banner
 * Description: A hero with an overlapped book cover and links.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
use Greg_Grandin\display_book_buttons;
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
			<!-- wp:post-template -->
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"}},"fontSize":"small"} -->
					<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'Latest Book', 'greg-grandin' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-top">
					<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
					<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%">
						<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
						<div class="wp-block-group" style="min-height:100%">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

								<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"subtitle"}}}},"className":"is-style-text-subtitle"} -->
								<p class="is-style-text-subtitle"></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="wp-block-group">
								<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
								<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
								<!-- /wp:spacer -->

								{Buttons}

								<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
								<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
								<!-- /wp:spacer -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
					<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
						<!-- wp:post-featured-image {"isLink":true,"style":{"shadow":"var:preset|shadow|natural"}} /-->
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
