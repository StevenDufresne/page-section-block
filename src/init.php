<?php
/**
 * Initialized the block
 *
 */

function block_enqueue() {
    wp_enqueue_script(
        'page-section-block-script',
        plugins_url( 'js/index.js', __FILE__ )
	);

	wp_enqueue_style(
		'page-section-block-css',
		plugins_url( 'css/style.css', __FILE__ ),
		array( 'wp-editor' )
	);
}

add_action( 'enqueue_block_editor_assets', 'block_enqueue' );
