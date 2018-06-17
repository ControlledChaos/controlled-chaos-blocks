<?php
/**
 * HTML output for the editor admin page.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    controlled-chaos-blocks
 * @subpackage controlled-chaos-blocks/includes
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$active_tab = 'block-use';
if ( isset( $_GET[ 'tab' ] ) ) {
    $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'block-use';
} ?>
<div class="wrap">
	<h1><?php _e( 'Editor Settings', 'controlled-chaos-blocks' ); ?></h1>
	<p class="description"><?php _e( 'Manage blocks in the WordPress editor.' ); ?></p>
	<h2 class="nav-tab-wrapper">
		<a href="?page=<?php echo CCB_ADMIN_SLUG; ?>&tab=block-use" class="nav-tab <?php echo $active_tab == 'block-use' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Block Use', 'controlled-chaos-blocks' ); ?></a>
    </h2>
</div>