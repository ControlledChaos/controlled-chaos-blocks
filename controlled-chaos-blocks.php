<?php
/**
 * Controlled Chaos Blocks
 * 
 * @link    http://ccdzine.com
 * @since   1.0.0
 * @package Controlled_Chaos
 * 
 * @wordpress-plugin
 * Plugin Name: Controlled Chaos Blocks
 * Plugin URI:  http://ccdzine.com/
 * Description: An object-oriented starter plugin for WordPress editor blocks, with sample blocks.
 * Version:     1.0.0
 * Author:      Controlled Chaos Design
 * Author URI:  http://ccdzine.com/
 * License:     GPL-3.0+
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Text Domain: controlled-chaos-blocks-blocks
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Keeping the version at 1.0.0 as this is a starter plugin but
 * you may want to start counting as you develop for your use case.
 */
if ( ! defined( 'CCB_VERSION' ) ) {
	define( 'CCB_VERSION', '1.0.0' );
}

/**
 * Get plugins path to check if the Gutenberg plugin is active.
 * 
 * @todo Remove when the editor is in core?
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Get the core plugin class to begin plugin funtionality.
 * 
 * Check for the Gutenberg plugin and PHP 7.
 * 
 * @since 1.0.0
 */
$version = ( float )phpversion();

if ( is_plugin_active( 'gutenberg/gutenberg.php' ) && $version >= 7.0 ) {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-includes.php';

}