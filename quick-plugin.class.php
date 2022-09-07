<?php


class QuickPlugin {
	
	// construct does absolutely nothing
	public function _construct_(){
		
	}
	
	// we should probably log the errors?
	// Creates a directory passing name as arg
	private function createDir($name=false){
		$created = false; // Default function Flag

		// check an anim ea ni nill
		if($name){
			// create the plugin directory with permisson 0755;
			error_log("The path is here: ".QUICK_PLUGIN_PATH.$name, 0);
			$created = mkdir(QUICK_PLUGIN_PATH.$name, 0755, true);
		}
		
		return $created; // return Flag
	}
	
	// we should probably log the errors?
	// Creates a file passing address and contents as args
	function createFile($dir=false, $file=false, $content=false){
		$created = false; // Default function Flag
		
		// check file and content aren't nil
		if($dir && $content){
			// write the contents of the main plugin file
			// check if succeeded
			if(file_put_contents($dir."/".$file.".php", $content)){
				// set Flag for complete
				$created = true;
			}
		}
		
		return $created; // return Flag
	}
	
	
	
	// Creates the default plugin config file passing a bunch pf arguments of params
	function defaultConfigFile($plugin_name=false, $plugin_uri=false, $plugin_desc=false, $plugin_version=false, $plugin_req_least=false, $plugin_req=false, $plugin_author=false, $plugin_author_uri=false, $plugin_license=false, $plugin_license_url=false, $plugin_update_uri=false, $plugin_text_domain=false, $plugin_domain_path=false, $plugin_handle){
		
		// move the contents of this function to an include file & require_once the files content
		// this ensures that the contents are only loaded as & when needed & conserves memory<br>
        // or does it? it should right? since the memory address will be a pointer to the function
        // that then includes the files content when the memory address is called?
		// -------------------------------------------------------------------------------------------
		
		$content = "<?php";
		$content .= "\n";
		$content .= "/**\n";
 		$content .= "* Plugin Name:       ".$plugin_name."\n";
		$content .= "* Plugin URI:        ".$plugin_uri."\n";
 		$content .= "* Description:       ".$plugin_desc."\n";
		$content .= "* Version:           ".$plugin_version."\n";
		$content .= "* Requires at least: ".$plugin_req_least."\n";
		$content .= "* Requires PHP:      ".$plugin_req."\n";
		$content .= "* Author:            ".$plugin_author."\n";
		$content .= "* Author URI:        ".$plugin_author_uri."\n";
		$content .= "* License:           ".$plugin_license."\n";
		$content .= "* License URI:       ".$plugin_license_url."\n";
		$content .= "* Update URI:        ".$plugin_update_uri."\n";
		$content .= "* Text Domain:       ".$plugin_text_domain."\n";
 		$content .= "* Domain Path:       ".$plugin_domain_path."\n";
 		$content .= "*/"."\n";


		$content .= "// Activate plugin action"."\n";
		$content .= "function ".$plugin_handle."_activate(){"."\n";
		$content .= ""."\n";
		$content .= "}"."\n";

		$content .= "// De-activate plugin action"."\n";
		$content .= "function ".$plugin_handle."._deactivate(){"."\n";
		$content .= ""."\n";	
		$content .= "}"."\n";

		$content .= "// Uninstall plugin action"."\n";
		$content .= "function ".$plugin_handle."_uninstall(){"."\n";
		$content .= ""."\n";	
		$content .= "}"."\n";

		$content .= "register_activation_hook( __FILE__, '".$plugin_handle."_activate' );"."\n";
		$content .= "register_deactivation_hook( __FILE__, '".$plugin_handle."_deactivate' );"."\n";
		$content .= "register_uninstall_hook(__FILE__, '".$plugin_handle."_uninstall');"."\n";
		$content .= "?>"."\n";
		
		
		return $content;
	}
	
	
	// main plugin creation function that creates the directory & files
	// One argument is parameter method of gathering the details for the functions.
	public function createPlugin($method="POST"){
		
		// set default parameter method to POST
		$param=$_POST;
		if($method!="POST"){
			// if not POST then do GET
			$param=$_GET;
		}
		
		$plugin_name = (!empty($param['plugin-name']) ? $param['plugin-name'] : false);
		$plugin_description = (!empty($param['plugin-description']) ? $param['plugin-description'] : false);
		$plugin_version = (!empty($param['plugin-version']) ? $param['plugin-version'] : false);
		$plugin_uri = (!empty($param['plugin-uri']) ? $param['plugin-uri'] : false);
		$plugin_wordpress_version = (!empty($param['plugin-wordpress-version']) ? $param['plugin-wordpress-version'] : false);
		$plugin_php_version = (!empty($param['plugin-php-version']) ? $param['plugin-php-version'] : false);
		$plugin_author = (!empty($param['plugin-author']) ? $param['plugin-author'] : false);
		$plugin_author_uri = (!empty($param['plugin-author-uri']) ? $param['plugin-author-uri'] : false);
		$plugin_license = (!empty($param['plugin-license']) ? $param['plugin-license'] : false);
		$plugin_license_uri = (!empty($param['plugin-license-uri']) ? $param['plugin-license-uri'] : false);
		$plugin_update_uri = (!empty($param['plugin-update-uri']) ? $param['plugin-update-uri'] : false);
		$plugin_text_domain = (!empty($param['plugin-text-domain']) ? $param['plugin-text-domain'] : false);
		$plugin_domain_path = (!empty($param['plugin-domain-path']) ? $param['plugin-domain-path'] : false);
        $plugin_handle = (!empty($plugin_name) ? $plugin_name : false);
		
		
		// no errors or die
		$has_errors=false;
		if($has_errors){
			exit("We failed aris, tarbh fucking cac boiiiii...");
		}
		
		// Create plugin directory
		if($this->createDir($plugin_name)){
		    // ro cinnte wow sin e nil samh ag gach, tu acu hacar eso beuno.
			// Create main plugin file contents
			error_log("directory created...", 0);
			$configFile = $this->defaultConfigFile($plugin_name, $plugin_uri, $plugin_description, $plugin_version, $plugin_wordpress_version, $plugin_php_version, $plugin_author, $plugin_author_uri, $plugin_license, $plugin_license_uri, $plugin_update_uri, $plugin_text_domain, $plugin_domain_path, $plugin_handle);
			
			// Create main plugin file with generated default content
			error_log("Wordpress Plugin Dir: ".WP_PLUGIN_DIR."/".$plugin_name, 0);
			if($this->createFile(WP_PLUGIN_DIR."/".$plugin_name, $plugin_handle, $configFile)){
				// weed dab breazts moodz sic sempier
				// we did it boiiizzzzz
				
			} else {
				// failed to created default plugin file so fail with style.
				// our functions do not return why we failed, ag is cuma liom.
			}
				
		} else {
			// failed to create directory so exit with style.
			// our functions do not return why we failed, ag is cuma liom.
		}
		
	}
	
}


?>