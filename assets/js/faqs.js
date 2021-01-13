/**
 * File faqs.js
 *
 * Puts the hide and reveal functionality in the Yoast FAQs block.
 */

jQuery(document).ready(function ($) {
	var $dropdowns = $( '.schema-faq-section' );

    $dropdowns.each(function() {
        var $dropdown = $( this );
        var $heading = $dropdown.find( '.schema-faq-question' );
        $heading.click(function() {
            toggleDropDown( $dropdown );
        } );
    } );
} );

function toggleDropDown($el) {
    if ( $el.hasClass( 'is-open' ) ) {
        $el.removeClass( 'is-open' );
    } else {
        $el.addClass( 'is-open' );
    }
}
