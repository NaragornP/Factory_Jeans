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
    <title>Stock Jeans</title>    
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
      <? include 'modal.php';?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		  <div class="row">
      				<div class="col-lg-12">
      					<h3 class="page-header"><i class="fa fa-laptop" style="color:green;"></i> คลังสินค้า</h3>
      					<ol class="breadcrumb">
      						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
      						<li><i class="fa fa-laptop"></i>Dashboard</li>      
      						
      					</ol>
      				</div>
      			</div>

<form action="" name="form11" medthod="post">


              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            สต๊อก สินค้า
                          </header>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 1";
                                      $result = $conn->query($sql);
                                      if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                              $idc = $row["id_code_p"];
                                              $ptype = $row["p_type"];
                                              $pgender = $row["p_gender"];
                                              $ps = $row["p_s"];
                                              $pm = $row["p_m"];
                                              $pl = $row["p_l"];
                                              $pxl = $row["p_xl"];
                                              $p34 = $row["p_34"];
                                              $p36 = $row["p_36"];
                                              $p38 = $row["p_38"];
                                              $p40 = $row["p_40"];
                                              $pcoly = $row["p_coly"];
                                              $pcolp = $row["p_colp"];
                                              $pdate = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>                                    
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">show</button></td>
                                      <td rowspan="8" align="center">ขาเดฟ</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p34; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p36; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p38; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p40; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>

                            <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 2";
                                      $result2 = $conn->query($sql);
                                      if ($result2->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result2->fetch_assoc()) {
                                              $idc2 = $row["id_code_p"];
                                              $ptype2 = $row["p_type"];
                                              $pgender2 = $row["p_gender"];
                                              $ps2 = $row["p_s"];
                                              $pm2 = $row["p_m"];
                                              $pl2 = $row["p_l"];
                                              $pxl2 = $row["p_xl"];
                                              $p342 = $row["p_34"];
                                              $p362 = $row["p_36"];
                                              $p382 = $row["p_38"];
                                              $p402 = $row["p_40"];
                                              $pcoly2 = $row["p_coly"];
                                              $pcolp2 = $row["p_colp"];
                                              $pdate2 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">show</button></td>
                                      <td rowspan="8" align="center">ขากระบอก</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps2; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm2; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl2; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl2; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p342; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p362; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p382; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p402; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 3";
                                      $result3 = $conn->query($sql);
                                      if ($result3->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result3->fetch_assoc()) {
                                              $idc3 = $row["id_code_p"];
                                              $ptype3 = $row["p_type"];
                                              $pgender3 = $row["p_gender"];
                                              $ps3 = $row["p_s"];
                                              $pm3 = $row["p_m"];
                                              $pl3 = $row["p_l"];
                                              $pxl3 = $row["p_xl"];
                                              $p343 = $row["p_34"];
                                              $p363 = $row["p_36"];
                                              $p383 = $row["p_38"];
                                              $p403 = $row["p_40"];
                                              $pcoly3 = $row["p_coly"];
                                              $pcolp3 = $row["p_colp"];
                                              $pdate3 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal3">show</button></td>
                                      <td rowspan="8" align="center">ขา 3 ส่วน</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps3; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm3; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl3; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl3; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p343; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p363; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p383; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p403; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 4";
                                      $result4 = $conn->query($sql);
                                      if ($result4->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result4->fetch_assoc()) {
                                              $idc4 = $row["id_code_p"];
                                              $ptype4 = $row["p_type"];
                                              $pgender4 = $row["p_gender"];
                                              $ps4 = $row["p_s"];
                                              $pm4 = $row["p_m"];
                                              $pl4 = $row["p_l"];
                                              $pxl4 = $row["p_xl"];
                                              $p344 = $row["p_34"];
                                              $p364 = $row["p_36"];
                                              $p384 = $row["p_38"];
                                              $p404 = $row["p_40"];
                                              $pcoly4 = $row["p_coly"];
                                              $pcolp4 = $row["p_colp"];
                                              $pdate4 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal4">show</button></td>
                                      <td rowspan="8" align="center">ขา 5 ส่วน</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps4; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm4; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl4; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl4; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p344; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p364; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p384; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p404; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 5";
                                      $result5 = $conn->query($sql);
                                      if ($result5->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result5->fetch_assoc()) {
                                              $idc5 = $row["id_code_p"];
                                              $ptype5 = $row["p_type"];
                                              $pgender5 = $row["p_gender"];
                                              $ps5 = $row["p_s"];
                                              $pm5 = $row["p_m"];
                                              $pl5 = $row["p_l"];
                                              $pxl5 = $row["p_xl"];
                                              $p345 = $row["p_34"];
                                              $p365 = $row["p_36"];
                                              $p385 = $row["p_38"];
                                              $p405 = $row["p_40"];
                                              $pcoly5 = $row["p_coly"];
                                              $pcolp5 = $row["p_colp"];
                                              $pdate5 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal5">show</button></td>
                                      <td rowspan="8" align="center">ขาม้า</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps5; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm5; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl5; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl5; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p345; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p365; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p385; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p405; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 6";
                                      $result6 = $conn->query($sql);
                                      if ($result6->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result6->fetch_assoc()) {
                                              $idc6 = $row["id_code_p"];
                                              $ptype6 = $row["p_type"];
                                              $pgender6 = $row["p_gender"];
                                              $ps6 = $row["p_s"];
                                              $pm6 = $row["p_m"];
                                              $pl6 = $row["p_l"];
                                              $pxl6 = $row["p_xl"];
                                              $p346 = $row["p_34"];
                                              $p366 = $row["p_36"];
                                              $p386 = $row["p_38"];
                                              $p406 = $row["p_40"];
                                              $pcoly6 = $row["p_coly"];
                                              $pcolp6 = $row["p_colp"];
                                              $pdate6 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal6">show</button></td>
                                      <td rowspan="8" align="center">ขาสั้น</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps6; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm6; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl6; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl6; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p346; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p366; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p386; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p406; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 7";
                                      $result7 = $conn->query($sql);
                                      if ($result7->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result7->fetch_assoc()) {
                                              $idc7 = $row["id_code_p"];
                                              $ptype7 = $row["p_type"];
                                              $pgender7 = $row["p_gender"];
                                              $ps7 = $row["p_s"];
                                              $pm7 = $row["p_m"];
                                              $pl7 = $row["p_l"];
                                              $pxl7 = $row["p_xl"];
                                              $p347 = $row["p_34"];
                                              $p367 = $row["p_36"];
                                              $p387 = $row["p_38"];
                                              $p407 = $row["p_40"];
                                              $pcoly7 = $row["p_coly"];
                                              $pcolp7 = $row["p_colp"];
                                              $pdate7 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal7">show</button></td>
                                      <td rowspan="8" align="center">กระโปรงยาว</td>
                                      <td>S</td>
                                      <td style="color:blue;"><? echo $ps7; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm7; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl7; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl7; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p347; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p367; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p387; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p407; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?                                    
                                      $sql = "SELECT * FROM pants WHERE p_type = 8";
                                      $result8 = $conn->query($sql);
                                      if ($result8->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result8->fetch_assoc()) {
                                              $idc8 = $row["id_code_p"];
                                              $ptype8 = $row["p_type"];
                                              $pgender8 = $row["p_gender"];
                                              $ps8 = $row["p_s"];
                                              $pm8 = $row["p_m"];
                                              $pl8 = $row["p_l"];
                                              $pxl8 = $row["p_xl"];
                                              $p348 = $row["p_34"];
                                              $p368 = $row["p_36"];
                                              $p388 = $row["p_38"];
                                              $p408 = $row["p_40"];
                                              $pcoly8 = $row["p_coly"];
                                              $pcolp8 = $row["p_colp"];
                                              $pdate8 = $row["p_date"];
                                          }
                                      } else {
                                          // echo "0 results";
                                      }
                                    ?>
                                  <table class="table table-bordered">
                                    <thead>
                                      <th>Code</th>
                                      <th>ทรงกางเกง</th>
                                      <th>Size</th>
                                      <th>คงเหลือ</th>
                                    </thead>
                                    <tr>
                                      <td rowspan="8" align="center"><button type="button" name="b1" value="btnt1" class="btn btn-primary" data-toggle="modal" data-target="#Modal8">show</button></td>
                                      <td rowspan="8" align="center">กระโปรงสั้น</td>
                                      <td>S</td>
                                      <td ><? echo $ps8; ?></td>
                                    </tr>
                                    <tr>
                                      <td>M</td>
                                      <td style="color:blue;"><? echo $pm8; ?></td>
                                    </tr>
                                    <tr>
                                      <td>L</td>
                                      <td style="color:blue;"><? echo $pl8; ?></td>
                                    </tr>
                                    <tr>
                                      <td>XL</td>
                                      <td style="color:blue;"><? echo $pxl8; ?></td>
                                    </tr>
                                    <tr>
                                      <td>34</td>
                                      <td style="color:blue;"><? echo $p348; ?></td>
                                    </tr>
                                    <tr>
                                      <td>36</td>
                                      <td style="color:blue;"><? echo $p368; ?></td>
                                    </tr>
                                    <tr>
                                      <td>38</td>
                                      <td style="color:blue;"><? echo $p388; ?></td>
                                    </tr>
                                    <tr>
                                      <td>40</td>
                                      <td style="color:blue;"><? echo $p408; ?></td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                          </div>

                <br>
                <!-- <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="no-print">
                      <button type="button" class="btn btn-primary btn-lg btn-block" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true"></i> print</button>
                    </div>
                  </div>
                </div> -->
</form>

             
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
