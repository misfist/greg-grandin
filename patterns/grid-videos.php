<?php
/**
 * Title: Grid with videos
 * Slug: greg-grandin/grid-videos
 * Categories: about
 * Description: A grid with videos.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"left","align":"wide","className":"is-style-text-subtitle","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading alignwide has-text-align-left is-style-text-subtitle has-x-large-font-size"><?php esc_html_e( 'Explore the episodes', 'greg-grandin' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-text-annotation"} -->
		<p class="is-style-text-annotation"><?php esc_html_e( 'Podcast', 'greg-grandin' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
