<?php
/**
 * Title: Buy Buttons
 * Slug: greg-grandin/buy-buttons
 * Categories: call-to-action
 * Description: Links to get the book in different websites.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Buy your copy of The Stories Book', 'greg-grandin' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"align":"wide","fontSize":"medium","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons alignwide has-custom-font-size has-medium-font-size">
		<!-- wp:button {"className":"is-style-fill buy-button","placeholder":"Add Buy Link..."} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button is-style-fill buy-button"  href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Amazon', 'Example brand name.', 'greg-grandin' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-fill buy-button","placeholder":"Add Buy Link..."} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button is-style-fill buy-button"  href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Audible', 'Example brand name.', 'greg-grandin' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-fill buy-button","placeholder":"Add Buy Link..."} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button is-style-fill buy-button"  href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Barnes &amp; Noble', 'Example brand name.', 'greg-grandin' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-fill buy-button","placeholder":"Add Buy Link..."} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button is-style-fill buy-button"  href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Apple Books', 'Example brand name.', 'greg-grandin' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-fill buy-button","placeholder":"Add Buy Link..."} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button is-style-fill buy-button"  href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Bookshop.org', 'Example brand name.', 'greg-grandin' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-fill buy-button","placeholder":"Add Buy Link..."} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button is-style-fill buy-button"  href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'IndieBooks', 'Example brand name.', 'greg-grandin' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( 'Outside Europe? View <a href="#" rel="nofollow">international editions</a>.', 'Pattern placeholder text with link.', 'greg-grandin' ) ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
