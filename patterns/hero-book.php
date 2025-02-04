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

<!-- wp:group {"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="min-height:100%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">

						<!-- wp:heading {"metadata":{"name":"Heading","bindings":{"__default":{"source":"core/pattern-overrides"}}},"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"}},"fontSize":"small"} -->
						<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php echo esc_html_x( 'About the Book', 'Hero - Book pattern headline text', 'greg-grandin' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":1,"className":"wp-block-title","metadata":{"name":"Title","bindings":{"__default":{"source":"core/pattern-overrides"}}},"isLink":true,"fontSize":"xx-large"} -->
						<h1 class="wp-block-heading wp-block-post-title"><?php echo esc_html_x( 'Book Title', 'Hero - Book pattern title', 'greg-grandin' ); ?></h1>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":3,"metadata":{"bindings":{"name":"Subtitle","content":{"source":"core/pattern-overrides"}}},"className":"is-style-subtitle is-style-text-subtitle","style":{"typography":{"textTransform":"capitalize"}}} -->
						<h3 class="wp-block-heading is-style-subtitle is-style-text-subtitle" style="text-transform:capitalize"><?php esc_html_e( 'Subtitle', 'greg-grandin' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:post-excerpt /-->

						<!-- wp:paragraph {"className":"wp-block-post-excerpt","metadata":{"bindings":{"name":"Excerpt","content":{"source":"core/pattern-overrides"}}}} -->
						<p class="wp-block-post-excerp"><?php esc_html_e( 'Excerpt Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eros ipsum, luctus vel porttitor at, ultrices nec lorem. Nam dapibus commodo fringilla. Duis egestas augue consectetur mi cursus malesuada. Proin id placerat dui. ', 'greg-grandin' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
						<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:pattern {"slug":"greg-grandin/buttons"} /-->

						<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
						<div style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
				<!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image.webp" alt="<?php echo esc_attr__( 'Book Image', 'greg-grandin' ); ?>" style="aspect-ratio:2/3;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->