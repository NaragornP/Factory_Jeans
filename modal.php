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
 <div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัสกางเกง ขาเดฟ</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัสกางเกง ขากระบอก</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 2";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัสกางเกง ขา 3 ส่วน</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 3";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal4">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัสกางเกง ขา 5 ส่วน</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 4";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal5">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัสกางเกง ขาม้า</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 5";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal6">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัสกางเกง ขาสั้น</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 6";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal7">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัส กระโปรงยาว</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 7";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal8">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รหัส กระโปรงสั้น</h4>
      </div>
      <div class="modal-body">
        
        <?php 
            $sql = "SELECT * FROM pants WHERE p_type = 8";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idc = $row["id_code_p"];
                    echo $idc.",";
                    // $ptype = $row["p_type"];
                    // $pgender = $row["p_gender"];
                    // $ps = $row["p_s"];
                    // $pm = $row["p_m"];
                    // $pl = $row["p_l"];
                    // $pxl = $row["p_xl"];
                    // $p34 = $row["p_34"];
                    // $p36 = $row["p_36"];
                    // $p38 = $row["p_38"];
                    // $p40 = $row["p_40"];
                    // $pcoly = $row["p_coly"];
                    // $pcolp = $row["p_colp"];
                    // $pdate = $row["p_date"];
                }
            } else {
                // echo "0 results";
            }
        ?>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- ------------------------Modal Sell Pants------------------------------- -->
<div class="modal fade bs-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Modal9">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Select Shop</h4>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal" name="dis1" method="post" action="Dis_pants2.php">
                            <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Code Pant</label>
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
                                    <label class="col-sm-3 control-label">Shop name</label>
                                    <div class="col-sm-8">
                                        <?php
                                            $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
                                                $result = $conn->query("select * from shop");
                                                echo "<select name='selShopName' class='form-control' required>";
                                                echo '<option value=""><--- Please Select ---></option>';
                                                while ($row = $result->fetch_assoc()) {
                                                              unset($id, $name);
                                                              $id = $row['id_shop'];
                                                              $name = $row['shop_name']; 
                                                              echo '<option value="'.$name.'">'.$name.'</option>';
                                            }
                                                echo "</select>";
                                        ?> 
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Date</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="date" class="some_class form-control" value="" required id="datetimepicker2"/>
                                    </div>
                                  </div>
                                  <center><button type="submit" class="btn btn-success btn-lg btn-block">Next</button></center>
                                <br>
                            </div>
                            </div><!--/.row-->
        </form>

      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->