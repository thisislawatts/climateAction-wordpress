<?php
/**
 * Customisation for the behaviour provided
 * by the Yoast SEO Plugin
 * https://wordpress.org/plugins/wordpress-seo/
 */


 add_filter('wpseo_breadcrumb_output', 'cat_wpseo_breadcrumb_output');
 add_filter('wpseo_breadcrumb_links', 'cat_wpseo_breadcrumb_links');


 /**
 * Filter the WordPress SEO to remove the breadcrumb component
 * from the visual output from most pages. The only place we want
 * to show this is for nested items, such as a blog post
 * or individual action.
 * 
 * @param string $output Breadcrumb HTML string
 * 
 * @return string Breadcrumb HTML string
 */
function cat_wpseo_breadcrumb_output( $output ) : string {

	return is_single() ? $output : '';
};

/**
 * Filter the list of links which will appear in the
 * breadcrumb component to remove the `Home` link.
 * 
 * @param array $link_list 
 */
function cat_wpseo_breadcrumb_links( $link_list ) : array {
    
    array_shift($link_list);
    
    return $link_list;
};
