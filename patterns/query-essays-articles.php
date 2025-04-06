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
		"perPage": 24,
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
	<!-- wp:group {"tagName":"article","className":"alignfull","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"0"},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"left"}} -->
	<article class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
		<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

		<!-- wp:paragraph -->
		<p>|</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"publisher"}}}},"className":"publication is-style-italic"} -->
		<p class="publication is-style-italic"></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>|</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"greg-grandin/publication-date-full"}}},"className":"publication-date"} -->
		<p class="publication-date"></p>
		<!-- /wp:paragraph -->
	</article>
	<!-- /wp:group -->
<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"greg-grandin/pagination"} /-->
</section>
<!-- /wp:query -->
