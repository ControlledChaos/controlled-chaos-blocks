<?php

/**
 * Block settings.
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
class Controlled_Chaos_Block_Settings {

	/**
	 * Initialize the class.
	 *
	 * @since  1.0.0
	 * @return self
	 */
	public function __construct() {



	}

}

// Run the class.
$ccb_block_settings = new Controlled_Chaos_Block_Settings();