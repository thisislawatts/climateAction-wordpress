<?php
/**
 * Customisations to the blog posts
 */

add_action( 'neve_after_post_content', 'cat_output_blog_footer' );

/**
 * Output widget area at the bottom of a single blog post.
 */
function cat_output_blog_footer() {
	if ( is_active_sidebar( 'cat-blog-footer' ) && is_singular( 'post' ) ) :

		echo '<div class="widget-area" role="complementary">';
		dynamic_sidebar( 'cat-blog-footer' );
		echo '</div>';

	endif;
}
