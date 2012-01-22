<?php

class file2{
	public __construct(){
		var prueba = "";
	}

	public function listando_objects(){
		return false;
	}
	
	public function deleted_files($id){
		return $id;
	}	
}

$obj = new file1();
$id = $_post['id'];
$obj->deleted_files($id);

?>