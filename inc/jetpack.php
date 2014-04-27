<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package sugar-vinegar
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function sugar_vinegar_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'sugar_vinegar_jetpack_setup' );
