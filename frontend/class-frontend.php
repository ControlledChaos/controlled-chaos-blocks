<?php

/**
 * Blocks frontend functionality.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/frontend
 */

namespace CCBlocks\Frontend;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The public-facing functionality of the plugin.
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/frontend
 * @author     Greg Sweet <greg@ccdzine.com>
 */
class Controlled_Chaos_Frontend {

	/**
	 * Initialize the class.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		// Enqueue frontend styles.
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_styles' ] );

		// Include sample blocks.
		$this->blocks();

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
			'ccb-frontend',
			plugin_dir_url( __FILE__ ) . 'assets/css/frontend.css',
			[ 'wp-blocks' ] // Dependency to include the CSS after it.
			// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' ) // Version: filemtime — Gets file modification time.
		);

	}

	/**
	 * Include sample blocks.
	 *
	 * @since    1.0.0
	 */
	public function blocks() {

		// Basic block.
		include_once plugin_dir_path( __FILE__ ) . 'blocks/basic/class-block-basic-frontend.php';

		// Basic notice.
		include_once plugin_dir_path( __FILE__ ) . 'blocks/notice/class-block-notice-frontend.php';

	}

}

// Run the rontend class.
$ccb_public = new Controlled_Chaos_Frontend();