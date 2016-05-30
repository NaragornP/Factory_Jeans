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

 // echo $code." | ".$typep." | ".$gender." | ".$s ." | ".$m." | ".$l." | ".$xl." | ".$s34." | ".$s36." | ".$s38." | ".$s40." | ".$cy." | ".$cp." | ".$date.
 // " | ".$pic." | ".$codeSt."<br>";


$sql = "SELECT * FROM pants WHERE id_code_p = '".$code."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $r = $row["id_code_p"];
        // echo "r-".$r;
    }
} 

if ($r == $code) {
	?>
	<meta http-equiv="refresh" content="3;URL=Add_pants.php" /> 
	<br><br><br><br><br>
	<br><br><br><br><br>
	<div class="alert alert-danger">
	  <center><h1><strong>Warning </strong> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Pants was already.</h1>
	</div>
	<?
} else {

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname) or die("Error Connect to Database");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO pants (id_code_p, p_type, p_gender,p_s,p_m,p_l,p_xl,p_34,p_36,p_38,p_40,p_coly,p_colp,p_date,p_code_pak)
			VALUES ('$code', '$typep','$gender','$s','$m','$l','$xl','$s34','$s36','$s38','$s40','$cy','$cp','$date' ,'$codeSt' )";

			if ($conn->query($sql) === TRUE) {
			    // echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}


	 if(move_uploaded_file($_FILES["pic"]["tmp_name"],"pictureJean/jeans/".$_FILES["pic"]["name"]))
		{
			// echo "<br>Copy/Upload Complete<br>";

			//*** Insert Record ***//
			$objConnect = @mysql_connect($servername, $username, $password);
			$objDB = @mysql_select_db($dbname);
			$strSQL = "UPDATE pants SET p_picture = '".$_FILES["pic"]["name"]."' WHERE id_code_p = '$code' ";
			$objQuery = mysql_query($strSQL);		
		}
?>
<meta http-equiv="refresh" content="3;URL=Add_pants.php" /> 
<br><br><br><br><br>
<br><br><br><br><br>
<div class="alert alert-success">
  <center><h1><strong>Success!</strong> <i class="fa fa-plus-circle" aria-hidden="true"></i> Pants Successful.</h1>
</div>
<?
}
$conn->close();	
?>