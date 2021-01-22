<?php
/**
 * Customisation of behaviour for the actions pages.
 * As a lot of the parent theme is object orientated,
 * a lot of the amends need to be made through hooks and filters.
 */


add_filter( 'neve_single_post_elements_default_order', 'cat_amend_single_action_page', 10, 1 );

/**
 * Define our own running order of sections on an actions page.
 *
 * @param array $order Defines what sections and what order of things we want on the actions page.
 */
function cat_amend_single_action_page( $order ) {

	if ( 'action' === get_post_type() ) :
		$order = array(
			'title-meta',
			'thumbnail',
			'content',
			'tags',
		);
	endif;

	return $order;
}
