<?php



function quickplugin_main_menu_page() {
	add_menu_page(
		__( 'Quick Plugin', 'textdomain' ),
		'Quick Plugin',
		'manage_options',
		'quick-plugin-main',
		'quick_plugin_main_page',
		'',//plugins_url( 'quick-plugin/img/icon.png' ),
		26
	);
}
add_action( 'admin_menu', 'quickplugin_main_menu_page' );

function quickplugin_create_menu_page() {
	add_submenu_page(
		'quick-plugin-main',
		__( 'Create Plugin', 'textdomain' ),
		'Create Plugin',
		'manage_options',
		'quick-plugin-create',
		'quick_plugin_create_page',
		'',//plugins_url( 'quick-plugin/img/icon.png' ),
		26
	);
}
add_action( 'admin_menu', 'quickplugin_create_menu_page' );


function quick_plugin_main_page(){
    include_once('layout/quick-plugin-main.php');	
}

function quick_plugin_create_page(){
	include_once('layout/quick-plugin-create.php');
}



function quick_plugin_enqueue_scripts($hook){
	echo "                          ".$hook;

	if($hook == "quick-plugin_page_quick-plugin-create"){
		wp_enqueue_style( 'create-plugin-css', plugins_url( '../css/create-page.css', __FILE__ ));
		wp_enqueue_script( 'create-plugin-script', plugins_url( '../js/create-page.js', __FILE__ ), array('jquery') );
	    wp_localize_script( 'create-plugin-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'wordpress_version' => get_bloginfo('version')) );
	}
	
}

add_action( 'admin_enqueue_scripts', 'quick_plugin_enqueue_scripts' );



function create_plugin(){
	global $wpdb;

	require_once(plugin_dir_path(__FILE__).'../quick-plugin.class.php');
	
	$quickPlugin = new QuickPlugin();
	$data = $quickPlugin->createPlugin();
	
	echo $data;
	exit();
}


add_action('wp_ajax_create_plugin', 'create_plugin');



?>