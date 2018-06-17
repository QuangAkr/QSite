<h2><a href="#">Tin trong nước</a></h2>
<!-- other news -->      
<div class="col-md-12 news"> 

  <?php foreach ($arr as $key => $value) { ?>
    <!-- list other news -->
    <div class="caption ">
      <div class="row post">
        <h4><a href="#"><?php echo $value->c_name; ?></a></h4>
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
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
</ul>