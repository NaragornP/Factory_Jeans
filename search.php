<!DOCTYPE html>
<? 
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
<div class="no-print">
  <head>
    <title>Search</title>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">      
      <header class="header dark-bg">
            <? include 'include/Topbar.php'; ?>
      </header>   
      <!--sidebar start-->
      <aside>
          <? include 'include/slidebar.php'; ?>
      </aside>
      <!--sidebar end-->
</div>
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="no-print">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-search" style="color:green;"></i>ค้นหา</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="fa fa-search"></i>Search</li>
                </ol>
              </div>
            </div>
          </div>

              <div class="row">
                  <div class="col-xs-12">
                      <section class="panel">
                        <div class="no-print">
                          <header class="panel-heading">
                            Search
                          </header>
                        </div>
                          <br><br>
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <div class="no-print">
                              <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                                <div class="row">
                                  <div class="col-md-2">
                                    <i class="fa fa-search fa-4x" style="color:green;"></i>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="color:red;">ตัวอย่าง รูปแบบการค้นหาหลายๆรหัส เช่น 1,2,3 </label>
                                  <input name="txtKeyword" type="text" class="form-control" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
                                  <?
                                    $pizza  = $_GET["txtKeyword"];
                                    $pieces = explode(",", $pizza);
                                    // echo count($pieces);
                                    // echo "<br>".$pieces[0]."<br>";
                                    // echo $pieces[1]."<br>";
                                  ?>

                                  </div>
                                </div>
                                <br>
                              </form>
                              </div>                              
                            </div>
                          </div>
                                   
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h1>Check Stock</h1>
<?php
if($_GET["txtKeyword"] != "")
  {
  $objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
  $objDB = mysql_select_db($dbname);

  ?>
  <table width="100%" border="1">
    <tr>
    <th width="100"> <div align="center">Code </div></th>
    <th width="100"> <div align="center">Type </div></th>
    <th width="100"> <div align="center">Gender </div></th>
    <th width="100"> <div align="center">Color Y </div></th>
    <th width="100"> <div align="center">Color P </div></th>
    <th width="100"> <div align="center">Date</div></th>
    <th width="100"> <div align="center">Code Pattern</div></th>
    <th width="100"> <div align="center">Size S</div></th>
    <th width="100"> <div align="center">Size M</div></th>
    <th width="100"> <div align="center">Size L</div></th>
    <th width="100"> <div align="center">Size XL</div></th>
    <th width="100"> <div align="center">Size 34</div></th>
    <th width="100"> <div align="center">Size 36</div></th>
    <th width="100"> <div align="center">Size 38</div></th>
    <th width="100"> <div align="center">Size 40</div></th>
    <th width="100"> <div align="center">Picture</div></th>
    </tr>
  <?php
    for ($i=0; $i < count($pieces); $i++) { 
    $strSQL = "SELECT * FROM pants WHERE (id_code_p LIKE '%".$pieces[$i]."%' ) GROUP BY id_code_p";
    // $strSQL = "SELECT * FROM pants WHERE (id_code_p LIKE '%".$pieces[$i]."%' or p_code_pak LIKE '%".$pieces[$i]."%') GROUP BY id_code_p";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

  while($objResult = mysql_fetch_array($objQuery))
  {
    if ($objResult["p_type"] == 1) {
        $n_type = "ขาเดฟ";
    } else if ($objResult["p_type"] == 2) {
        $n_type = "ขากระบอก";
    } else if ($objResult["p_type"] == 3) {
        $n_type = "ขา 3 ส่วน";
    } else if ($objResult["p_type"] == 4) {
        $n_type = "ขา 5 ส่วน";
    } else if ($objResult["p_type"] == 5) {
        $n_type = "ขาม้า";
    } else if ($objResult["p_type"] == 6) {
         $n_type = "ขาสั้น";
    } else if ($objResult["p_type"] == 7) {
        $n_type = "กระโปรงยาว";
    } else if ($objResult["p_type"] == 8) {
        $n_type = "กระโปรงสั้น";
    }
    
  ?>
    <tr>
      <td align="center"><?php echo $objResult["id_code_p"];?></td>
      <td align="center"><?php echo $n_type;?></td>
      <td align="center"><?php echo $objResult["p_gender"];?></td>
      <td align="center"><?php echo $objResult["p_coly"];?></td>
      <td align="center"><?php echo $objResult["p_colp"];?></td>
      <td align="center"><?php echo $objResult["p_date"];?></td>
      <td align="center"><?php echo $objResult["p_code_pak"];?></td>
      <td align="center"><?php echo $objResult["p_s"];?></td>
      <td align="center"><?php echo $objResult["p_m"];?></td>
      <td align="center"><?php echo $objResult["p_l"];?></td>
      <td align="center"><?php echo $objResult["p_xl"];?></td>
      <td align="center"><?php echo $objResult["p_34"];?></td>
      <td align="center"><?php echo $objResult["p_36"];?></td>
      <td align="center"><?php echo $objResult["p_38"];?></td>
      <td align="center"><?php echo $objResult["p_40"];?></td>
      <td><center><img style="width:100%;height:100%;" src="pictureJean/jeans/<?php echo $objResult["p_picture"];?>"></center></td>

    </tr>
  <?php
    }}
  ?>
  </table>
  <?php
  mysql_close($objConnect);
}
?>


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
  <div class="col-md-4 col-md-offset-4">
      <div class="no-print">
        <button class="btn btn-primary btn-lg btn-block" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
      </div>
      </div>
  <!-- container section end -->
    <!-- javascripts -->
<? include 'include/footerjs.php';?>

  </body>
</html>
