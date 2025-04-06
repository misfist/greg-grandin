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
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<?php if ( is_front_page() ) : ?>
	<!-- wp:pattern {"slug":"greg-grandin/query-book-latest} /-->
	<?php endif; ?>

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:pattern {"slug":"greg-grandin/template-query-loop-books"} /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
