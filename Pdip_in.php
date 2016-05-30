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

$code = $_POST["code1"];
$yard = $_POST["yard1"];
$from = $_POST["fs1"];
$color = $_POST["color1"];
$date = $_POST["date1"];


// echo $code."/".$yard."/".$from."/".$color."-".$date."<br>"; 

		$sql = "SELECT * FROM calico WHERE '".$code."' = ca_code";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $cod = $row["ca_code"];
		        $yard1 = $row["ca_yard"];
		    }
		} else {
		    echo "0 results";
		}	
		
		$yardUpdate = $yard1 + $yard;

		echo $cod."/".$code."/".$yardUpdate;


if ($cod == $code) {

	$sql = "UPDATE calico SET ca_yard ='$yardUpdate', ca_from = '$from', ca_color = '$color', ca_date = '$date' WHERE ca_code = '$code' ";
		if ($conn->query($sql) === TRUE) {
	    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}
	$sql1 = "INSERT INTO equip_transection (et_calico, et_date_in, et_number_in,calico_id) VALUES ('".$code."','".$date."','".$yard."',1)";
		if ($conn->query($sql1) === TRUE) {
	    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}	

	
}else{
	$objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
	$objDB = mysql_select_db($dbname);
	$strSQL = "INSERT INTO calico ";
	$strSQL .="(ca_code,ca_yard,ca_from,ca_color,ca_date) VALUES ('".$code."','".$yard."','".$from."','".$color."','".$date."')";
	$objQuery = mysql_query($strSQL);	

	$sql1 = "INSERT INTO equip_transection (et_calico, et_date_in, et_number_in,calico_id) VALUES ('".$code."','".$date."','".$yard."',1)";
		if ($conn->query($sql1) === TRUE) {
	    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}
}
		
$conn->close();
header('Location: Pdip.php');
?>        
