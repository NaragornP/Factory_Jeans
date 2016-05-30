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

$code = $_POST["code1"];
$col1 = $_POST["color1"];
$fs = $_POST["fs1"];
$num = $_POST["number1"];
$date = $_POST["date1"];

// echo $code."/".$col1."/".$fs."/".$num."/".$date;
		$sql = "SELECT * FROM dai WHERE '".$code."' = k_code";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $cod = $row["k_code"];
		        $num1 = $row["k_number"];
		    }
		} else {
		    // echo "0 results";
		}	
		
		$numUpdate = $num1 + $num;

		if ($cod == $code) {
			$sql = "UPDATE dai SET k_color ='$col1', k_from = '$fs', k_number = '$numUpdate' , k_date = '$date' WHERE k_code = '$code' ";
				if ($conn->query($sql) === TRUE) {
			    // echo "<br>Record updated successfully";
				} else {
				    // echo "Error updating record: " . $conn->error;
				}

			$sql1 = "INSERT INTO equip_transection (et_dai, et_date_in, et_number_in,dai_id) VALUES ('".$code."','".$date."','".$num."',1)";
				if ($conn->query($sql1) === TRUE) {
				   // echo "<br>Record updated successfully";
				} else {
				    // echo "Error updating record: " . $conn->error;
				}	
		}else{
			$sql2 = "INSERT INTO dai (k_code,k_color,k_from,k_number,k_date) VALUES ('$code','$col1','$fs','$num','$date')";
			if ($conn->query($sql2) === TRUE) {
			    // echo "New record created successfully";
			} else {
			    // echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$sql1 = "INSERT INTO equip_transection (et_dai, et_date_in, et_number_in,dai_id) VALUES ('".$code."','".$date."','".$num."',1)";
				if ($conn->query($sql1) === TRUE) {
				   // echo "<br>Record updated successfully";
				} else {
				    // echo "Error updating record: " . $conn->error;
				}	
		}
$conn->close();
header('Location: dai.php');
?>        
