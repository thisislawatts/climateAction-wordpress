<?php
/**
 * Customisations to the comments area
 *
 * @package CAT
 */

add_filter( 'neve_filter_comments_title', 'cat_amend_comments_title', 10, 1 );
add_filter( 'comment_form_defaults', 'cat_amend_comment_form_fields' );
//add_action( 'comment_form_before_fields', 'cat_add_other_discussion_options' );

/**
 * Amend the title above where all the comments display.
 *
 * @param string $comments_title The title to amend.
 */
function cat_amend_comments_title( $comments_title ) {

	return 'What others are saying';
}

/**
 * Amend various bits of text that display inside the comments form.
 *
 * @param array $defaults The default form settings.
 */
function cat_amend_comment_form_fields( $defaults ) {

	$defaults['title_reply']       = __( 'Join the discussion', 'cat' );
	$defaults['label_submit']      = __( 'Submit your thoughts', 'cat' );
	
	return $defaults;
}

// function cat_add_other_discussion_options() {
// 	echo 'blah';
// }
