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
  $username = $_POST["username"];
  $pass = $_POST["conpass"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];

  $sqlinu = "SELECT * FROM user_system WHERE Username='". $username."'";
	$result = $conn->query($sqlinu);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $uname = $row["Username"];
	        $name = $row["Name"];
	        $sname = $row["Surname"];
	    }
	} 

	 if ($username==$uname) {		
		echo "<br><br><br><br><br><br><br><br><br><br>";
		echo '<div class="alert alert-danger">';
		echo '<center><h1><strong>Username </strong>is repeat.</h1>';
		echo "</div>";
		echo '<META HTTP-EQUIV="Refresh" CONTENT="4;URL=add_user.php">';
	} else {
		function encode($string,$key) {
	    $key = @sha1($key);
	    $strLen = @strlen($string);
	    $keyLen = @strlen($key);
	    for ($i = 0; $i < $strLen; $i++) {
	        $ordStr = @ord(substr($string,$i,1));
	        if (@$j == @$keyLen) { @$j = 0; }
	        $ordKey = @ord(substr($key,$j,1));
	        @$j++;
	        @$hash .= @strrev(base_convert(dechex($ordStr + $ordKey),16,36));
	    }
	    return $hash;
		}
		$epass = encode($pass,"$#*@&$(%&#&"); 
		
		$sql = "INSERT INTO user_system (Username, Password, Name,Surname)
		VALUES ('$username', '$epass', '$name','$surname')";

		if ($conn->query($sql) === TRUE) {
		    // echo "New record created successfully";
		    echo "<br><br><br><br><br><br><br><br><br><br>";
			echo '<div class="alert alert-success">';
			echo '<center><h1><strong>Successfully </strong>is add user.</h1>';
			echo "</div>";
		    echo '<META HTTP-EQUIV="Refresh" CONTENT="4;URL=add_user.php">';
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
$conn->close();
?>