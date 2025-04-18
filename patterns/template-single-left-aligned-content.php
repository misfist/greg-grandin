<?php
/**
 * Title: Post with left-aligned content
 * Slug: greg-grandin/post-with-left-aligned-content
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

	<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<main class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:post-title {"level":1,"align":"wide","fontSize":"x-large"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group has-small-font-size">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'by', 'Prefix before the author name. The post author name is displayed in a separate block.', 'greg-grandin' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:post-featured-image /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"width":"100%"} -->
				<div class="wp-block-column" style="flex-basis:100%">
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group alignwide has-small-font-size">
						<!-- wp:post-date /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'greg-grandin' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:post-terms {"term":"category"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"800px"}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px">
				<!-- wp:pattern {"slug":"greg-grandin/post-navigation"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
					<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
				<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:60%">
					<!-- wp:pattern {"slug":"greg-grandin/comments"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</main>
	<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-columns"} /-->
