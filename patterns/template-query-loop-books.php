<?php
/**
 * Title: List of books
 * Slug: greg-grandin/template-query-loop-books
 * Categories: query
 * Block Types: core/query
 * Description: A list of books.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
$offset = ( is_front_page() ) ? 1 : 0;
?>
<!-- wp:query {
	"queryId": 45,
	"query": {
		"perPage": 10,
		"pages": 0,
		"offset": <?php echo intval( $offset ); ?>,
		"postType": "book",
		"order": "desc",
		"orderBy": "date",
		"author": "",
		"search": "",
		"exclude": [],
		"sticky": "",
		"inherit": false,
		"taxQuery": null,
		"parents": []
	}
} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}}} -->
	<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:pattern {"slug":"greg-grandin/binding-subtitle"} /-->

			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"fontSize":"medium"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","style":{"shadow":"var:preset|shadow|natural"}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group"
		style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next {"label":"Older Posts"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Sorry, but nothing was found. Please try a search with different keywords.', 'greg-grandin' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
	<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:query -->
