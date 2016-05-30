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

$sql = "SELECT * FROM jeans";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM equip_transection WHERE jean_id=1";
$result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ผ้ายีนส์</title>
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
          <h3 class="page-header"><i class="fa fa-plus-square" style="color:green;"></i>ผ้ายีนส์</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_tools"></i>Equipment</li>
            <li><i class="fa fa-plus-square"></i>Jeans</li>
          </ol>
        </div>
      </div>

<div class="row">
                      <div class="col-xs-6">
                        <section class="panel">
                          <header class="panel-heading" style="background-color:#00CD00;color:black;font-weight:bold;">
                            Add Jeans
                          </header>
                          <br><br>

                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <form class="form-horizontal" name="f1" method="post" action="Pjean_in.php" required>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Code</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="code1" class="form-control" placeholder="รหัสผ้า" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Yard</label>
                                  <div class="col-sm-9">
                                    <input type="number" min="0" name="yard1" class="form-control" placeholder="กี่หลา" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">From Shop</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="fs1" class="form-control" placeholder="ซื้อมาจากร้าน" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Color</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="color1" class="form-control" placeholder="สีผ้า" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Date</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="date1" class="form-control" value="" id="datetimepicker" required>
                                  </div>
                                </div>
                                  <center><button type="submit" class="btn btn-success btn-lg btn-block">ADD</button></center>
                                  <br><br>
                              </form>
                            </div>
                          </div>
                          <!--/.row-->
                        </section>
                      </div>
                      <div class="col-xs-6">
                        <section class="panel">
                          <header class="panel-heading" style="background-color:#EE2C2C;color:black;font-weight:bold;">
                            Export Jeans
                          </header>
                          <br><br>

                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <form class="form-horizontal" name="f2" method="post" action="Pjean_out.php">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Code</label>
                                  <div class="col-sm-9">
                                    <!-- <input type="text" name="code2" class="form-control" placeholder="รหัสผ้า" required> -->
                                    <?php
                                                  $resultP = $conn->query("select * from jeans");
                                                  echo "<select name='code2' class='form-control' required>";
                                                  echo '<option value=""><--- Please Select ---></option>';
                                                  while ($row = $resultP->fetch_assoc()) {
                                                                unset($id, $name);
                                                                $id = $row['id_autojean'];
                                                                $name = $row['je_code']; 
                                                                echo '<option value="'.$name.'">'.$name.'</option>';
                                              }
                                                  echo "</select>";
                                            ?> 
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Yard</label>
                                  <div class="col-sm-9">
                                    <input type="number" min="0" name="yard2" class="form-control" placeholder="กี่หลา" required>
                                  </div>
                                </div>
                                <!-- <div class="form-group">
                                  <label class="col-sm-3 control-label">From Shop</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="fs2" class="form-control" placeholder="ซื้อมาจากร้าน" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Color</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="color2" class="form-control" placeholder="สีผ้า" required>
                                  </div>
                                </div> -->
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Date</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="date2" class="form-control" value="" id="datetimepicker2" required>
                                  </div>
                                </div>
                                  <center><button type="submit" class="btn btn-danger btn-lg btn-block">Export</button></center>
                                  <br><br>
                              </form>
                            </div>
                          </div>
                        </section>
                      </div>
</div>
<!--/.row------------------------------------------------------------------------- -->

              <div class="row">
                  <div class="col-md-6">
                      <section class="panel">
                          <header class="panel-heading">
                            Stock Jeans
                          </header>
                          <br>
                            <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                            <?
                            if ($result->num_rows > 0) {
                            ?>
                                <table class="table table-bordered" style="width:100%">
                                  <thead>
                                    <th style="width:20%">Code</th>
                                    <th style="width:15%">Date</th>
                                    <th style="width:25%">From</th>
                                    <th style="width:30%">Color</th>
                                    <th style="width:10%">Yard</th>
                                    <th style="width:10%">Delete</th>
                                  </thead>
                            <?
                                while($row = $result->fetch_assoc()) {
                            ?>
                                  <tr>
                                    <td><? echo $row["je_code"];?></td>
                                    <td><? echo $row["je_date"];?></td>
                                    <td><? echo $row["je_from"];?></td>
                                    <td><? echo $row["je_color"];?></td>
                                    <td style="color:blue;"><? echo $row["je_yard"];?></td>
                                    <td><a onClick="javascript: return confirm('Are You sure ? Confirm Delete.');" href="delete.php? namepjean=4 & idpjean=<?php echo $row['je_code'];?>"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                  </tr>
                            <?
                                }
                            } else {
                                echo "<p style='color:red;'>No Data</p>";
                            }
                            ?>
                            </table>
                            </div><!--/.row-->
                            </div>
                    </section>
                </div>
                 <!-- ---------------- END Co. l------------------ -->
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                          Using Reports
                        </header>
                        <br>
                        <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                                <?
                                if ($result2->num_rows > 0) {
                                ?>
                                  <a onClick="javascript: return confirm('Are You sure ? Confirm Delete.');" href="deleteall.php? idjean=1"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                                  <br>
                                    <table class="table table-bordered" style="width:100%">
                                      <thead>
                                        <th style="width:20%">Code</th>
                                        <th style="width:20%">Date In</th>
                                        <th style="width:15%">Number In</th>
                                        <th style="width:20%">Date Out</th>
                                        <th style="width:15%">Number Out</th>
                                        <!-- <th style="width:10%">Delete</th> -->
                                      </thead>
                                <?
                                    while($row = $result2->fetch_assoc()) {  
                                      $r++;
                                ?>
                                      <tr>
                                        <td><? echo $row["et_jean"];?></td>
                                        <td><? echo $row["et_date_in"];?></td>
                                        <td style="color:blue;"><? echo $row["et_number_in"];?></td><? $numin = $numin + $row["et_number_in"];?>
                                        <td><? echo $row["et_date_out"];?></td>
                                        <td style="color:red;"><? echo $row["et_number_out"];?></td><? $numout = $numout + $row["et_number_out"];?>
                                      </tr>
                                <? $i++;
                                    }
                                } else {
                                    echo "<p style = 'color:red'>No Data</p>";
                                }
                                $conn->close();
                                ?>
                            </table>
                            <?
                            echo "<h4 style='color:blue;font-weight: bold'>All In : ".$numin."<h4>";
                            echo "<h4 style='color:red;font-weight: bold'>All Out : ".$numout."<h4>";
                            // echo $r;
                            ?>
                          </div><!--/.row-->
                        </div>                          
                      </section>
                </div>
     <!-- ------------------------------------------ -->     
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
