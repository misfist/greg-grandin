<?php
/**
 * Title: Banner, Single Book
 * Slug: greg-grandin/banner-single-book
 * Categories: banner, media
 * Description: Banner section for single book.
 * Post Types: book
 * Block Types: core/content
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
?>

<!-- wp:group {"metadata":{"categories":["banner"],"name":"About the Book"},"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"full","className":"is-style-section-1","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull is-style-section-1">
		<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top">
			<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%">
				<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="min-height:100%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"metadata":{"name":"Heading","bindings":{"__default":{"source":"core/pattern-overrides"}}},"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"}},"fontSize":"small"} -->
						<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php echo esc_html_x( 'About the Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:post-title {"isLink":false,"fontSize":"xx-large"} /-->

						<!-- wp:site-functionality/subtitle /-->

						<!-- wp:post-excerpt /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
						<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"
							aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:site-functionality/buy-buttons -->
						<div class="wp-block-site-functionality-buy-buttons">
							<!-- wp:buttons {"className":"buy-buttons","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"}} -->
							<div class="wp-block-buttons buy-buttons">
								<!-- wp:button -->
								<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a></div>
								<!-- /wp:button -->

								<!-- wp:button -->
								<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:site-functionality/buy-buttons -->

						<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
						<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"
							aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
				<!-- wp:post-featured-image {"isLink":false,"aspectRatio":"2/3","style":{"shadow":"var:preset|shadow|natural"}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:site-functionality/publisher {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} /-->

				<!-- wp:site-functionality/publication-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
