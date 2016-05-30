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

$iddum = $_GET["iddum"];
$iddai = $_GET["iddai"];
$idpdip = $_GET["idpdip"];
$idpaper = $_GET["idpaper"];
$idleather = $_GET["idleather"];
$idzip = $_GET["idzip"];
$idjean = $_GET["idjean"];

if ($iddum == 1) {
	$sql = "DELETE FROM equip_transection WHERE stud_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: dum.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
}else if ($iddai == 1){
	$sql = "DELETE FROM equip_transection WHERE dai_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: dai.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
}else if ($idpdip == 1){
		$sql = "DELETE FROM equip_transection WHERE calico_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: Pdip.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
	
}else if ($idpaper == 1){
		$sql = "DELETE FROM equip_transection WHERE paper_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: paper.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
	
}else if ($idleather == 1){
		$sql = "DELETE FROM equip_transection WHERE leather_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: tag_leather.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
	
}else if ($idzip == 1){
		$sql = "DELETE FROM equip_transection WHERE zip_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: zip.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
	
}else if ($idjean == 1){
		$sql = "DELETE FROM equip_transection WHERE jean_id=1";
	if ($conn->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    header( "location: Pjean.php" );
	} else {
	    // echo "Error deleting record: " . $conn->error;
	}
	
}else {
	// echo "No Data";
	header('Location: index.php');
}

$conn->close();
?>        