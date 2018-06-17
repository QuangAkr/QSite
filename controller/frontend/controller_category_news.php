<?php 
	class controller_category_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			
			//lấy tasrat cả bản ghi 
			$arr=$this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc");
			//load view
			include "view/frontend/view_header.php";
		}
	}
	new controller_category_news();
 ?>