<?php
/**
 * Title: More books
 * Slug: greg-grandin/more-books
 * Description: Displays a list of books with title and date.
 * Categories: query
 * Block Types: core/query
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
$offset  = ( is_singular() ) ? 0 : 1;
$exclude = ( is_singular() ) ? get_the_ID() : 0;
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"}},"fontSize":"small"} -->
	<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'More books', 'greg-grandin' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {
		"queryId": 1,
		"query": {
			"perPage": 4,
			"pages": 0,
			"offset": <?php echo intval( $offset ); ?>,
			"postType": "book",
			"order": "desc",
			"orderBy": "date",
			"author": "",
			"search": "",
			"exclude": [<?php echo intval( $exclude ); ?>],
			"sticky": "",
			"inherit": false,
			"parents": [],
			"format": []
		},
		"align": "wide",
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:pattern {"slug":"greg-grandin/binding-full-title"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:pattern {"slug":"greg-grandin/binding-publication-date"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->


