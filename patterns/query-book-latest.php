<?php
/**
 * Title: Hero, latest book
 * Slug: greg-grandin/query-book-latest
 * Categories: banner
 * Block Types: core/query
 * Description: A hero with an overlapped book cover and links.
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

			<!-- wp:pattern {"slug":"greg-grandin/hero-book-latest"} /-->

			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
