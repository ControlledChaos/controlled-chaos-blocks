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

$active_tab = 'block-usage';
if ( isset( $_GET[ 'tab' ] ) ) {
    $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'block-usage';
} ?>
<div class="wrap">
	<h1><?php _e( 'Editor Settings', 'controlled-chaos-blocks' ); ?></h1>
	<p class="description"><?php _e( 'Manage blocks in the WordPress editor.' ); ?></p>
	<h2 class="nav-tab-wrapper">
		<a href="?page=<?php echo CCB_ADMIN_SLUG; ?>&tab=block-usage" class="nav-tab <?php echo $active_tab == 'block-usage' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Block Usage', 'controlled-chaos-blocks' ); ?></a>
		<a href="?page=<?php echo CCB_ADMIN_SLUG; ?>&tab=default-blocks" class="nav-tab <?php echo $active_tab == 'default-blocks' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Default Blocks', 'controlled-chaos-blocks' ); ?></a>
    </h2>
	<form method="post" action="options.php">
        <?php if ( $active_tab == 'block-usage' ) {
            settings_fields( 'ccb_block_usage' );
            do_settings_sections( 'ccb-block-usage' );
			$save = __( 'Save Block Usage', 'controlled-chaos-blocks' );
		} elseif ( $active_tab == 'default-blocks' ) {
            settings_fields( 'ccb_block_usage' );
            do_settings_sections( 'ccb-default-blocks' );
			$save = __( 'Save Default Blocks', 'controlled-chaos-blocks' );
		} ?>
        <p class="submit"><?php submit_button( $save, 'primary', '', false, [] ); ?></p>
    </form>
</div>