<?php

/**
 * Blocks editor functionality.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/editor
 */

namespace CCBlocks\Editor;

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
class Controlled_Chaos_Blocks_Editor {

	/**
	 * Initialize the class.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		// Include sample blocks.
		$this->blocks();

	}

	/**
	 * Include sample blocks.
	 *
	 * @since    1.0.0
	 */
	public function blocks() {

		// Basic block.
		include_once plugin_dir_path( __FILE__ ) . 'blocks/basic/class-block-basic.php';

		// Basic notice.
		include_once plugin_dir_path( __FILE__ ) . 'blocks/notice/class-block-notice.php';

	}

}

// Run the editor class.
$ccb_editor = new Controlled_Chaos_Blocks_Editor();