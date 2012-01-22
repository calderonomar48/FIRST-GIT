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



class prueba {

	public function deleted_files($id){
		return $id;
	}	
}

$obj = new prueba();

$obj-deleted_files("1");

?>