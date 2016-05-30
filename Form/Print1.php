<?
ob_start();
session_start();
if(empty($_SESSION['sessionname'])){//จะใช้ isset ก็ได้ครับ
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM price";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $bails = $row["bail"];
        // ราคาวันแต่ละวัน
        $n = $row["normal"];
        $h = $row["holiday"];
        $s = $row["special"];
    }
} else {
    echo "0 results";
}
$conn->close();

			$strStartDate = $_POST["start"];
			// delete endDate -1
			$deleteEndDate = date($_POST["end"]);
			$End_d = date("d-m-Y",strtotime("-1 days",strtotime($deleteEndDate)));
			$strEndDate = $End_d;
			$intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1; 
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Summary</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<style>
				html, body{ 
		                  padding:0px;
		                  margin:0px;
		                  width: 100%;
		                  height: 100%;
		                  overflow-y: hidden;
		                  overflow-x: hidden;
		                  }
	        	textarea {
	                resize: none;
	                }
				a:link {
				    text-decoration: underline;
				}

				a:visited {
				    text-decoration: underline;
				}

				a:hover {
				    text-decoration: underline;
				}

				a:active {
				    text-decoration: underline;
				}
        </style>
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="plugins/modernizr.js"></script>
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>
		<script type="text/javascript" src="js/template.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script>
		function myFunction() {
			// var al = document.formsum.all.value
		    window.print();
		}
		</script>

        <script src="js/jquery.js"></script>
        <script src="js/jquery.datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">

		<link rel="stylesheet" href="css/selectimg.css">
		<style type="text/css">
			#results { float:center; margin:10px; padding:10px; border:1px solid; background:gray; }
		</style>
	</head>
	<body class="no-trans">
		<?
		$idcard = $_POST["idc"];
		$name = $_POST["name"];
		$sername = $_POST["sname"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$start = $_POST["start"];
		$end = $_POST["end"];
		$address = $_POST["address"];
		$amount = $_POST["amount"];
		$roomname = $_POST["roomname"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		$deposit = $amount * $bails;

		// report
		$normal = $_POST["nor"];
		$holiday = $_POST["holi"];
		$special = $_POST["spec"];
		$total = $_POST["total_d"];

		// echo $normal."<br>";
		// echo $holiday."<br>";
		// echo $special."<br>";
		// echo $total."<br>";
		// echo $intTotalDay."<br>";

		// FILE PDF + move file -----------------------------------
		$FILEname = $_POST["namefile"];
		// echo $FILEname;
	    $source = "WIFI/$total/$FILEname";
	    $destination = "WIFI/useWifi/$FILEname";
	                  
	    // if (rename($source, $destination)) {
	    //    echo "The file was moved successfully.", "<br>";
	    // } 
	    // else {
	    //    echo "The specified file could not be moved. Please try again.", "<br>";
	    // }
	    // END move file -------------------------------------------

		// logic price room
		$p_nor =$normal * $n;
		$p_hor =$holiday * $h;
		$p_spe =$special * $s;

		$gs = $p_nor + $p_hor + $p_spe;
		$d = $gs*$amount;
		$sum = $bails + $d;
		// echo $p_nor."-".$p_hor."-".$p_spe."=".$sum;

		// price/room
		$Room_Price = $d;

		// d-m-y
		$dayy = date("d-m-Y");
		$month = substr(date("d-m-Y"),-7,2);
		$year = substr(date("d-m-Y"),-4,4);
		// echo $dayy."<br>";
		// echo $cut."<br>";
		// echo $y."<br>";


		$all = "ID Card : ".$idcard."<br>".
		"Name & Surname : ".$name."\t".$sername."<br>".
		"E-mail : ".$email."<br>".
		"Telephone : ".$phone."<br>".
		"Room : ".$roomname."<br>".
		"Start date : ".$start."<br>".
		"End date : ".$end."<br>".
		"User : ".$user."<br>".
		"Password : ".$pass."<br>";
		// echo $all;


		?>
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
		<header class="fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="header-left clearfix">
							<div class="logo smoo col-md-offset-3th-scroll">
								<a href="#banner"><img id="logo" src="images/new_logo.png" alt="Worthy" class="img-circle" style="width:100px;height:100px;"></a>
							</div>
							<div class="site-name-and-slogan smooth-scroll"><br>
								<div class="site-name"><a href="#banner">De Phunchai</a></div>
								<div class="site-slogan" style="color:white;">Hometel <a style="color:#00BFFF;">Lamphun</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="header-right clearfix">
							<div class="main-navigation animated">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
                        						<?
												if($_SESSION['sessionadmin']=="admin"){
													echo "<li class=''><a href='indexAdmin.php'>
													<h4 class='media-heading'><span style='color:#00FF00;'>Home</span></h4>
													</a></li>";
												}else
												echo "<li class=''><a href='index.php'>
													<h4 class='media-heading'><span style='color:#00FF00;'>Home</span></h4>
													</a></li>";
												?>
												<li><a href="#contact">Contact</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<div class="translucent-bg bg-image-2" style="height:100%">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 class="text-center">Sum<span>mary </span><i class="fa fa-file-text-o"></i></h1>
				<br><br>
				<!-- <div class="space"></div> -->
				<form action="AddDB.php" method="post" onsubmit="return confirm('Are you sure ! You want to Complete.')" enctype="multipart/form-data" >
		  			<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<div class="media">
									<div class="media text-left">
										<table class="table table-condensed" >
											<thead align="center">
												<td>
													<h4 class="media-heading"></i> Title </h4>
												</td>
												<td>
													<h4 class="media-heading"></i> Discription </h4>
												</td>
											</thead>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-child"></i> First Name </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$name; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-child"></i> Last Name </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$sername; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-credit-card"></i> ID Card / Passport </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$idcard; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-envelope-o"></i> E-mail </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$email; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-phone"></i> Telephone </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$phone; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-home"></i> Address </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$address; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-calendar"></i> Date Check-in </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$start; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-calendar"></i> Date Check-out </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$end; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><span> Room</span>  Amount </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$amount; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><span> Room</span>  Name </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$roomname; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-user"></i> User / Password</h4>
												</td>
												<td style="background-color:red;" align="center">
													<h4 class="media-heading" style="color:;padding: 3px;">
														<!-- <select name="namefile" class="btn btn-default dropdown-toggle form-control" required>
		 													<option class="placeholder" selected disabled value="">-- Please Select Item --</option> -->
															<?php
															$objOpen = opendir("WIFI/".$intTotalDay);
															$count=0;
															while (($file = readdir($objOpen)) !== false)
															{	if($count==0){
																if(($file==".")||($file=="..")){ continue;  }
															?>
																<!-- <option class="form-control" value="<? //echo $file; ?>"></option> -->
																<a href="WIFI/<? echo $intTotalDay; ?>/<? echo $file; ?>" target="_blank" >
																<? echo $file; ?><i class="fa fa-print"></i>
																</a>
																<input type="hidden" name="namefile" value="<? echo $file; ?>">
															<? $count++; }}
															?>
														<!-- </select> -->
													</h4>
												</td>
											</tr>
											<!-- <tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-key"></i> Password </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? //echo ": ".$pass; ?></h4>
												</td>
											</tr> -->
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-money"></i> Deposit </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$bails; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-money"></i> Room Price </h4>
												</td>
												<td>
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$Room_Price; ?></h4>
												</td>
											</tr>
											<tr>
												<td>
													<h4 class="media-heading"><i class="fa fa-money"></i> Total Price</h4>
												</td>
												<td style="background-color:green;">
													<h4 class="media-heading" style="color:;padding: 3px;"><? echo ": ".$sum; ?></h4>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<!-- <div class="space visible-xs"></div> -->
							<div class="col-sm-6">
								<div class="row">
									<br>
									<div class="media">
										<div class="media text-left">
											<table style="width:100%;">
												<tr>
													<td style="width:45%;">
														<center>
														<h4 class="media-heading"><i class="fa fa-picture-o"></i> Picture : </h4>
													</td>
													<td>
														<input type="file" name="filUpload" class="btn btn-danger" required>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<br>
									<div class="col-sm-6">
										<center><div id="results">Your captured</div></center>
									</div>
			  						<div class="col-sm-6">
										<div class="container">
											<br>
									 	<button type="button" class="btn btn-info " style="width:20%;" data-toggle="modal" data-target="#myModal"><h5><i class="fa fa-camera"></i> Open Camera</h5></button>
										<div class="modal fade" id="myModal" role="dialog">
									    	<div class="modal-dialog">
									    		<div class="modal-content">
									        		<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													   	<h4 class="modal-title">Capture is here.</h4>
													</div>
													<div class="modal-body">
														<center><div id="my_camera"></div></center>
														<!-- First, include the Webcam.js JavaScript Library -->
														<script type="text/javascript" src="webcam/webcam.js"></script>
														<!-- Configure a few settings and attach camera -->
														<script language="JavaScript">
															Webcam.set({
																width: 320,
																height: 240,
																image_format: 'jpeg',
																jpeg_quality: 90
															});
															Webcam.attach( '#my_camera' );
														</script>
														<!-- A button for taking snaps -->
														<form>
															<center>
																<input type="button" class="btn btn-primary btn-lg" value="Take Snapshot" onClick="take_snapshot()">
															</center>
														</form>
														<!-- Code to handle taking the snapshot and displaying it locally -->
														<script language="JavaScript">
															function take_snapshot() {
																// take snapshot and get image data
																Webcam.snap( function(data_uri) {
																	// display results in page
																	document.getElementById('results').innerHTML = 
																		'<h4 align="center">Your image</h4>' + 
																		'<img src="'+data_uri+'"/>';
																	Webcam.upload( data_uri, 'upload.php', function(code, text) {
													                });
																} );
															}
														</script>
									        		</div>
									        		<div class="modal-footer">
									          			<button type="submit" class="btn btn-default" data-dismiss="modal">ok</button>
									        		</div>
									      		</div>
									    	</div>
									  	</div>
									  	<br><br>
									  	<button style="width:20%;" onclick="myFunction()" class="btn btn-primary"><h5><i class="fa fa-print"></i> Print</h5></button>
									</div>
			  						</div>
								</div>
								<!-- <object width="550" height="300">
								<param name="movie" value="webcam/croflash.swf">
								<embed src="webcam/croflash.swf" width="550" height="300">
								</embed>
								</object> -->

								<table style="width:100%;">
										<input type="hidden" name="idc" value="<? echo $idcard ;?>">
										<input type="hidden" name="name" value="<? echo $name; ?>">
										<input type="hidden" name="sname" value="<? echo $sername ;?>">
										<input type="hidden" name="email" value="<? echo $email ;?>">
										<input type="hidden" name="phone" value="<? echo $phone ;?>">
										<input type="hidden" name="start" value="<? echo $start ;?>">
										<input type="hidden" name="end" value="<? echo $end ;?>">
										<input type="hidden" name="address" value="<? echo $address ;?>">
										<input type="hidden" name="amount" value="<? echo $amount ;?>">
										<input type="hidden" name="roomname" value="<? echo $roomname ;?>">
										<input type="hidden" name="user" value="<? echo $user ;?>">
										<input type="hidden" name="pass" value="<? echo $pass ;?>">
										<input type="hidden" name="bail" value="<? echo $deposit; ?>">
										<input type="hidden" name="all" value="<? echo $all; ?>">
										<input type="hidden" name="p_nor" value="<? echo $p_nor; ?>">
										<input type="hidden" name="p_hor" value="<? echo $p_hor; ?>">
										<input type="hidden" name="p_spe" value="<? echo $p_spe; ?>">
										<input type="hidden" name="sum" value="<? echo $sum; ?>">

										<input type="hidden" name="Room_Price" value="<? echo $Room_Price; ?>">
										<!-- day -->
										<input type="hidden" name="normal_d" value="<? echo $normal; ?>">
										<input type="hidden" name="holiday_d" value="<? echo $holiday; ?>">
										<input type="hidden" name="special_d" value="<? echo $special; ?>">
										<input type="hidden" name="total_d" value="<? echo $total; ?>">
										<!-- d-m-y -->
										<input type="hidden" name="month" value="<? echo $month; ?>">
										<input type="hidden" name="year" value="<? echo $year; ?>">
									<tr>
										<td style="width:100%;height:100%;">
											<br>
											<button style="height:80px;" name="subform" type="submit" class="btn btn-success btn-lg btn-block"><h2><i class="fa fa-check"></i> Complete</h2></button>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<?
ob_end_flush();
?>