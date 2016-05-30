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

$code = $_POST["code2"];
$yard = $_POST["yard2"];
$from = $_POST["fs2"];
$color = $_POST["color2"];
$date = $_POST["date2"];
echo $code;

// echo $code."/".$fs."/".$num."/".$date."/".$picp."<br>";
$sql = "SELECT * FROM jeans WHERE '".$code."' = je_code";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $yard1 = $row["je_yard"];
    }
} else {
    // echo "0 results";
}	

if ($yard>$yard1) {
	echo "<br><br><br><br><br><br><br><br><br><br>";
	echo '<div class="alert alert-danger"><center><h1><strong>Error </strong><i class="fa fa-exclamation" aria-hidden="true"></i> Number is over exist.</h1></div>';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=Pjean.php">';
} else {

	// $objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
	// $objDB = mysql_select_db($dbname);
	// $strSQL = "INSERT INTO jeans_out ";
	// $strSQL .="(jo_code,jo_yard,jo_date) VALUES ('".$code."','".$yard."','".$date."')";
	// $objQuery = mysql_query($strSQL);	

	$yardUpdate = $yard1 - $yard;
	// echo $yardUpdate;

	$sql = "UPDATE jeans SET je_yard='".$yardUpdate."' WHERE je_code = '$code' ";
		if ($conn->query($sql) === TRUE) {
		    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}
	$sql = "INSERT INTO equip_transection (et_jean, et_date_out, et_number_out,jean_id) VALUES ('".$code."','".$date."','".$yard."',1)";
		if ($conn->query($sql) === TRUE) {
	    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}
	$conn->close();
	header('Location: Pjean.php');
}
?>        
