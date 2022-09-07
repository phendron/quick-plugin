<?php


/**
 * Plugin Name:       Quick Plugin
 * Plugin URI:        N/A
 * Description:       Quick Plugin creates bare bones plugins quickly
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Patrick Hendron
 * Author URI:        https://github.com/phendron
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        N/A
 * Text Domain:       quick-plugin
 * Domain Path:       /languages
 */


// Activate plugin action
function quickplugin_activate(){
	
}

// De-activate plugin action
function quickplugin_deactivate(){
	
}

// Uninstall plugin action
function quickplugin_uninstall(){
	
}

register_activation_hook( __FILE__, 'quickplugin_activate' );
register_deactivation_hook( __FILE__, 'quickplugin_deactivate' );
register_uninstall_hook(__FILE__, 'quickplugin_uninstall');

define( 'QUICK_PLUGIN_PATH', substr(plugin_dir_path( __FILE__ ), 0, -1)."\\../" );

require('inc/setup.php');

?>