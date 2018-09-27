<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Blogeasy
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function blogeasy_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'blogeasy_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function blogeasy_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'blogeasy_pingback_header' );

/**
* Breadcrumb Trail Customization
*/
function blogeasy_breadcrumb_trail() {
	$breadcrumb_defaults = array(
		'browse_tag'      => 'h6',
		'show_browse'     => false,
		'labels' => array(
			'home' => '<i class="fas fa-home"></i>'
		),
	);
	if ( function_exists( 'breadcrumb_trail' ) ) :
		breadcrumb_trail( $breadcrumb_defaults );
	endif;
}

/**
* Add classes to navigation buttons
*/
add_filter( 'next_posts_link_attributes', 'blogeasy_posts_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'blogeasy_posts_link_attributes' );
add_filter( 'next_comments_link_attributes', 'blogeasy_comments_link_attributes' );
add_filter( 'previous_comments_link_attributes', 'blogeasy_comments_link_attributes' );

function blogeasy_posts_link_attributes() {
    return 'class="btn btn-outline-primary mb-4"';
}

function blogeasy_comments_link_attributes() {
    return 'class="btn btn-outline-primary mb-4"';
}
