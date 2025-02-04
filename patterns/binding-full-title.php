<?php
/**
 * Title: Book full title.
 * Slug: greg-grandin/binding-full-title
 * Categories: text
 * Description: Prints linked title + subtitle with the help of the Block Bindings API.
 * Inserter: false
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>

<!-- wp:heading {
	"level": 3,
	"className": "wp-block-post-title",
	"metadata": {
		"bindings": {
			"content": {
				"source": "greg-grandin/full-title",
				"args": {
					"key": "subtitle"
				}
			}
		}
	}
} -->
<h3 class="wp-block-post-title"></h3>
<!-- /wp:heading -->
