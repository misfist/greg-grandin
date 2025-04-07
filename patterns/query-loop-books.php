<?php
/**
 * Title: List of books
 * Slug: greg-grandin/query-loop-books
 * Categories: query, posts
 * Block Types: core/query
 * Description: A list of books.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */
$offset = ( is_front_page() ) ? 1 : 0;
?>
<!-- wp:query {
	"queryId": 45,
	"query": {
		"perPage": 10,
		"pages": 0,
		"offset": <?php echo intval( $offset ); ?>,
		"postType": "book",
		"order": "desc",
		"orderBy": "date",
		"author": "",
		"search": "",
		"exclude": [],
		"sticky": "",
		"inherit": false,
		"taxQuery": null,
		"parents": []
	},
	"className": "post-list book-list"
} -->
<div class="wp-block-query post-list book-list">
	<!-- wp:post-template -->
		<!-- wp:columns {
			"style": {
				"spacing": {
					"blockGap": {
						"top": "0",
						"left": "var:preset|spacing|40"
					},
					"padding": {
						"bottom": "var:preset|spacing|40"
					},
					"margin": {
						"top": "0",
						"bottom": "0"
					}
				},
				"border": {
					"bottom": {
						"color": "var:preset|color|accent-4",
						"width": "1px"
					}
				}
			}
		} -->
		<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--accent-4);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)">

			<!-- wp:column {
				"style": {
					"spacing": {
						"padding": {
							"bottom": "var:preset|spacing|40"
						}
					}
				}
			} -->
			<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:post-title {"isLink":true} /-->

				<!-- wp:pattern {"slug":"greg-grandin/binding-subtitle"} /-->

				<!-- wp:post-excerpt {"fontSize":"medium"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","style":{"shadow":"var:preset|shadow|natural"}} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<!-- /wp:post-template -->

	<?php
	if ( ! is_front_page() ) :
		?>

		<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->

		<?php
		endif;
	?>

	<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Sorry, but nothing was found. Please try a search with different keywords.', 'greg-grandin' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->
