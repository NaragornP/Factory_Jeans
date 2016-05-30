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
    <title>Order Cut</title>
  </head>
  <script language="JavaScript">
      function ntp(){
        var k=parseFloat(document.cal.ku.value);
        var t=parseFloat(document.cal.tang.value);
        document.cal.sum.value=k*t;
        document.cal.summa.value=k*t;
      }
  </script>
  <body>
  <!-- container section start -->
  <section id="container" class="">     
      
      <header class="header dark-bg">
            <? include 'include/Topbar.php'; ?>
        <style>
        textarea { 
            resize: none; 
        }
        </style>

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
          <h3 class="page-header"><i class="fa fa-file-text-o" aria-hidden="true" style="color:green;"></i> ใบสั่งตัด</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
            <li><i class="fa fa-file-text-o"></i>Order</li>
            <!-- <li><i class=""></i>1</li> -->
          </ol>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-12">
            <form action="form1print.php" name="cal" method="post" onsubmit="return confirm('Are you sure ! you want to submit this form?');">
              <section class="panel">
                            <header class="panel-heading">
                              Order
                            </header>
                            <br><br>
                              <div class="row">
                              <div class="col-sm-6 col-sm-offset-3">
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">สีกางเกง</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="colp" class="form-control" placeholder="" required >
                                      </div>
                                
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">Code</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="code" class="form-control" placeholder="รหัส/โต๊ะ" required>
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">จ่าย</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="sell" class="form-control" placeholder="ส่งให้ใครทำ" required>
                                      </div>
                                
                                    <br><br>
                                
                                      <label class="col-sm-3 control-label">จำนวน</label>
                                      <div class="col-sm-6">
                                        <input type="number" min="0" name="num" class="form-control" placeholder="จำนวน" required>
                                      </div>
                                      <label class="col-sm-2 control-label">ตัว</label>
                         
                                    <br><br>
                               
                                      <label class="col-sm-3 control-label">ผ้าสี</label>
                                      <div class="col-sm-6">
                                        <input type="number" min="0" name="colfab" class="form-control" placeholder="" required>
                                      </div>
                                      <label class="col-sm-2 control-label">หลา</label>
                              
                                    <br><br>
                                
                                      <label class="col-sm-3 control-label">ผ้าขาว</label>
                                      <div class="col-sm-6">
                                        <input type="number" min="0" name="whifab" class="form-control" placeholder="" pattern="[0-9]*" required>
                                      </div>
                                      <label class="col-sm-2 control-label">หลา</label>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">คู่xตั้ง</label>
                                          <div class="col-sm-2">
                                            <input type="number" min="0" name="ku" class="form-control" placeholder="คู่" onKeyUp="ntp()">
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" min="0" name="tang" class="form-control" placeholder="ตั้ง" onKeyUp="ntp()">
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="summa" class="form-control" placeholder="จำนวนกางเกง" disabled>
                                            <input type="hidden" name="sum" class="form-control" >
                                          </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">แบบทรงกางเกง</label>
                                      <div class="col-sm-8">

                                                  <?php
                                                    $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                                        $result = $conn->query("select * from type_pants");
                                                        echo "<select name='typep' class='form-control' required>";
                                                        echo '<option value=""><--- Please Select ---></option>';
                                                        while ($row = $result->fetch_assoc()) {
                                                                      unset($id, $name);
                                                                      $id = $row['id_pants'];
                                                                      $name = $row['type']; 
                                                                      echo '<option value="'.$name.'">'.$name.'</option>';
                                                    }
                                                        echo "</select>";
                                                  ?> 
                                      </div>
                                    <br><br>
                                                                  
                                  <label class="col-sm-3 control-label">รหัสผ้ายีนส์</label>
                                    <div class="col-sm-8">
                                        <?php
                                          $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                              $result = $conn->query("select * from jeans");
                                              echo "<select name='codejean' class='form-control' required>";
                                              echo '<option value=""><--- Please Select ---></option>';
                                              while ($row = $result->fetch_assoc()) {
                                                            unset($id, $name);
                                                            $id = $row['id_autojean'];
                                                            $name = $row['je_code']; 
                                                            echo '<option value="'.$name.'">'.$name.'</option>';
                                          }
                                              echo "</select>";
                                        ?> 
                                    </div>
                               
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">สีด้ายการเย็บ</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="colyep" class="form-control" placeholder="" required>
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">ติดป้าย</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="tag" class="form-control" placeholder="" required>
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">หมายเหตุ</label>
                                      
                                        <textarea name="ps" cols="10" rows="5" class="form-control"></textarea>
                                     

                                  </div>
                                   <hr>

                                    <center>
                                      <button type="submit" class="btn btn-success btn-lg btn-block" >SAVE</button>
                                    </center>
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
