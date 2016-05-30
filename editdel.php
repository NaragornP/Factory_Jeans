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
    <title>Print & Delete Data</title>
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
					<h3 class="page-header"><i class="fa fa-print" style="color:green;"></i>Print & Delete Data</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-print"></i>Print & Delete Data</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      	<section class="panel">
                          <header class="panel-heading">
                            รายการกางเกงที่หมดสต๊อก
                          </header>
                          <br><br>
                          	<div class="row">
                          	<div class="col-md-10 col-md-offset-1">
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
								    <th width="100"> <div align="center">Delete</div></th>
								    </tr>
								  <?php
								    $objConnect = @mysql_connect($servername, $username, $password) or die("Error Connect to Database");
								  	$objDB = @mysql_select_db($dbname);
								    $strSQL = "SELECT * FROM pants WHERE p_s = 0 AND p_m = 0 AND p_l = 0 AND p_xl = 0 AND p_34 = 0 AND p_36 = 0 AND p_38 = 0 AND p_40 = 0";
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
									  <td><a onClick="javascript: return confirm('Are You sure ? Confirm Delete.');" href="delete.php? namepantdel=9 & idpantdel=<?php echo $objResult['id_code_p'];?>"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-times" aria-hidden="true"></i></button></td>
								    </tr>
								  <?php
								    }
								  ?>
								</table>
								<br>
                          	</div>
                        	</div><!--/.row-->
                        </section>

<!-- //--------------------------------------------END Section-------------------------------------------------------------- -->

                        <section class="panel">
                          <header class="panel-heading">
                            รายการใบสั่งตัด
                          </header>
                          <br><br>
                          	<div class="row">
                          	<div class="col-md-10 col-md-offset-1">
                          		<table width="100%" border="1">
								    <tr>
								    <th width="100"> <div align="center">No.</div></th>
								    <th width="100"> <div align="center">รหัส </div></th>
								    <th width="100"> <div align="center">จ่ายให้ </div></th>
								    <th width="100"> <div align="center">จำนวน/ตัว</div></th>
								    <th width="100"> <div align="center">ผ้าสี/หลา</div></th>
								    <th width="100"> <div align="center">ผ้าขาว/หลา</div></th>
								    <th width="100"> <div align="center">คู่</div></th>
								    <th width="100"> <div align="center">ตั้ง</div></th>
								    <th width="100"> <div align="center">รวม</div></th>
								    <th width="100"> <div align="center">แบบกางเกง</div></th>
								    <th width="100"> <div align="center">รหัสผ้ายีนส์</div></th>
								    <th width="100"> <div align="center">สีด้ายการเย็บ</div></th>
								    <th width="100"> <div align="center">ติดป้าย</div></th>
								    <th width="100"> <div align="center">หมายเหตุ</div></th>
								    <th width="100"> <div align="center">Print</div></th>
								    <th width="100"> <div align="center">Delete</div></th>
								    </tr>
								  <?php
								    $objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
								  	$objDB = mysql_select_db($dbname);
								    $strSQL = "SELECT * FROM ordersell";
								 	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
								  while($objResult = mysql_fetch_array($objQuery))
								  {
								
								    
								  ?>
								    <tr>
								      <td align="center"><?php echo $objResult["id_auto_order"];?></td>
								      <td align="center"><?php echo $objResult["or_code"];?></td>
								      <td align="center"><?php echo $objResult["or_out"];?></td>
								      <td align="center"><?php echo $objResult["or_number"];?></td>
								      <td align="center"><?php echo $objResult["or_colfab"];?></td>
								      <td align="center"><?php echo $objResult["or_whifab"];?></td>
								      <td align="center"><?php echo $objResult["or_ku"];?></td>
								      <td align="center"><?php echo $objResult["or_tang"];?></td>
								      <td align="center"><?php echo $objResult["or_sum"];?></td>
								      <td align="center"><?php echo $objResult["or_type"];?></td>
								      <td align="center"><?php echo $objResult["or_codejean"];?></td>
								      <td align="center"><?php echo $objResult["or_colpant"];?></td>
								      <td align="center"><?php echo $objResult["or_tag"];?></td>
								      <td align="center"><?php echo $objResult["or_ps"];?></td>
								      <td><a onClick="javascript: return confirm('Confirm Your Print.');" href="editdelprint.php? nameedel=1 & idedel=<?php echo $objResult['id_auto_order'];?>"><button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-print" aria-hidden="true"></i></button></td>
								      <td><a onClick="javascript: return confirm('Are You sure ? Confirm Delete.');" href="delete.php? nameordel=10 & idordel=<?php echo $objResult['id_auto_order'];?>"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-times" aria-hidden="true"></i></button></td>
								    </tr>
								  <?php
								    }
								  ?>
								</table> 
								<br>
                          	</div>
                        	</div><!--/.row-->
                        </section>

<!-- //--------------------------------------------END Section-------------------------------------------------------------- -->

                        <section class="panel">
                          <header class="panel-heading">
                            รายการ การจำหน่ายกางสำเร็จรูป
                          </header>
                          <br><br>
                          	<div class="row">
                          	<div class="col-md-10 col-md-offset-1">
                          		<table width="100%" border="1">
								    <tr>
								    <th width="100"> <div align="center">No.</div></th>
								    <th width="100"> <div align="center">รหัสกางเกง</div></th>
								    <th width="100"> <div align="center">ร้านค้า</div></th>
								    <th width="100"> <div align="center">วันที่</div></th>
								    <th width="100"> <div align="center">Size S/ราคา</div></th>
								    <th width="100"> <div align="center">Size M/ราคา</div></th>
								    <th width="100"> <div align="center">Size L/ราคา</div></th>
								    <th width="100"> <div align="center">Size XL/ราคา</div></th>
								    <th width="100"> <div align="center">Size 34/ราคา</div></th>
								    <th width="100"> <div align="center">Size 36/ราคา</div></th>
								    <th width="100"> <div align="center">Size 38/ราคา</div></th>
								    <th width="100"> <div align="center">Size 40/ราคา</div></th>
								    <th width="100"> <div align="center">ราคารวม</div></th>
								    <th width="100"> <div align="center">ลดราคา</div></th>
								    <th width="100"> <div align="center">สรุปยอดรวม</div></th>
								    <th width="100"> <div align="center">Print</div></th>
								    <th width="100"> <div align="center">Delete</div></th>
								    </tr>
								  <?php
								    $objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
								  	$objDB = mysql_select_db($dbname);
								    $strSQL = "SELECT * FROM shop,sell_pants,sell_pantsprice WHERE id_auto_sellpant = id_auto_spp group by id_auto_sellpant";
								 	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
								  while($objResult = mysql_fetch_array($objQuery))
								  {			
								  ?>
								    <tr>
								      <td align="center"><?php echo $objResult["id_auto_sellpant"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_codel"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_shop"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_date"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_ss"]." / ".$objResult["spp_sp"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_sm"]." / ".$objResult["spp_mp"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_sl"]." / ".$objResult["spp_lp"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_sxl"]." / ".$objResult["spp_xlp"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_s34"]." / ".$objResult["spp_34p"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_s36"]." / ".$objResult["spp_36p"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_s38"]." / ".$objResult["spp_38p"];?></td>
								      <td align="center"><?php echo $objResult["sellpa_s40"]." / ".$objResult["spp_40p"];?></td>
								      <? $priceall = $objResult["spp_total"]+$objResult["spp_discount"];?>
								      <td align="center"><?php echo $priceall;?></td>
								      <td align="center"><?php echo $objResult["spp_discount"];?></td>
								      <td align="center"><?php echo $objResult["spp_total"];?></td>
								      <td><a onClick="javascript: return confirm('Confirm Your Print.');" href="editdelprint.php? nameedel=2 & idedel=<?php echo $objResult['id_auto_sellpant'];?>"><button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-print" aria-hidden="true"></i></button></td>
								      <td><a onClick="javascript: return confirm('Are You sure ? Confirm Delete.');" href="delete.php? nameshoppricepants=11 & idshoppricepants=<?php echo $objResult['id_auto_sellpant'];?>"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-times" aria-hidden="true"></i></button></td>
								    </tr>
								  <?php
								    }
								  ?>
								</table> 
								<br>
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
