<!DOCTYPE html>
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
<html lang="en">
  <head>
    <title>เพิ่มกางเกง</title>
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
					<h3 class="page-header"><i class="fa fa-plus-square" style="color:green;"></i>เพิ่มกางเกง</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bookmark"></i>Pants</li>
						<li><i class="fa fa-plus-square"></i>Add Pants</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Add Pants
                          </header>
                          <br><br>
                          	<div class="row">
                          	<div class="col-md-6 col-md-offset-3">
                          		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="Add_pants2.php">
              								  <div class="form-group">
              								    <label class="col-sm-2 control-label">Code</label>
              								    <div class="col-sm-10">
              								      <input type="text" name="code" class="form-control" placeholder="รหัสสินค้า" required>
              								    </div>
              								  </div>
								                <div class="form-group">
                                    <label class="col-sm-2 control-label">Type</label>
                                    <div class="col-sm-10">
                                        
                                            <?php
                                              $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                                  $result = $conn->query("select * from type_pants");
                                                  echo "<select name='typep' class='form-control' required>";
                                                  echo '<option value=""><--- Please Select ---></option>';
                                                  while ($row = $result->fetch_assoc()) {
                                                                unset($idp, $name);
                                                                $idp = $row['id_pants'];
                                                                $name = $row['type']; 
                                                                echo '<option value="'.$idp.'">'.$name.'</option>';
                                              }
                                                  echo "</select>";
                                            ?> 
                                    </div>
                                    <!-- <a href=""><button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button></a> -->
                                  </div>
                  				        <div class="form-group">
                                    <label class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-10">
                                        <?php
                                              $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                                  $result = $conn->query("select * from gender");
                                                  echo "<select name='gender' class='form-control' required>";
                                                  echo '<option value=""><--- Please Select ---></option>';
                                                  while ($row = $result->fetch_assoc()) {
                                                                unset($idg, $name);
                                                                $idg = $row['id_gender'];
                                                                $name = $row['sex']; 
                                                                echo '<option value="'.$name.'">'.$name.'</option>';
                                              }
                                                  echo "</select>";
                                        ?> 
                                    </div>
                                    <!-- <br><p align="center">* Male = ชาย, Female = หญิง</p> -->
                                </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Size</label>
								            <div class="col-sm-2">
								              <input type="number" min="0" name="ss" class="form-control" placeholder="Size S" required> 
				                      <br>
				                      <input type="number" min="0" name="s36" class="form-control" placeholder="Size 36" required>
								            </div>
				                    <div class="col-sm-2">
				                      <input type="number" min="0" name="sm" class="form-control" placeholder="Size M" required> 
				                      <br>
				                      <input type="number" min="0" name="s38" class="form-control" placeholder="Size 38" required>
				                    </div>
				                    <div class="col-sm-2">
				                      <input type="number" min="0" name="sl" class="form-control" placeholder="Size L" required> 
				                      <br>
				                      <input type="number" min="0" name="s40" class="form-control" placeholder="Size 40" required>
				                    </div>
				                    <div class="col-sm-2">
				                      <input type="number" min="0" name="sxl" class="form-control" placeholder="Size XL" required>
				                    </div>
				                    <div class="col-sm-2">
				                      <input type="number" min="0" name="s34" class="form-control" placeholder="Size 34" required>
				                    </div>
								  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                      <input type="text" name="colorY" class="form-control" placeholder="สีที่ใช้เย็บ" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                      <input type="text" name="colorP" class="form-control" placeholder="สีที่ใช้โพ้ง" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                      <input type="text" name="date" class="some_class form-control" value="" id="datetimepicker"/ required>
                    </div>
                  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Picture Pant</label>
								    <div class="col-sm-10">
								      <input type="file" name="pic" required>
								    </div>
								  </div>
								  <div class="form-group">
                                    <label class="col-sm-2 control-label">Code Striped</label>
                                    <div class="col-sm-10">
                                        <?php
                                              $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                                  $result = $conn->query("select * from fortnight");
                                                  echo "<select name='codeSt' class='form-control' required>";
                                                  echo '<option value=""><--- Please Select ---></option>';
                                                  while ($row = $result->fetch_assoc()) {
                                                                unset($id, $name);
                                                                $id = $row['id_auto'];
                                                                $name = $row['f_code']; 
                                                                echo '<option value="'.$name.'">'.$name.'</option>';
                                              }
                                                  echo "</select>";
                                        ?> 
                                    </div>
                                    <br><p align="center" style="color:red;">*** หากไม่มีลายปักษ์ จำเป็นต้องเพิ่มลายปักษ์ ในเมนูลายปักษ์ก่อน</p>
                                </div>

								   	<center><button type="submit" class="btn btn-success btn-lg btn-block">OK</button></center>
								   	<br><br>
								</form>
                          	</div>
                        	</div><!--/.row-->

                        </section>
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
