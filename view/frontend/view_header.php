<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <span id="theClock" style="color:white">&nbsp; <script language="JavaScript">startclock();</script></span>
    </div>
    <!--/.nav-collapse --> 
  </div>
  <!--/.container-fluid --> 
</nav>
<div class="container">
  <header>
    <div class="row">
      <div class="col-md-12">
        <div class="logo">
          <h2><a href="#">Nik Creation</a></h2>
        </div>
        <div class="col-md-7 pull-right call">
          <h3><i class="fa fa-phone"></i> Call Now: 0123 456 789</h3>
        </div>
      </div>
    </div>
  </header>
  <nav class="navbar navbar-default nav2">
    <div class="container-fluid">
      <div class="navbar-header">
        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar2">
        <ul class="nav navbar-nav">
          <li ><a href="index.php">Home</a></li>
          <?php foreach ($arr as $key => $value) { ?>
          <li ><a href="index.php?controller=news&id=<?php echo $value->pk_category_news_id; ?>"><?php echo $value->c_name; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!--/.container-fluid --> 
  </nav>