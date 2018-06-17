<!-- other news -->      
      <div class="col-md-12 news"> 
        <!-- list other news -->
        <div class="caption ">
          <div class="row post">
            <h3>
              <?php echo $arr->c_name; ?>
            </h3>
            <h4><?php echo $arr->c_description; ?></h4>
            <img style="width: 100%" src="public/upload/news/<?php echo $arr->c_img; ?>" class="img-responsive">
            <p style="padding-top: 15px;">
            	<?php echo $arr->c_content; ?>
            </p>
          </div>
          <div class="line"></div>
        </div>
        <!-- end list other news -->
      </div>
      <!-- end other news --> 