<div class="row">
    <div class="col-md-12 popular ">
      <h2>Tin mới nhất</h2>
      <?php foreach ($arr as $key => $value) { ?>
       
        <!-- list news -->
        <div class="col-md-3 pnews"> <img src="public/upload/news/<?php echo $value->c_img; ?>">
          <h3><a href="news/news_detail/<?php echo $value->pk_news_id; ?>/<?php echo remove_unicode($value->c_name); ?>"><?php echo $value->c_name; ?></a></h3>
          <p><?php echo $value->c_description; ?></p>
        </div>
        <!-- end list news -->

      <?php }; ?>
      
    </div>
  </div>