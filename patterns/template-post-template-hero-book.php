<?php
/**
 * Title: Post Template - Hero Book
 * Slug: greg-grandin/post-template-hero-book
 * Categories: theme
 * Keywords: hero, book
 * Block Types: core/post-template
 * Description: A hero with an overlapped book cover and links.
 * Insert: false
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>

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
					<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase">
						<?php
						if ( is_singular( 'book' ) ) :
							?>
							<?php echo esc_html_x( 'About the Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?>
							<?php
						else :
							?>
							<?php echo esc_html_x( 'Latest Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?>
							<?php
						endif;
						?>
					</h2>
					<!-- /wp:heading -->

					<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

					<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"subtitle"}}}},"className":"is-style-text-subtitle"} -->
					<p class="is-style-text-subtitle"></p>
					<!-- /wp:paragraph -->

					<!-- wp:post-excerpt /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
					<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"
						aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {"className":"buy-buttons"} -->
					<div class="wp-block-buttons buy-buttons"><!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a>
						</div>
						<!-- /wp:button -->

						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

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
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","style":{"shadow":"var:preset|shadow|natural"}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
