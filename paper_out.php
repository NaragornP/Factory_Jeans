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
$num2 = $_POST["number2"];
$date = $_POST["date2"];
// echo $code;

// echo $code."/".$fs."/".$num."/".$date."/".$picp."<br>";

$sql = "SELECT * FROM tag_paper WHERE '".$code."' = tp_code";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $num = $row["tp_number"];
    }
} else {
    // echo "0 results";
}	

if ($num2>$num) {
	echo "<br><br><br><br><br><br><br><br><br><br>";
	echo '<div class="alert alert-danger"><center><h1><strong>Error </strong><i class="fa fa-exclamation" aria-hidden="true"></i> Number is over exist.</h1></div>';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=paper.php">';
} else {

	// $objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
	// $objDB = mysql_select_db($dbname);
	// $strSQL = "INSERT INTO tag_paper_out ";
	// $strSQL .="(tp_code,tp_number,tp_date) VALUES ('".$code."','".$num2."','".$date."')";
	// $objQuery = mysql_query($strSQL);	

	$numUpdate = $num - $num2;
	// echo $yardUpdate;

	$sql = "UPDATE tag_paper SET tp_number='".$numUpdate."' WHERE tp_code = '$code' ";
		if ($conn->query($sql) === TRUE) {
		    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}
	$sql = "INSERT INTO equip_transection (et_tagpaper, et_date_out, et_number_out,paper_id) VALUES ('".$code."','".$date."','".$num2."',1)";
		if ($conn->query($sql) === TRUE) {
	    // echo "<br>Record updated successfully";
		} else {
		    // echo "Error updating record: " . $conn->error;
		}	
	$conn->close();
	header('Location: paper.php');
}
?>        
