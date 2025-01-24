<?php
/**
 * Title: Footer with newsletter signup
 * Slug: greg-grandin/footer-newsletter
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with large site title and newsletter signup.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-section-3" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(1rem, 380px, 24vw)","letterSpacing":"-0.02em","fontWeight":"600","fontStyle":"normal"}}} -->
		<h2 class="wp-block-heading" style="font-size:clamp(1rem, 380px, 24vw);font-style:normal;font-weight:600;letter-spacing:-0.02em"><?php esc_html_e( 'Stories', 'greg-grandin' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"x-large"} -->
		<p class="has-x-large-font-size"><?php esc_html_e( 'Receive our articles in your inbox.', 'greg-grandin' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'greg-grandin' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
		<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Greg Grandin', 'greg-grandin' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php
					printf(
						/* translators: Designed with WordPress. %s: WordPress link. */
						esc_html__( 'Designed with %s', 'greg-grandin' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'greg-grandin' ) ) . '" rel="nofollow">WordPress</a>'
					);
					?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
