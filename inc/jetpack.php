<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Open Trials
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function open_trials_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'open_trials_jetpack_setup' );
