<?php 
	class controller_news{
		public $model;
		public function __construct(){
			$this->model=new model();

			$id=isset($_GET["id"])?$_GET["id"]:0;
			$record_perpage = 10;
			//tính tổng số bản ghi
			$total = $this->model->get_num_rows("select pk_news_id from tbl_news");
			//tính số trang
			$num_page = ceil($total / $record_perpage) ;
			//lấy trang hiện tại ( là biến p truyền từ url)
			$page = (isset($_GET["p"]) && $_GET["p"] > 0 )? ( $_GET["p"]-1 ):0;
			//lấy từ bản ghi nào
			$from = $page * $record_perpage;
			$arr=$this->model->get_all("SELECT * from tbl_news where fk_category_news_id = $id order by pk_news_id desc limit 0,6");
			//load view
			include "view/frontend/view_news.php";
		}
	}
	new controller_news();
 ?>