<?php
/**
 * Title: Book
 * Slug: greg-grandin/template-single-book
 * Template Types: single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:pattern {"slug":"greg-grandin/hero-book"} /-->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--60)">

		<!-- wp:heading {
			"textAlign": "center",
			"level": 3,
			"metadata": {
				"bindings": {
					"content": {
						"source": "core/post-meta",
						"args": {
							"key": "awards"
						}
					}
				}
			},
			"className": "is-style-text-emphasis"
		} -->
		<h3 class="wp-block-heading has-text-align-center is-style-text-emphasis"></h3>
		<!-- /wp:heading -->
		
		<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->

		<!-- wp:pattern {"slug":"greg-grandin/book-details"} /-->

		<!-- wp:site-functionality/edit-link /-->
		
	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"greg-grandin/more-books"} /-->
</main>
<!-- /wp:group -->
