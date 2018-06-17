<!DOCTYPE html>
<html lang="en">
<head>
<title>New Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="public/frontend/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/frontend/css/style.css">
<link rel="stylesheet" type="text/css" href="public/frontend/css/fontawesome-all.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cabin">
<link rel="stylesheet" type="text/css" href="public/frontend/css/owl.carousel.css" >
<link rel="stylesheet" type="text/css" href="public/frontend/css/owl.theme.css">
<script type="text/javascript" src="public/frontend/js/jquery.min.js"></script>
<script type="text/javascript" src="public/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="public/frontend/js/clock.js" ></script>
<script>
    $(document).ready(function() {
      $("#owl-demo2").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1]
       });
    });
  </script>
</head>

<body>
<?php include 'controller/frontend/controller_category_news.php'; ?>
<div class="container">

  <!-- rơws -->
  <div class="row">     
    <!-- 9 col -->
    <div class="col-md-9 popular ">
      
    <?php include "controller/frontend/controller_news_detail.php"; ?>
      
    </div>
    <!-- end 9 col -->  
  	<!--  3 col  -->
    <div class="col-md-3" style="margin-top: 15px;">
      <?php include "controller/frontend/controller_ads.php"; ?>
    </div>
    <!-- end 3 col -->
  </div>
  <!-- end rows --> 
  
</div>
<?php include 'view_footer.php'; ?>
</body>
</html>
