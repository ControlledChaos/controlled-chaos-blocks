<?php

/**
 * Editor administration.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/admin
 */

namespace CCBlocks\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The admin-specific functionality of the plugin.
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/admin
 */
class Controlled_Chaos_Blocks_Admin {

	/**
	 * Initialize the class.
	 *
	 * @since  1.0.0
	 * @return self
	 */
	public function __construct() {

		// Create an admin page for settings.
		add_action( 'admin_menu', [ $this, 'admin_page' ], 1 );

		// Get the admin dependencies.
		$this->dependencies();

	}

	/**
	 * Create an admin page for settings.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function admin_page() {

		add_options_page(
            __( 'Editor', 'controlled-chaos-blocks' ),
            __( 'Editor',  'controlled-chaos-blocks' ),
            'manage_options', 
            CCB_ADMIN_SLUG, 
            [ $this, 'admin_page_output' ]
        );

	}

	/**
	 * Get the admin dependencies.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function dependencies() {

		// Get settings for the admin page.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-settings.php';

	}

	/**
	 * Get the admin page output.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function admin_page_output() {

		// Get settings for the admin page.
		include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/admin-page.php';

	}

}

// Run the class.
$ccb_blocks_admin = new Controlled_Chaos_Blocks_Admin();