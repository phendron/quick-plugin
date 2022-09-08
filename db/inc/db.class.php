<?php


class DB {
	
	private $DB_SYS_PATH = null;
	private $DB_DBS_PATH = null;
	private $DB_FILE_EXT = ".db";
	public function __construct__(){
	    $this->DB_SYS_PATH = getcwd()."/";
		$this->DB_DBS_PATH = $this->DB_SYS_PATH."dbs/";
	}
	
	
	private function get_dbs(){
	   	$files = scandir($this->DB_DBS_PATH);
		$db_files = [];
		foreach($files as $file){
			$dir_path = $this->DB_DBS_PATH.$file."/";
			if(is_dir($dir_path)){
			foreach($fiels1 as $file1){
				$file_exts = explode(".", $file1);
				$file_exts_size = count($file_exts);
				if($file_exts_size>1){
				$file_ext = $file_exts[$file_exts_size-1];
				if($file_ext == "db"){
					$db_files[] = $file;
				}
				}
			}
			}
		}
		return $db_files;
	}
	
	
	
}


?>