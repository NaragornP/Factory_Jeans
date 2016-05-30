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
$picF = $_POST["picF"];

 // echo $code." | ".$picF." | ";


 	if(move_uploaded_file($_FILES["picF"]["tmp_name"],"pictureJean/linePak/".$_FILES["picF"]["name"]))
	{
		// echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$objConnect = @mysql_connect($servername,$username,$password) or die("Error Connect to Database");
		$objDB = @mysql_select_db($dbname);
		$strSQL = "INSERT INTO fortnight ";
		$strSQL .="(f_code, f_picture) VALUES ('".$_POST["code"]."','".$_FILES["picF"]["name"]."')";
		$objQuery = mysql_query($strSQL);		
	}
// header('Location:pattern.php');
?>
<meta http-equiv="refresh" content="3;URL=pattern.php" /> 
<br><br><br><br><br>
<br><br><br><br><br>
<div class="alert alert-success">
  <center><h1><strong>Success!</strong> <i class="fa fa-plus-circle" aria-hidden="true"></i> Successful.</h1>
</div>