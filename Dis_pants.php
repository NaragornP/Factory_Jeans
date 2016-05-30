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
    <title>จำหน่ายออก</title>
     <script language="JavaScript">
      function ntp(){
        var k=parseInt(document.dis1.province.value);
        document.dis1.test.value=k*1;
  
      }
  </script>
   <style>
        textarea { 
            resize: none; 
        }
  </style>
  <? include 'modal.php';?>
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
                    <h3 class="page-header"><i class="fa fa-minus-square" style="color:red;"></i>จำหน่ายกางเกง</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-bookmark"></i>Pants</li>
                        <li><i class="fa fa-minus-square"></i>Pay Off Pants</li>
                    </ol>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-12">
                    <form class="form-horizontal" name="dis1" method="post" action="Dis_pants2.php">
                        <section class="panel">
                          <header class="panel-heading">
                            Shop
                          </header>
                          <br><br>
                            <div class="row">
                              <div class="col-xs-4 col-md-2 col-md-offset-1">
                                <br><br><br>
                                <button  class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Modal9">My Shop<br>
                                  <i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i>
                                </button>
                              </div>

                            <div class="col-xs-10 col-sm-4 col-md-6 col-md-offset-1">
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">Code Pant</label>
                                    <div class="col-sm-8">
                                      <?php
                                            $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                                $result = $conn->query("select * from pants");
                                                echo "<select name='code' class='form-control' required>";
                                                echo '<option value=""><--- Please Select ---></option>';
                                                while ($row = $result->fetch_assoc()) {
                                                              unset($id, $name);
                                                              $id = $row['id_auto_pants'];
                                                              $name = $row['id_code_p']; 
                                                              echo '<option value="'.$name.'">'.$name.'</option>';
                                            }
                                                echo "</select>";
                                        ?>
                                    </div>
                                  </div>
                                  
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop name</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="selShopName" class="form-control" required>
                                    </div>
                                </div>
                                  
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-8">
                                      <textarea name="address" cols="5" rows="4" class="form-control" required></textarea>
                                    </div>                                    
                                  </div>

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-6">
                                      <input type="text" name="date" class="some_class form-control" value="" required id="datetimepicker"/>
                                    </div>
                                  </div>
                                  <center><button type="submit" class="btn btn-success btn-lg btn-block">Next</button></center>
                                <br>
                            </div>
                            </div><!--/.row-->
                        </section>
                      </form>
                    </div>
                  </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <? include 'include/footerjs.php'; ?>

  </body>
</html>