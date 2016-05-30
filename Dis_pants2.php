<!DOCTYPE html>
<?php session_start();
include 'include/connect.php';
include 'include/header.html';
date_default_timezone_set("Asia/Bangkok");

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

    $code = $_POST['code'];
    $shop = $_POST['selShopName'];
    $address = $_POST['address'];
    $dat = $_POST['date'];

    // $Sort = explode(" ", $dat);
    // $date = date_create($Sort[0]);
    // $sdat = date_format($date,"d/m/Y");

    // ---------------------------------Query  DB ---------------------------------
    if(empty( $address )) {
        $sql = "SELECT * FROM shop WHERE shop_name ='".$shop."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $address = $row["address"];
            }
        }      
    }   

    $sql = "SELECT * FROM pants WHERE id_code_p = '".$code."'  ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $sizes =  $row["p_s"];
            $sizem =  $row["p_m"];
            $sizel =  $row["p_l"];
            $sizexl =  $row["p_xl"];
            $size34 =  $row["p_34"];
            $size36 =  $row["p_36"];
            $size38 =  $row["p_38"];
            $size40 =  $row["p_40"];
        }
    } else {
        // echo "0 results";
    }
    $conn->close();


    // echo $code." | ".$shop." | ".$address." | ".$dat."<br>".$sizes." | ".$sizem." | ".$sizel." | ".$sizexl." | ".$size34." | ".$size36." | ".$size38." | ".$size40;
?>
<html lang="en">
  <head>
    
    <title>จำหน่ายออก2</title>

    <?php include 'include/header.html'; ?>
  </head>
    <script language="JavaScript">
        function ntp(){
        var num26=parseFloat(document.logic.n26.value);
        var pri26=parseFloat(document.logic.p26.value);
        document.logic.s26.value=num26*pri26;
        document.logic.s261.value=num26*pri26;
        var num28=parseFloat(document.logic.n28.value);
        var pri28=parseFloat(document.logic.p28.value);
        document.logic.s28.value=num28*pri28;
        document.logic.s281.value=num28*pri28;
        var num30=parseFloat(document.logic.n30.value);
        var pri30=parseFloat(document.logic.p30.value);
        document.logic.s30.value=num30*pri30;
        document.logic.s301.value=num30*pri30;
        var num32=parseFloat(document.logic.n32.value);
        var pri32=parseFloat(document.logic.p32.value);
        document.logic.s32.value=num32*pri32;
        document.logic.s321.value=num32*pri32;
        var num34=parseFloat(document.logic.n34.value);
        var pri34=parseFloat(document.logic.p34.value);
        document.logic.s34.value=num34*pri34;
        document.logic.s341.value=num34*pri34;
        var num36=parseFloat(document.logic.n36.value);
        var pri36=parseFloat(document.logic.p36.value);
        document.logic.s36.value=num36*pri36;
        document.logic.s361.value=num36*pri36;
        var num38=parseFloat(document.logic.n38.value);
        var pri38=parseFloat(document.logic.p38.value);
        document.logic.s38.value=num38*pri38;
        document.logic.s381.value=num38*pri38;
        var num40=parseFloat(document.logic.n40.value);
        var pri40=parseFloat(document.logic.p40.value);
        document.logic.s40.value=num40*pri40;
        document.logic.s401.value=num40*pri40;
      }
    </script>
    
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
                    <form class="form-horizontal" name="logic" action="Dis_pants3.php" method="post">
                        <section class="panel">
                          <header class="panel-heading">
                            Pay Off Pants
                          </header>
                          <br><br>
                            <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                  
                                  <div class="form-group">
                                  <div class="modal-body">
                                      <div class="form-group">
                                            <label class="col-sm-2 control-label">Size</label>
                                            <label class="col-sm-2 control-label">คงเหลือ</label>
                                            <label class="col-sm-2 control-label">จำนวนกี่ตัว</label>
                                            <label class="col-sm-2 control-label">ราคาตัวละ</label>
                                            <label class="col-sm-3 control-label">ราคารวม</label>
                                          <br><br>
                                          <label class="col-sm-2 control-label">Size S</label>
                                            <label class="col-sm-2 control-label" style="color:blue;"><? echo $sizes; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n26" min="0" max="<? echo $sizes; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p26" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s26" class="form-control" disabled>
                                            <input type="hidden" name="s261" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size M</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $sizem; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n28" min="0" max="<? echo $sizem; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p28" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s28" class="form-control" disabled>
                                            <input type="hidden" name="s281" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size L</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $sizel; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n30" min="0" max="<? echo $sizel; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p30" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s30" class="form-control" disabled>
                                            <input type="hidden" name="s301" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size XL</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $sizexl; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n32" min="0" max="<? echo $sizexl; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p32" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s32" class="form-control" disabled>
                                            <input type="hidden" name="s321" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size 34</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $size34; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n34" min="0" max="<? echo $size34; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p34" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s34" class="form-control" disabled>
                                            <input type="hidden" name="s341" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size 36</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $size36; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n36" min="0" max="<? echo $size36; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p36" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s36" class="form-control" disabled>
                                            <input type="hidden" name="s361" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size 38</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $size38; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n38" min="0" max="<? echo $size38; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p38" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s38" class="form-control" disabled>
                                            <input type="hidden" name="s381" class="form-control" >
                                          </div>
                                          <br><br>
                                        <label class="col-sm-2 control-label">Size 40</label>
                                          <label class="col-sm-2 control-label" style="color:blue;"><? echo $size40; ?></label>
                                          <div class="col-sm-2">
                                            <input type="number" name="n40" min="0" max="<? echo $size40; ?>" class="form-control" placeholder="กี่ตัว" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="number" name="p40" min="0" class="form-control" placeholder="ตัวละ" onKeyUp="ntp()" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s40" class="form-control" disabled>
                                            <input type="hidden" name="s401" class="form-control" >
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <center><button type="submit" class="btn btn-success btn-lg btn-block">NEXT</button></center>
                                <br>
                            </div>
                            </div><!--/.row-->
                        </section>
                              <input type="hidden" name="code" value="<? echo $code; ?>">
                              <input type="hidden" name="shop" value="<? echo $shop; ?>">
                              <input type="hidden" name="address" value="<? echo $address; ?>">
                              <input type="hidden" name="date" value="<? echo $dat; ?>">
                              <input type="hidden" name="ss" value="<? echo $sizes; ?>">
                              <input type="hidden" name="sm" value="<? echo $sizem; ?>">
                              <input type="hidden" name="sl" value="<? echo $sizel; ?>">
                              <input type="hidden" name="sxl" value="<? echo $sizexl; ?>">
                              <input type="hidden" name="ss34" value="<? echo $size34; ?>">
                              <input type="hidden" name="ss36" value="<? echo $size36; ?>">
                              <input type="hidden" name="ss38" value="<? echo $size38; ?>">
                              <input type="hidden" name="ss40" value="<? echo $size40; ?>">
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
    <? include 'include/footerjs.php'; ?>
  </body>
</html>
