<?php 
	class controller_hot_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi
			$arr=$this->model->get_all("select *from tbl_news where c_hotnews=1 order by pk_news_id desc limit 0,3");
			//load view
			include "view/frontend/view_hot_news.php";
		}
	}
	new controller_hot_news();
 ?>