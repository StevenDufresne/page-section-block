<?php
/**
 * Initialized the block
 *
 */

function block_enqueue() {
    wp_enqueue_script(
        'exchange-rate-block-script',
        plugins_url( 'js/index.js', __FILE__ )
	);

	wp_enqueue_style(
		'exchange-rate-block-css',
		plugins_url( 'css/style.css', __FILE__ ),
		array( 'wp-editor' )
	);
}

add_action( 'enqueue_block_editor_assets', 'block_enqueue' );
