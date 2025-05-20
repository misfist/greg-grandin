<?php
/**
 * Title: Book archive
 * Slug: greg-grandin/template-front-page
 * Template Types: archive
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
$books = get_post_type_archive_link( 'book' );
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<!-- wp:post-content {"layout":{"type":"default"}} /-->

	<!-- wp:pattern {"slug":"greg-grandin/hero-book-latest"} /-->

	<!-- wp:group {"align":"wide","layout":{"type":"default"},"className":"body-content"} -->
	<div class="wp-block-group alignwide body-content">
		<!-- wp:heading {
			"metadata": {
				"name": "Heading"
			},
			"align": "wide",
			"style": {
				"typography": {
					"textTransform": "uppercase",
					"fontStyle": "normal",
					"fontWeight": "700",
					"letterSpacing": "1.4px"
				}
			},
			"className": "is-style-mobile-center",
			"fontSize": "small"
		} -->
		<h2 class="wp-block-heading alignwide has-small-font-size is-style-mobile-center" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php echo esc_html_x( 'Other Books', 'Homepage book list pattern headline text', 'greg-grandin' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:pattern {"slug":"greg-grandin/query-loop-books-front-page"} /-->

		<!-- wp:paragraph {
			"align":"center",
			"className:"has-text-underline"
		} -->
		<p class="has-text-align-center has-text-underline"><a href="<?php echo esc_url( $books ); ?>" data-type="page" data-id="65"><strong><?php esc_html_e( 'See All Books', 'greg-grandin' ); ?></strong></a></p>
		<!-- /wp:paragraph -->
				
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->