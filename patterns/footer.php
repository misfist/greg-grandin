<?php
/**
 * Title: Footer
 * Slug: greg-grandin/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","className":"pre-footer","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignwide pre-footer" style="padding-top:60px;padding-bottom:60px">
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->

			<!-- wp:site-tagline {"fontSize":"small"} /-->

			<!-- wp:navigation {"ref":53} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {
				"ref": 4,
				"overlayMenu": "never",
				"style": {
					"typography": {
						"textDecoration": "underline"
					}
				},
				"fontSize": "small",
				"layout": {
					"type": "flex",
					"setCascadingProperties": true,
					"justifyContent": "left",
					"orientation": "horizontal"
				}
			} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->