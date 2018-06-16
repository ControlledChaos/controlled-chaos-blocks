<?php

/**
 * Controlled Chaos frontend functions.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/frontend
 */

namespace CCBlocks\Frontend\Blocks\Basic;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The frontend-specific functionality of the plugin.
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/frontend
 */
class Controlled_Chaos_Block_Basic_Frontend {

	/**
	 * Initialize the class.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		// Enqueue frontend styles.
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_styles' ] );

	}

	/**
	 * Enqueue the stylesheets for the public-facing side of the site.
	 * 
	 * `wp-blocks`: includes block type registration and related functions.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		// Styles.
		wp_enqueue_style(
			'ccb-basic-block-style', // Handle.
			plugin_dir_url( __FILE__ ) . 'assets/css/block-basic.min.css', // Block style CSS.
			array( 'wp-blocks' ) // Dependency to include the CSS after it.
			// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' ) // Version: filemtime — Gets file modification time.
		);

	}

}

// Run the basic block frontend class.
$ccb_block_basic_frontend = new Controlled_Chaos_Block_Basic_Frontend();