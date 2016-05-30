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

$code = $_POST["code2"];
// $col2 = $_POST["color2"];
// $fs = $_POST["fs2"];
$num2 = $_POST["number2"];
$date = $_POST["date2"];

// echo $code."/".$col2."/".$fs."/".$num."/".$date;

$sql = "SELECT * FROM studs WHERE '".$code."' = st_code";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $num = $row["st_number"];
    }
} else {
    // echo "0 results";
}


if ($num2>$num) {
	echo "<br><br><br><br><br><br><br><br><br><br>";
	echo '<div class="alert alert-danger"><center><h1><strong>Error </strong><i class="fa fa-exclamation" aria-hidden="true"></i> Number is over exist.</h1></div>';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=dum.php">';
} else {
	// $objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
	// $objDB = mysql_select_db($dbname);
	// $strSQL = "INSERT INTO studs_out ";
	// $strSQL .="(sto_code,sto_number,sto_date) VALUES ('".$code."','".$num2."','".$date."')";
	// $objQuery = mysql_query($strSQL);	

	$numUpdate = $num - $num2;
	// echo $yardUpdate;

	$sql = "UPDATE studs SET st_number='".$numUpdate."' WHERE st_code = '$code' ";
		if ($conn->query($sql) === TRUE) {
		    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}

	$sql = "INSERT INTO equip_transection (et_stud, et_date_out, et_number_out,stud_id) VALUES ('".$code."','".$date."','".$num2."',1)";
		if ($conn->query($sql) === TRUE) {
	    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}	



	$conn->close();
	header('Location: dum.php');
}
?>        