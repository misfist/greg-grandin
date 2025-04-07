<?php
/**
 * Title: Essays & Articles
 * Slug: greg-grandin/query-essays-articles
 * Description: Displays a list of articles with title, publication and date.
 * Categories: query
 * Block Types: core/query
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
$posts_per_page = get_option( 'posts_per_page', 24 );
?>
<!-- wp:query {
	"query": {
		"perPage": <?php echo intval( $posts_per_page ); ?>,
		"pages": 0,
		"offset": 0,
		"postType": "post",
		"order": "desc",
		"orderBy": "date",
		"author": "",
		"search": "",
		"exclude": [],
		"sticky": "",
		"inherit": false,
		"taxQuery": {
			"category": [
				18
			]
		},
		"parents": []
	},
	"tagName": "section",
	"metadata": {
		"categories": [
			"posts"
		],
		"patternName": "greg-grandin/query-essays-articles",
		"name": "Essays \u0026 Articles"
	},
	"className": "alignwide essays-articles",
	"layout": {
		"type": "constrained"
	}
} -->
<section class="wp-block-query alignwide essays-articles">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->

		<!-- wp:pattern {"slug":"greg-grandin/format-link"} /-->
		 
	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"greg-grandin/pagination"} /-->
</section>
<!-- /wp:query -->
