<div class="card bg-light mb-3" style="margin-top: 10px;">
        <div class="card-header bg-success text-white text-uppercase">Hot product</div>
        <div class="card-body"> 
          <!-- list hot product -->
          <?php 
              foreach($arr as $rows)
              {
           ?>
          <div> <img class="card-img-top" src="public/upload/product/<?php echo $rows->c_img; ?>" alt="Card image cap">
            <h5 class="card-title" style="margin-top: 5px;"><?php echo $rows->c_name; ?></h5>
            <p class="card-text text-justify"><?php echo $rows->c_description; ?></p>
            <div style="border:1px dashed #dddddd; border-bottom-width: 0px; margin-bottom: 10px;"></div>
          </div>
          <!-- end list hot product --> 
          <?php } ?>
          
        </div>
</div>