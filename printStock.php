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

$code = $_POST["code"];
$typep = $_POST["typep"];
$gender = $_POST["gender"];
$s = $_POST["ss"];
$m = $_POST["sm"];
$l = $_POST["sl"];
$xl = $_POST["sxl"];
$s34 = $_POST["s34"];
$s36 = $_POST["s36"];
$s38 = $_POST["s38"];
$s40 = $_POST["s40"];
$cy = $_POST["colorY"];
$cp = $_POST["colorP"];
$date = $_POST["date"];
$pic = $_POST["pic"];
$codeSt = $_POST["codeSt"];
 echo $code." | ".$typep." | ".$gender." | ".$s ." | ".$m." | ".$l." | ".$xl." | ".$s34." | ".$s36." | ".$s38." | ".$s40." | ".$cy." | ".$cp." | ".$date.
 " | ".$pic." | ".$codeSt;
?>
<html>
	<head>
		<script>
		function myFunction() {
		    window.print();
		}
		</script>
		<style type="text/css">
		@media print{
		.no-print{ display:none;}
		}
		</style>
	</head>
	<body>
		<div class="row">
		  <div class="col-md-8 col-md-offset-4">
		  	<div class="row">
			  <div class="col-xs-4">
			  	<center>
			  	<table class="table table-bordered">
			  		<thead>
			  			<th>Title</th>
			  			<th>Detail</th>
			  		</thead>
					<tr>
						<td>รหัส</td>
						<td><?echo $code;?></td>
					</tr>
					<tr>
						<td>ชนิด</td>
						<td><?echo $typep;?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?echo $gender;?></td>
					</tr>
					<tr>
						<td>สีที่ใช้เย็บ</td>
						<td><?echo $cy;?></td>
					</tr>
					<tr>
						<td>สีที่ใช้โพ้ง</td>
						<td><?echo $cp;?></td>
					</tr>
					<tr>
						<td>วันที่/เวลา</td>
						<td><?echo $date;?></td>
					</tr>
					<tr>
						<td>รหัสแบบกางเกง</td>
						<td><?echo $codeSt;?></td>
					</tr>
				</table>
			  </div>
			  <div class="col-xs-4">
				<table class="table table-bordered">
					<thead>
						<th>Size</th>
						<th>Number</th>
					</thead>
					<tr>
						<td>S</td>
						<td><?echo $s;?></td>
					</tr>
					<tr>
						<td>M</td>
						<td><?echo $m;?></td>
					</tr>
					<tr>
						<td>L</td>
						<td><?echo $l;?></td>
					</tr>
					<tr>
						<td>XL</td>
						<td><?echo $xl;?></td>
					</tr>
					<tr>
						<td>34</td>
						<td><?echo $s34;?></td>
					</tr>
					<tr>
						<td>36</td>
						<td><?echo $s36;?></td>
					</tr>
					<tr>
						<td>38</td>
						<td><?echo $s38;?></td>
					</tr>
					<tr>
						<td>40</td>
						<td><?echo $s40;?></td>
					</tr>
				</table>
			  </div>
			</div>
		  </div>
		</div>




		<div class="no-print">
		<button onclick="myFunction()">Print this page</button>
		</div>
	</body>
</html>
