<?
include '../include/connect.php';

$user = $_POST["username"];
$pass = $_POST["pass1"];
$conpass = $_POST["pass2"];

$sql = "SELECT * FROM user_system WHERE Username = '".$user."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $username = $row["Username"];
        $id = $row["UserID"];
    }
} else {
    echo "<br><br><br><br><br><br><br><br><br><br>";
    echo '<div class="alert alert-info">';
    echo '<center><h1><strong>Username </strong>is WRONG.</h1>';
    echo "</div>";
    echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=forgetpass.php">';
}

if ($username==$user) {

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
	$epass = encode($conpass,"$#*@&$(%&#&"); 

	$sql = "UPDATE user_system SET Password='".$epass."' WHERE UserID='".$id."'";

	if ($conn->query($sql) === TRUE) {
	    // echo "Record updated successfully";
	    echo "<br><br><br><br><br><br><br><br><br><br>";
	    echo '<div class="alert alert-info">';
	    echo '<center><h1><strong>Successfully ! </strong>Change Password.</h1>';
	    echo "</div>";
	    header( "refresh:3; url=login.php" );
	} else {
	    echo "Error updating record: " . $conn->error;
	}

}
	// echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=forgetpass.php">';




$conn->close();
?>