
<!-- category -->
<div class="col-md-6 popular ">
  <h2><a href="#">Tin nước ngoài</a></h2>
  <?php for ($i=0; $i < 2; $i++) { ?>
    <!--news-->
    <div class="col-md-6 psnelnews"> <img src="public/upload/news/<?php echo $arr[$i]->c_img; ?>">
      <h3><a href="news/news_detail/<?php echo $arr[$i]->pk_news_id; ?>/<?php echo remove_unicode($arr[$i]->c_name); ?>"><?php echo $arr[$i]->c_name; ?></a></h3>
      <p><?php echo $arr[$i]->c_description; ?></p>
    </div>      
    <!--end news--> 
  <?php } ?>
  
  <!-- other news -->
  <div class="col-md-12 news">
    <div class="line"></div>
    <?php for ($i=2; $i < 5; $i++) { ?>
      <!-- list news -->
      <div class="caption ">
        <div class="row post">
          <h4><a href="news/news_detail/<?php echo $arr[$i]->pk_news_id; ?>/<?php echo remove_unicode($arr[$i]->c_name); ?>"><?php echo $arr[$i]->c_name; ?></a></h4>
          <img src="public/upload/news/<?php echo $arr[$i]->c_img; ?>" width="120" style="float:left; margin-right: 15px;">
          <p><?php echo $arr[$i]->c_description; ?></p>
        </div>
        <div class="line"></div>
      </div>
      <!-- end list news -->
    <?php } ?>
    
  
</div>
<!-- end category --> 
</div>