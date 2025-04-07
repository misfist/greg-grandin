<?php
/**
 * Title: Book archive
 * Slug: greg-grandin/template-archive-book
 * Template Types: archive
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
	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:query-title {"type":"archive","showPrefix":false} /-->
		<!-- wp:pattern {"slug":"greg-grandin/query-loop-books"} /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
