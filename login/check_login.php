<?php
	session_start();
	require_once("connect.php");
	
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

	// function decode($string,$key) {
	//     $key = @sha1($key);
	//     $strLen = @strlen($string);
	//     $keyLen = @strlen($key);
	//     for ($i = 0; $i < $strLen; $i+=2) {
	//         $ordStr = @hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
	//         if ($j == $keyLen) { $j = 0; }
	//         $ordKey = @ord(substr($key,$j,1));
	//         $j++;
	//         $hash .= @chr($ordStr - $ordKey);
	//     }
	//     return $hash;
	// }
	$strUsername = mysqli_real_escape_string($con,$_POST['txtUsername']);
	$strPassword = mysqli_real_escape_string($con,$_POST['txtPassword']);

	$epass = encode($strPassword,"$#*@&$(%&#&"); 
	// $r = decode($y,"$#*@&$(%&#&");

// echo $epass;

	$strSQL = "SELECT * FROM user_system WHERE Username = '".$strUsername."' 
	and Password = '".$epass."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);

	if(!$objResult)
	{
		echo "<br><br><br><br><br><br><br><br><br><br>";
		echo '<div class="alert alert-danger"><center><h1><strong>Error ! </strong><br><i class="fa fa-exclamation" aria-hidden="true"></i> Username and Password Incorrect !</h1></div>';
		echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=login.php">';
	}
	else
	{
		if($objResult["LoginStatus"] == 1)
		{
			echo "<br><br><br><br><br><br><br><br><br><br>";
			// echo "'".$strUsername."' Exists login!";
			echo '<div class="alert alert-danger"><center><h1><strong>Error ! </strong><br>';
			echo "'".$strUsername."' Exists login!</h1></div>";
			echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=login.php">';
			exit();
			// header("location: login.php");
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE user_system SET LoginStatus = 1 , LastUpdate = NOW() WHERE UserID = '".$objResult["UserID"]."' ";
			$query = mysqli_query($con,$sql);

			//*** Session
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Username"] = $objResult["Username"];
			$_SESSION["Name"] = $objResult["Name"];
			$_SESSION["Surname"] = $objResult["Surname"];
			$_SESSION["status"] = $objResult["LoginStatus"];
			$_SESSION["LastUpdate"] = $objResult["LastUpdate"];
			session_write_close();

			//*** Go to Main page
			header("location: ../index.php");
		}

	}
	mysqli_close($con);
?>