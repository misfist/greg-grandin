<?php
/**
 * Title: Hero, Book
 * Slug: greg-grandin/hero-book
 * Categories: banner
 * Keywords: hero, book
 * Description: A hero with an overlapped book cover and links.
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

						<!-- wp:heading {"level":1,"className":"wp-block-post-title","metadata":{"name":"Title","bindings":{"__default":{"source":"core/pattern-overrides"}}},"fontSize":"xx-large"} -->
						<h1 class="wp-block-heading wp-block-post-title"><?php echo esc_html_x( 'Book Title', 'Hero - Book pattern title', 'greg-grandin' ); ?></h1>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":3,"metadata":{"bindings":{"name":"Subtitle","content":{"source":"core/pattern-overrides"}}},"className":"is-style-subtitle is-style-text-subtitle","style":{"typography":{"textTransform":"none"}}} -->
						<h3 class="wp-block-heading is-style-subtitle is-style-text-subtitle" style="text-transform:none"><?php esc_html_e( 'Subtitle', 'greg-grandin' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"className":"wp-block-post-excerpt","metadata":{"bindings":{"name":"Excerpt","content":{"source":"core/pattern-overrides"}}}} -->
						<p class="wp-block-post-excerpt"><?php esc_html_e( 'Excerpt Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eros ipsum, luctus vel porttitor at, ultrices nec lorem. Nam dapibus commodo fringilla. Duis egestas augue consectetur mi cursus malesuada. Proin id placerat dui. ', 'greg-grandin' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->

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

						<!-- wp:pattern {"slug":"greg-grandin/element-spacer"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
				<!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"#"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image.webp" alt="<?php echo esc_attr__( 'Book Image', 'greg-grandin' ); ?>" style="aspect-ratio:2/3;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"publisher","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} -->
					<p class="publisher"><?php esc_html_e( 'Publisher', 'greg-grandin' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"publication-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} -->
					<p class="publication-date""><?php esc_html_e( 'Publication Date', 'greg-grandin' ); ?></p>
					<!-- /wp:paragraph -->

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

