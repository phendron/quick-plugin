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
			$created = mkdir(plugin_dir_path($name), 0755);
		}
		
		return $created; // return Flag
	}
	
	// we should probably log the errors?
	// Creates a file passing address and contents as args
	function createFile($dir=false, $content=false){
		$created = false; // Default function Flag
		
		// check file and content aren't nil
		if($file && $content){
			// write the contents of the main plugin file
			// check if succeeded
			if(file_put_contents($file, $content)){
				// set Flag for complete
				$created = true;
			}
		}
		
		return $created; // return Flag
	}
	
	
	
	// Creates the default plugin config file passing a bunch pf arguments of params
	function defaultConfigFile($plugin_name=false;, $plugin_uri=false, $plugin_desc=false, $plugin_version=false, $plugin_req_least=false, $plugin_req=false, $plugin_author=false, $plugin_author_uri=false, $plugin_license=false, $plugin_license_url=false, $plugin_update_uri=false, $plugin_text_domain=false, $plugin_domain_path=false, $plugin_handle){
		
		// move the contents of this function to an include file & require_once the files content
		// this ensures that the contents are only loaded as & when needed & conserves memory<br>
        // or does it? it should right? since the memory address will be a pointer to the function
        // that then includes the files content when the memory address is called?
		// -------------------------------------------------------------------------------------------
		
		$content = "<?php";
		$content .= "/**";
 		$content .= "* Plugin Name:       ".$plugin_name;
		$content .= "* Plugin URI:        ".$plugin_uri;
 		$content .= "* Description:       ".$plugin_desc;
		$content .= "* Version:           ".$plugin_version;
		$content .= "* Requires at least: ".$plugin_req_least;
		$content .= "* Requires PHP:      ".$plugin_req;
		$content .= "* Author:            ".$plugin_author;
		$content .= "* Author URI:        ".$plugin_author_uri;
		$content .= "* License:           ".$plugin_license;
		$content .= "* License URI:       ".$plugin_license_url;
		$content .= "* Update URI:        ".$plugin_update_uri;
		$content .= "* Text Domain:       ".$plugin_text_domain;
 		$content .= "* Domain Path:       ".$plugin_domain_path;
 		$content .= "*/";


		$content .= "// Activate plugin action";
		$content .= "function ".$plugin_handle."_activate(){";
		$content .= "";
		$content .= "}";

		$content .= "// De-activate plugin action";
		$content .= "function ".$plugin_handle."._deactivate(){";
		$content .= "";	
		$content .= "}";

		$content .= "// Uninstall plugin action";
		$content .= "function ".$plugin_handle."_uninstall(){";
		$content .= "";	
		$content .= "}";

		$content .= "register_activation_hook( __FILE__, '".$plugin_handle."_activate' );";
		$content .= "register_deactivation_hook( __FILE__, '".$plugin_handle."_deactivate' );";
		$content .= "register_uninstall_hook(__FILE__, '".$plugin_handle."_uninstall');";
		$content .= "?>";
		
		
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
		
		// Create plugin directory
		if($this->createDir($plugin_name)){
		    // ro cinnte wow sin e nil samh ag gach, tu acu hacar eso beuno.
			// Create main plugin file contents
			$configFile = $this->defaultConfigFile($plugin_name, $plugin_uri, $plugin_desc, $plugin_version, $plugin_req_least, $plugin_req, $plugin_author, $plugin_author_uri, $plugin_license, $plugin_license_url, $plugin_update_uri, $plugin_text_domain, $plugin_domain_path, $plugin_handle);
			
			// Create main plugin file with generated default content
			if($this->createFile(plugin_directory_path($plugin_name), $configFile)){
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