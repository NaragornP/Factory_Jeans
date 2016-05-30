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
    <title>กางเกงสำเร็จรูป</title>
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
          <? include 'include/slidebar.php';?>
      </aside>

      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		  <div class="row">
      				<div class="col-lg-12">
      					<h3 class="page-header"><i class="icon_ribbon" style="color:green;"></i> กางเกงสำเร็จรูป</h3>
      					<ol class="breadcrumb">
      						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
      						<li><i class="icon_ribbon"></i>กางเกงสำเร็จรูป</li>
      						
      					</ol>
      				</div>
      			</div>

              <div class="row">
                  <div class="col-lg-12">
                        <section class="panel">
                        <header class="panel-heading">
                            Manage
                        </header>
                            <div class="panel-body">
                                <div class="row">
                                    <form class="form-horizontal " method="post" action="sent_pants.php">
                                        <button type="submit" class="info-box green-bg col-md-4 col-md-offset-1">
                                            <i class="fa fa-plus-square fa-4x"></i>
                                            <div class="count">เพิ่มกางเกง</div>
                                            <input type="hidden" name="b1" value="1">
                                        </button>
                                    </form>
                                    <form class="form-horizontal " method="post" action="sent_pants.php">
                                        <button type="submit" class="info-box red-bg col-md-4 col-md-offset-1">
                                            <i class="fa fa-minus-square fa-4x"></i>
                                            <div class="count">จำหน่ายออก</div>
                                            <input type="hidden" name="b1" value="2">
                                        </button>
                                    </form>
                                </div><!--/.row-->
                            </div>
                      </section>
                     
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

<? include 'include/footerjs.php';?>

    </div>
  </div>
</div>

  </body>
</html>
