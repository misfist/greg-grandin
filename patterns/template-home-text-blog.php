<?php
/**
 * Title: Text-only blog, home
 * Slug: greg-grandin/template-home-text-blog
 * Template Types: front-page, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1,"align":"wide","fontSize":"x-large"} -->
	<h1 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Blog', 'greg-grandin' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:pattern {"slug":"greg-grandin/template-query-loop-text-blog"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
