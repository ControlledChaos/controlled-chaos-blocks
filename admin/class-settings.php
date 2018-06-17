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

		// Register settings.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Register settings via the WordPress Settings API.
	 * 
	 * @since  1.0.0
	 * @return mixed
	 */
	public function settings() {

		/**
		 * Block usage options.
		 */
		add_settings_section( 'ccb-block-usage', __( 'Block Usage', 'controlled-chaos-blocks' ), [ $this, 'block_usage_section_callback' ], 'ccb-block-usage' );

		// Disable blocks globally.
		add_settings_field( 'ccb_disable_globally', __( 'Disable globally', 'controlled-chaos-blocks' ), [ $this, 'ccb_disable_globally_callback' ], 'ccb-block-usage', 'ccb-block-usage', [ esc_html__( 'Disable editor blocks for all post types.', 'controlled-chaos-blocks' ) ] );

		register_setting(
			'ccb-block-usage',
			'ccb_disable_globally'
		);

		/**
		 * Default blocks options.
		 */
		add_settings_section( 'ccb-default-blocks', __( 'Default Blocks', 'controlled-chaos-blocks' ), [ $this, 'default_blocks_section_callback' ], 'ccb-default-blocks' );

	}

	/**
	 * Block Usage section callback.
	 * 
	 * @since  1.0.0
	 * @return string
	 */
	public function block_usage_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'You can choose to disable WordPress editor blocks and use the classic editor.' ) );

		echo $html;

	}

	/**
	 * Default Blocks section callback.
	 * 
	 * @since  1.0.0
	 * @return string
	 */
	public function default_blocks_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'You can choose to individually disable default WordPress editor blocks.' ) );

		echo $html;

	}

	/**
	 * Disable blocks globally.
	 * 
	 * @since  1.0.0
	 * @return mixed
	 */
	public function ccb_disable_globally_callback( $args ) {

		$option = get_option( 'ccb_disable_globally' );

		$html = '<p><input type="checkbox" id="ccb_disable_globally" name="ccb_disable_globally" value="1" ' . checked( 1, $option, false ) . '/>';
		
		$html .= '<label for="ccb_disable_globally"> '  . $args[0] . '</label></p>';

		echo $html;

	}

}

// Run the class.
$ccb_block_settings = new Controlled_Chaos_Block_Settings();