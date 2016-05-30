<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "factoryjeans";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
$server = "localhost";
$user = "root";
$pass = "rootroot";
$db = "factoryjeans";

// Create connection
$conn2 = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
} 

	$intRejectTime = 10; // Minute
	$sql22 = "UPDATE user_system SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
	$query = mysqli_query($conn2,$sql22);
?>