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

$colp = $_POST["colp"];
$code = $_POST["code"];
$sell = $_POST["sell"];
$num = $_POST["num"];
$colf = $_POST["colfab"];
$whif = $_POST["whifab"];
$ku = $_POST["ku"];
$tang = $_POST["tang"];
$sum = $_POST["sum"];
$typep = $_POST["typep"];
$codejean = $_POST["codejean"];
$colyep = $_POST["colyep"];
$tag = $_POST["tag"];
$ps = $_POST["ps"];

// echo "<br>".$colp." | ".$code." | ".$sell." | ".$num ." | ".$colf." | ".$whif." | ".$ku." | ".$tang." | ".$sum." | ".$typep." | ".$codejean." | ".$tag." | ".$ps;

$sql = "INSERT INTO ordersell (or_colpant,or_code,or_out,or_number,or_colfab,or_whifab,or_ku,or_tang,or_sum,or_type,or_codejean,or_tag,or_ps)
 VALUES ('$colp','$code','$sell','$num','$colf','$whif','$ku','$tang','$sum','$typep','$codejean','$tag','$ps')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="no-print"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>';
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<div class="no-print"><i class="fa fa-times" aria-hidden="true"></i></div>';
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
		<form name="pri" action="form1.php">
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
