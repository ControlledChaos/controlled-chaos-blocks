<?php

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/includes
 */

namespace CCBlocks\i18n;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/includes
 * @author     Greg Sweet <greg@ccdzine.com>
 */
class Controlled_Chaos_Blocks_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'controlled-chaos-blocks-blocks',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}

// Run the i18n class.
$ccb_domain = new Controlled_Chaos_Blocks_i18n();