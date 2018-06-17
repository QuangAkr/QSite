<?php 
	class controller_category_news{
		public $model;
		public function __construct(){
			$this->model = new model();

			//lấy bản ghi từ category_news
			$arr = $this->model->get_all("select * from tbl_category_news");

			//-----phân trang----
			//quy định số bản ghi trên 1 trang
			$so_ban_ghi_tren_trang = 6;
			//tính số bản ghi 
			$so_ban_ghi = $this->model->get_num_rows("select pk_category_news_id from tbl_category_news");
			// số trang
			$num_page = ceil($so_ban_ghi / $so_ban_ghi_tren_trang);
			//hiển thị trang hiện tại lấy từ biến p trên url
			$page = isset($_GET["p"]) && $_GET["p"] >0  ? $_GET["p"] -1 : 0;
			///lấy từ bản ghi nào
			$from = $page * $so_ban_ghi_tren_trang;
			//lấy bản ghi
			$arr = $this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc limit $page,$so_ban_ghi_tren_trang");
			//-------------------
			//load view 
			include 'view/backend/view_category_news.php';
		}
	}
new controller_category_news();
 ?>