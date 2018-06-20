<h2><a href="#">Tin trong nước</a></h2>
<!-- other news -->      
<div class="col-md-12 news"> 

  <?php foreach ($arr as $key => $value) { ?>
    <!-- list other news -->
    <div class="caption ">
      <div class="row post">
        <h4><a href="news/news_detail/<?php echo $value->pk_news_id; ?>/<?php echo remove_unicode($value->c_name); ?>"><?php echo $value->c_name; ?></a></h4>
        <img src="public/upload/news/<?php echo $value->c_img; ?>" width="120" style="float:left; margin-right:15px;">
        <p><?php echo $value->c_description; ?></p>
      </div>
      <div class="line"></div>
    </div>
    <!-- end list other news -->
  <?php } ?>
 </div>
<!-- end other news --> 
<ul class="pagination pull-right">
  <li class="disabled"><a href="#">Page</a></li>
  <?php $p=isset($_GET["p"])?$_GET["p"]:0; ?>
  <?php for ($i=1; $i <= $num_page ; $i++) { ?>
  <li class="page-item <?php if($i==$p) echo 'active' ?>"><a class="page-link" href="news/news/<?php echo $_GET["id"] ?>/<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
</ul>