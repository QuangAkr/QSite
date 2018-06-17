<?php 
	class controller_ads{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi
			$arr=$this->model->get_all("SELECT * from tbl_adv");
			//load view
			
			include "view/frontend/view_ads.php";
		}
	}
	new controller_ads();
 ?>