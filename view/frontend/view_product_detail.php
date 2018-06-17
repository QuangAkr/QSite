 <div class="col"> 
      <!-- product detail -->
      <div class="row"> 
        <!-- Image -->
        <div class="col-12 col-lg-6">
          <div class="box-detail"><img class="img-fluid" src="public/upload/product/<?php echo $arr->c_img; ?>"></div>
        </div>
        
        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
          <div class="card bg-light mb-3">
            <div class="card-body">
              <p class="price"><?php echo number_format($arr->c_price); ?></p>
              <p class="price_discounted">149.90 $</p>
              <form method="get" action="cart.html">
                <a href="index.php?controller=cart&act=add&id=<?php echo $arr->pk_product_id; ?>" class="btn btn-success btn-lg btn-block text-uppercase"> <i class="fa fa-shopping-cart"></i> Add To Cart </a>
              </form>
              <div class="product_rassurance">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>
                    Fast delivery</li>
                  <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>
                    Secure payment</li>
                  <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>
                    +33 1 22 54 65 60</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row"> 
        <!-- Description -->
        <div class="col-12">
          <div class="card border-light mb-3">
            <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Description</div>
            <div class="card-body">
              <p class="card-text text-justify"> <?php echo $arr->c_description; ?> </p>
              <p><?php echo $arr->c_content; ?></p>
            </div>
          </div>
        </div>
        <!-- end Description --> 
      </div>
      <!-- end product detail --> 
    </div>