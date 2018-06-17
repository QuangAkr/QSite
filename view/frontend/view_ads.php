<aside class="sticky">
    <!-- adv -->
    <div class="panel panel-default">
      <div class="panel-body">
        <?php foreach ($arr as $key => $value) { ?>
            <div class="adv"><a href="<?php echo $value->c_url ;?>" target="_blank"><img class="img-responsive" src="public/upload/adv/<?php echo $value->c_img ;?>"></a></div>
        <?php } ?>
      </div>
    </div>
    <!-- end adv -->
    </aside>