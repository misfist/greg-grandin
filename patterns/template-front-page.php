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