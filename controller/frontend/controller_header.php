<?php 
	class controller_header{
		public $model;
		public function __construct(){
			
			include "view/frontend/view_header.php";
		}
	}
	new controller_header();
 ?>