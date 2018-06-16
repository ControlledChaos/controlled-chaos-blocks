<?php

/**
 * Controlled Chaos editor functions.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/editor
 */

namespace CCBlocks\Editor\Blocks\Notice;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The editor-specific functionality of the plugin.
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/editor
 */
class Controlled_Chaos_Block_Notice {

	/**
	 * Initialize the class.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		// Enqueue the JavaScript for the editor.
		add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_scripts' ] );

		// Enqueue the stylesheets for the editor.
		add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_styles' ] );

	}

	/**
	 * Enqueue the JavaScript for the editor.
	 * 
	 * `wp-blocks`: includes block type registration and related functions.
	 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
	 * `wp-i18n`: To internationalize the block's text.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		// Scripts.
		wp_enqueue_script(
			'ccb-notice-block-js', // Handle.
			plugin_dir_url( __FILE__ ) . 'assets/js/block-notice.min.js', // Block.build.js: We register the block here. Built with Webpack.
			array( 'wp-blocks', 'wp-i18n', 'wp-element' ), // Dependencies, defined above.
			// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ), // Version: filemtime — Gets file modification time.
			true // Enqueue the script in the footer.
		);

	}

	/**
	 * Enqueue the stylesheets for the editor.
	 * 
	 * `wp-edit-blocks`: includes block type registration and related functions.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		// Styles.
		wp_enqueue_style(
			'ccb-notice-block-editor-css', // Handle.
			plugin_dir_url( __FILE__ ) . 'assets/css/block-notice.min.css', // Block editor CSS.
			array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
			// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.editor.build.css' ) // Version: filemtime — Gets file modification time.
		);

	}

}

// Run the notice block class.
$ccb_block_notice = new Controlled_Chaos_Block_Notice();