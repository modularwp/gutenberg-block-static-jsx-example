<?php
/**
 * Plugin Name: Gutenberg Block: Static JSX Example
 * Plugin URI: https://github.com/modularwp/gutenberg-block-static-jsx-example
 * Description: An example Gutenberg block with static content. Built with JSX and ES6.
 * Author: ModularWP
 * Author URI: https://modularwp.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function mdlr_block_static_jsx_example_backend_enqueue() {
	wp_enqueue_script(
		'mdlr-block-static-jsx-example-backend-script', // Unique handle.
		plugins_url( 'js/block.build.js', __FILE__ ), // block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ) // Dependencies, defined above.
	);
}
add_action( 'enqueue_block_editor_assets', 'mdlr_block_static_jsx_example_backend_enqueue' );
