<?php
/**
 * Title: Book
 * Slug: greg-grandin/template-single
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
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:post-title {"level":1} /-->
		<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"full"} /-->
		<!-- wp:pattern {"slug":"greg-grandin/hidden-written-by"} /-->
		<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:site-functionality/edit-link /-->
		
		<!-- wp:pattern {"slug":"greg-grandin/post-navigation"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"greg-grandin/more-posts"} /-->
</main>
<!-- /wp:group -->
