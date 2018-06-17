<?php 
	class controller_new_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi
			$arr=$this->model->get_all("select *from tbl_news order by pk_news_id desc limit 0,4");
			//load view
			include "view/frontend/view_new_news.php";
		}
	}
	new controller_new_news();
 ?>