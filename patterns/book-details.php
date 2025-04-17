<?php
/**
 * Title: Book Details
 * Slug: greg-grandin/book-details
 * Categories: banner
 * Description: Book metadata.
 *
 * @package WordPress
 * @subpackage Greg_Grandin
 * @since Greg Grandin 1.0
 */

?>
<!-- wp:group {"className":"is-style-book-meta"} -->
<div class="wp-block-group is-style-book-meta">
    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"greg-grandin/publication-date"}}},"className":"is-style-post-meta publication-date"} -->
    <p class="is-style-post-meta publication-date"></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"publisher"}}}},"className":"is-style-post-meta publisher"} -->
    <p class="is-style-post-meta publisher"></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"edition"}}}},"className":"is-style-post-meta edition"} -->
    <p class="is-style-post-meta edition"></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"language"}}}},"className":"is-style-post-meta language"} -->
    <p class="is-style-post-meta language"></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"isbn"}}}},"className":"is-style-post-meta isbin"} -->
    <p class="is-style-post-meta isbn"></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"pages"}}}},"className":"is-style-post-meta pages"} -->
    <p class="is-style-post-meta pages"></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->