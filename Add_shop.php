<?php 
session_start();
include 'include/connect.php';
include 'include/header.html';

  // echo $_SESSION['status'].$_SESSION['Username'];
if(!isset($_SESSION['UserID']))
  {
    echo "<br><br><br><br><br><br><br><br><br><br>";
    echo '<div class="alert alert-info">';
    echo '<center><h1><strong>Please ! </strong>Login.</h1>';
    echo "</div>";
    echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=login/login.php">';
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>เิพ่มร้านค้า</title>
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <? include 'include/Topbar.php'; ?>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <? include 'include/slidebar.php'; ?>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-plus-square" style="color:green;"></i>เพิ่มร้านค้า</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-bookmark"></i>Pants</li>
                        <li><i class="fa fa-minus-square"></i>Pay Off Pants</li>
                        <li><i class="fa fa-plus-square"></i>Add Shop</li>
                    </ol>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-12">
                    <form class="form-horizontal" action="Dis_pants.php">
                      <section class="panel">
                          <header class="panel-heading">
                            Add Shop
                          </header>
                          <br><br>
                            <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" placeholder="ชื่อร้านค้า">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Town</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="n" class="form-control" placeholder="เมือง / จังหวัด">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="p" class="form-control" placeholder="ประเทศ">
                                    </div>
                                  </div>
                                  <center><button type="submit" class="btn btn-success btn-lg btn-block">OK</button></center>
                                <br>
                            </div>
                            </div><!--/.row-->
                        </section>
                        
                    </form>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
 <? include 'include/footerjs.php';?>

  </body>
</html>
