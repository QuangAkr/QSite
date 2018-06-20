<div class="col-md-4 news">
  <h1>Tin nổi bật</h1>
  <?php foreach ($arr as $key => $value) { ?>
    <!-- list news -->
    <div class="caption ">
      <div class="row post"> <img src="public/upload/news/<?php echo $value->c_img; ?>" width="120" style="float:left; margin-right:15px;">
        <p><a href="news/news_detail/<?php echo $value->pk_news_id; ?>/<?php echo remove_unicode($value->c_name); ?>"><?php echo $value->c_name; ?></a></p>
      </div>
      <div class="line"></div>
    </div>
    <!-- end list news -->
  <?php } ?>
  
</div>