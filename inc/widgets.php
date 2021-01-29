<?php
/**
 * Code to add new custom widget positions
 * 
 * @package CAT
 */

add_action( 'widgets_init', 'cat_add_widgt_positions' );

/**
 * Add custom CA widget positions.
 */
function cat_add_widgt_positions() {

	register_sidebar(
		array(
			'name'          => __( 'Blog footer widget', 'cat' ),
			'id'            => 'cat-blog-footer',
			'description'   => __( 'Add widgets here to appear at the bottom of every blog post.', 'cat' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}


