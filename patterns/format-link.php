<?php
/**
 * Title: Link format
 * Slug: greg-grandin/format-link
 * Categories: post-format
 * Description: A link post format with a description and an emphasized link for key content.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:group {
	"tagName": "article",
	"className": "alignfull",
	"style": {
		"spacing": {
			"padding": {
				"top": "var:preset|spacing|30",
				"bottom": "var:preset|spacing|30",
				"left": "0",
				"right": "0"
			},
			"blockGap": "0"
		},
		"border": {
			"bottom": {
				"color": "var:preset|color|accent-6",
				"width": "1px"
			},
			"top": [],
			"right": [],
			"left": []
		}
	},
	"layout": {
		"type": "flex",
		"flexWrap": "wrap",
		"verticalAlignment": "center",
		"justifyContent": "left"
	}
} -->
<article class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
	<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

	<!-- wp:paragraph -->
	<p>|</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {
		"metadata": {
			"bindings": {
				"content": {
					"source": "core/post-meta",
					"args": {
						"key": "publisher"
					}
				}
			}
		},
		"className": "publication is-style-italic"
	} -->
	<p class="publication is-style-italic"></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>|</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {
		"metadata": {
			"bindings": {
				"content": {
					"source": "greg-grandin/publication-date-full"
				}
			}
		},
		"className": "publication-date"
	} -->
	<p class="publication-date"></p>
	<!-- /wp:paragraph -->
</article>
<!-- /wp:group -->
