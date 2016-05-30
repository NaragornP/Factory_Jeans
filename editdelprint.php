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

// --------------------------------------------Print Order Cut----------------------------------------------------------------------
if ($_GET["nameedel"] == 1) {
	echo '<div class="no-print"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';

$sql = "SELECT * FROM ordersell";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $colp = $row["or_colpant"];
		$code = $row["or_code"];
		$sell = $row["or_out"];
		$num = $row["or_number"];
		$colf = $row["or_colfab"];
		$whif = $row["or_whifab"];
		$ku = $row["or_ku"];
		$tang = $row["or_tang"];
		$sum = $row["or_sum"];
		$typep = $row["or_type"];
		$codejean = $row["or_codejean"];
		$colyep = $row["colyep"];
		$tag = $row["or_tag"];
		$ps = $row["or_ps"];
    }
} else {
    echo "No Data";
}

$conn->close();
?>
<html>
	<head>
		<title>Print_Form</title>
		<style>
			html, body {
                width: 100%;
                height: 100%;
                margin:auto; position:relative;
                padding: 0;
                display: inline-block;
                overflow:hidden;
            }
        </style>    
	</head>
	<body>
		<form name="pri" action="editdel.php">
			<div class="row">			
			  <div class="col-md-8 col-md-offset-3"><h1>ORDER (ใบสั่งตัด)</h1>
			  	<div class="row">
				  <div class="col-md-8">
				  	<center> 
				  	<table class="table table-bordered" style="width:100%;text-align: center">
				  		<thead>
				  			<th style="width:30%" >Title</th>
				  			<th style="width:70%" >Detail</th>
				  		</thead>
						<tr>
							<td>สีกางเกง</td>
							<td><?echo $colp;?></td>
						</tr>
						<tr>
							<td>รหัส</td>
							<td><?echo $code;?></td>
						</tr>
						<tr>
							<td>จ่ายงานให้</td>
							<td><?echo $sell;?></td>
						</tr>
						<tr>
							<td>จำนวน/ตัว</td>
							<td><?echo $num;?></td>
						</tr>
						<tr>
							<td>ผ้าสี/หลา</td>
							<td><?echo $colf;?></td>
						</tr>
						<tr>
							<td>ผ้าขาว/หลา</td>
							<td><?echo $whif;?></td>
						</tr>
						<tr>
							<td>คู่</td>
							<td><?echo $ku;?></td>
						</tr>
						<tr>
							<td>ตั้ง</td>
							<td><?echo $tang;?></td>
						</tr>
						<tr>
							<td>รวม</td>
							<td><?echo $sum;?></td>
						</tr>
						<tr>
							<td>ทรงกางเกง</td>
							<td><?echo $typep;?></td>
						</tr>
						<tr>
							<td>รหัสผ้ายีนส์</td>
							<td><?echo $codejean;?></td>
						</tr>
						<tr>
							<td>ติดป้าย</td>
							<td><?echo $tag;?></td>
						</tr>
						<tr >
							<td>หมายเหตุ</td>
							<td><?echo $ps;?></td>
						</tr>
					</table>
				  </div>
				</div>
			  </div>
			</div>
		  <div class="col-md-4 col-md-offset-4">
			<div class="no-print">
				<button class="btn btn-primary btn-lg btn-block" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
			</div>
		  </div>		
	</form>
	</body>
</html>
<?
//---------------------------------------------------Print Pant Finish------------------------------------------------------------------
} else {

$strSQL = "SELECT * FROM shop,sell_pants,sell_pantsprice WHERE id_auto_sellpant = id_auto_spp AND id_auto_sellpant = '".$_GET["idedel"]."'";
$result = $conn->query($strSQL);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $code = $row["sellpa_codel"];
		$shop = $row["sellpa_shop"];
		$address = $row["address"];
		$date = $row["sellpa_date"];
		$n26 = $row["sellpa_ss"];
		$n28 = $row["sellpa_sm"];
		$n30 = $row["sellpa_sl"];
		$n32 = $row["sellpa_sxl"];
		$n34 = $row["sellpa_s34"];
		$n36 = $row["sellpa_s36"];
		$n38 = $row["sellpa_s38"];
		$n40 = $row["sellpa_s40"];
		$p26 = $row["spp_sp"];
		$p28 = $row["spp_mp"];
		$p30 = $row["spp_lp"];
		$p32 = $row["spp_xlp"];
		$p34 = $row["spp_34p"];
		$p36 = $row["spp_36p"];
		$p38 = $row["spp_38p"];
		$p40 = $row["spp_40p"];

		$dis = $row["spp_discount"];
		$balanc2 = $row["spp_total"];
    }
}else {
    echo "No Data";
}
		$s261 = $n26*$p26;
		$s281 = $n28*$p28;
		$s301 = $n30*$p30;
		$s321 = $n32*$p32;
		$s341 = $n34*$p34;
		$s361 = $n36*$p36;
		$s381 = $n38*$p38;
		$s401 = $n40*$p40;
		$total = $balanc2+$dis;
	echo '<div class="no-print"><i class="fa fa-check-square" aria-hidden="true"></i></div>';
		// echo "<br>".$n26."-".$n28."-".$n30."-".$n32."-".$n34."-".$n36."-".$n38."-".$n40;
		// echo "<br>".$s261."-".$s281."-".$s301."-".$s321."-".$s341."-".$s361."-".$s381."-".$s401."-".$total;
$conn->close();
?>
<html>
	<head>
		<title>Print_Form</title>
		<style>
			html, body {
                width: 100%;
                height: 100%;
                margin:auto; position:relative;
                padding: 0;
                display: inline-block;
                overflow:hidden;
            }
        </style>    
	</head>
	<body>
		<form name="pri" action="editdel.php">
      <div class="row">     
        <div class="col-md-8 col-md-offset-3"><h1>Sold Out (จำหน่ายกางเกง)</h1>
          <div class="row">
          <div class="col-md-8">
            <center> 
            <table class="table table-bordered" style="width:100%;text-align: center">
              <thead>
                <th style="width:30%" >Title</th>
                <th style="width:70%" >Detail</th>
              </thead>
            <tr>
              <td>รหัสกางเกง</td>
              <td><?echo $code;?></td>
            </tr>
            <tr>
              <td>ร้านค้า</td>
              <td><?echo $shop;?></td>
            </tr>
            <tr>
              <td>ที่อยู่</td>
              <td><?echo $address;?></td>
            </tr>
            <tr>
              <td>วันที่</td>
              <td><?echo $date;?></td>
            </tr>
            <tr>
              <td>Size S</td>
              <td><?echo $n26." ตัว x ".$p26." บาท = ".$s261." บาท";?></td>
            </tr>
            <tr>
              <td>Size M</td>
              <td><?echo $n28." ตัว x ".$p28." บาท = ".$s281." บาท";?></td>
            </tr>
            <tr>
              <td>Size L</td>
              <td><?echo $n30." ตัว x ".$p30." บาท = ".$s301." บาท";?></td>
            </tr>
            <tr>
              <td>Size XL</td>
              <td><?echo $n32." ตัว x ".$p32." บาท = ".$s321." บาท";?></td>
            </tr>
            <tr>
              <td>Size 34</td>
              <td><?echo $n34." ตัว x ".$p34." บาท = ".$s341." บาท";?></td>
            </tr>
            <tr>
              <td>Size 36</td>
              <td><?echo $n36." ตัว x ".$p36." บาท = ".$s361." บาท";?></td>
            </tr>
            <tr>
              <td>Size 38</td>
              <td><?echo $n38." ตัว x ".$p38." บาท = ".$s381." บาท";?></td>
            </tr>
            <tr>
              <td>Size 40</td>
              <td><?echo $n40." ตัว x ".$p40." บาท = ".$s401." บาท";?></td>
            </tr>
            <tr >
              <td>ราคารวม</td>
              <td><?echo "ราคาเต็ม ".$total." ลด ".$dis." บาท = ".$balanc2." บาท";?></td>
            </tr>
          </table>
          </div>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
      <div class="no-print">
        <button class="btn btn-primary btn-lg btn-block" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
      </div>
      </div>
  </form>
	</body>
</html>
<?}?>