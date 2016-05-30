<?php
session_start();
include 'connect.php';
include 'header.html';

  // echo $_SESSION['status'].$_SESSION['Username'];
if(!isset($_SESSION['UserID']))
  {
    echo "<br><br><br><br><br><br><br><br><br><br>";
    echo '<div class="alert alert-info">';
    echo '<center><h1><strong>Please ! </strong>Login.</h1>';
    echo "</div>";
    echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=../login/login.php">';
    exit();
  
  }

    function encode($string,$key) {
      $key = sha1($key);
      $strLen = strlen($string);
      $keyLen = strlen($key);
      for ($i = 0; $i < $strLen; $i++) {
          $ordStr = ord(substr($string,$i,1));
          if ($j == $keyLen) { $j = 0; }
          $ordKey = ord(substr($key,$j,1));
          $j++;
          $hash .= strrev(base_convert(dechex($ordStr + $ordKey),16,36));
      }
      return $hash;
  }

  function decode($string,$key) {
      $key = sha1($key);
      $strLen = strlen($string);
      $keyLen = strlen($key);
      for ($i = 0; $i < $strLen; $i+=2) {
          $ordStr = hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
          if ($j == $keyLen) { $j = 0; }
          $ordKey = ord(substr($key,$j,1));
          $j++;
          $hash .= chr($ordStr - $ordKey);
      }
      return $hash;
  }
  $newpass = $_POST["txtConPassword"];

  $epass = encode($newpass,"$#*@&$(%&#&"); 
  // $r = decode($y,"$#*@&$(%&#&");

// echo $epass;
  

	$sql = "UPDATE user_system SET Password='".$epass."' WHERE UserID='".$_SESSION['UserID']."'";

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

$conn->close();
	header('Location: ../profile.php');
?>