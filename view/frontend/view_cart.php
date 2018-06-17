<form method="post" action="index.php?controller=cart&act=update">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Sản Phẩm</th>
                    <th scope="col" class="text-center">SL</th>
                    <th scope="col" class="text-right">Giá</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach($_SESSION["cart"] as $product)
                      {
                   ?>
                  <tr>
                    <td><img style="width: 100px;" src="public/upload/product/<?php echo $product['c_img'];?>" /></td>
                    <td><?php echo $product['c_name'] ?></td>
                    <td><input name="product_<?php echo $product["pk_product_id"] ;?>" class="form-control" type="number" value="<?php echo $product["number"] ;?>" /></td>
                    <td class="text-right"><?php echo $product["c_price"]; ?></td>
                    <td class="text-right"><a href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"]; ?>"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Tổng tiền</strong></td>
                    <td class="text-right"><?php echo number_format($this->cart_total()); ?></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="col mb-2">
            <div class="row">
              <div class="col-md-12 col-sm-6 text-right"> 
                <a href="index.php" class="btn btn-primary">Tiếp tục mua sắm</a> 
                <input type="submit" class="btn btn-primary" value="update"x>
                <a href="index.php?controller=checkout" class="btn btn-danger">Check out</a>  
                <a href="index.php?controller=cart&act=delete_all" class="btn btn-danger">Delete_All</a> 
              </div>
            </div>
          </div>
        </div>
      </form>