<?php
/**
 * Plugin Name: Exchange Rate Block
 * Plugin URI: https://github.com/StevenDufresne/exchange-rate-block
 * Description: Gutenberg block to show currency conversion for specific currency.
 * Author: Steve Dufresne
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Initialize the block.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
