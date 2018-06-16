<?php
/**
 * The core plugin class.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/includes
 */

namespace CCBlocks\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define the core functionality of the plugin.
 *
 * @since      1.0.0
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/includes
 */
class Controlled_Chaos_Blocks {

	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		// Load dependencies.
		$this->dependencies();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function dependencies() {

		// Translation functionality.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-i18n.php';

		// Editor functionality, scripts and styles.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'editor/class-editor.php';

		// Frontend functionality, scripts and styles.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'frontend/class-frontend.php';

	}

}

// Run the core plugin class.
$ccb_run = new Controlled_Chaos_Blocks();