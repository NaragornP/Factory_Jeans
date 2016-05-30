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
$fs = $_POST["fs1"];
$num = $_POST["number1"];
$date = $_POST["date1"];
$picp = $_POST["filUpload"];

// echo $code."/".$fs."/".$num."/".$date."/".$picp."<br>";
		$sql = "SELECT * FROM studs WHERE '".$code."' = st_code";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $cod = $row["st_code"];
		        $num1 = $row["st_number"];
		    }
		} else {
		    echo "0 results";
		}	
		
		$numUpdate = $num1 + $num;

		// echo $cod."/".$code."/".$numUpdate;


		if ($cod == $code) {
			$sql = "UPDATE studs SET st_from ='$fs', st_number = '$numUpdate', st_date = '$date' WHERE st_code = '$code' ";
				if ($conn->query($sql) === TRUE) {
			    // echo "<br>Record updated successfully";
				} else {
				    // echo "Error updating record: " . $conn->error;
				}	

			$sql1 = "INSERT INTO equip_transection (et_stud, et_date_in, et_number_in,stud_id) VALUES ('".$code."','".$date."','".$num."',1)";
				if ($conn->query($sql1) === TRUE) {
			    // echo "<br>Record updated successfully";
				} else {
				    // echo "Error updating record: " . $conn->error;
				}	
		}else{
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"pictureJean/studs/".$_FILES["filUpload"]["name"]))
		 	{
				// echo "Copy/Upload Complete<br>";

				$objConnect = mysql_connect($servername,$username,$password) or die("Error Connect to Database");
				$objDB = mysql_select_db($dbname);
				$strSQL = "INSERT INTO studs ";
				$strSQL .="(st_code,st_from,st_number,st_picture,st_date) VALUES ('".$code."','".$fs."','".$num."','".$_FILES["filUpload"]["name"]."','".$date."')";
				$objQuery = mysql_query($strSQL);

				$sql1 = "INSERT INTO equip_transection (et_stud, et_date_in, et_number_in,stud_id) VALUES ('".$code."','".$date."','".$num."',1)";
				if ($conn->query($sql1) === TRUE) {
			    // echo "<br>Record updated successfully";
				} else {
				    // echo "Error updating record: " . $conn->error;
				}		

			}
		}

$conn->close();
header('Location: dum.php');
?>        
