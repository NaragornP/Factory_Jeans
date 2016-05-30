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
$namedum = $_GET["namedum"];

$iddai = $_GET["iddai"];
$namedai = $_GET["namedai"];

$idzip = $_GET["idzip"];
$namezip = $_GET["namezip"];

$idpjean = $_GET["idpjean"];
$namepjean = $_GET["namepjean"];

$idpdip = $_GET["idpdip"];
$namepdip = $_GET["namepdip"];

$idtaglea = $_GET["idtaglea"];
$nametaglea = $_GET["nametaglea"];

$idtagpaper = $_GET["idtagpaper"];
$nametagpaper = $_GET["nametagpaper"];

$idlinep = $_GET["idlinep"];
$namelinep = $_GET["namelinep"];

//----------------------Del&edit---------------------------------------
$idpantdel = $_GET["idpantdel"];
$namepantdel = $_GET["namepantdel"];

$idordel = $_GET["idordel"];
$nameordel = $_GET["nameordel"];

$idshoppricepants = $_GET["idshoppricepants"];
$nameshoppricepants = $_GET["nameshoppricepants"];

// echo $iddum."-".$namedum;
// echo $iddai."-".$namedai;
// echo $idzip."-".$namezip;
// echo $idpjean."-".$namepjean;
// echo $idpdip."-".$namepdip;
// echo $idtaglea."-".$nametaglea;
// echo $idtagpaper."-".$nametagpaper;

if ($namedum == 1) {
	// echo $iddum."-".$namedum;
	$sql = "DELETE FROM studs WHERE st_code='".$iddum."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: dum.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

} else if ($namedai == 2) {
	// echo $iddai."-".$namedai;
	$sql = "DELETE FROM dai WHERE k_code='".$iddai."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: dai.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($namezip == 3) {
	// echo $idzip."-".$namezip;
	$sql = "DELETE FROM zip WHERE z_code='".$idzip."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: zip.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($namepjean == 4) {
	// echo $idpjean."-".$namepjean;
	$sql = "DELETE FROM jeans WHERE je_code='".$idpjean."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: Pjean.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($namepdip == 5) {
	// echo $idpdip."-".$namepdip;
	$sql = "DELETE FROM calico WHERE ca_code='".$idpdip."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: Pdip.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($nametaglea == 6) {
	// echo $idtaglea."-".$nametaglea;
	$sql = "DELETE FROM leather WHERE lea_code='".$idtaglea."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: tag_leather.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($nametagpaper == 7) {
	// echo $idtagpaper."-".$nametagpaper;
	$sql = "DELETE FROM tag_paper WHERE tp_code='".$idtagpaper."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: paper.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($namelinep == 8) {
	// echo $idlinep."-".$namelinep;
	$sql = "DELETE FROM fortnight WHERE f_code='".$idlinep."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: pattern.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($namepantdel == 9) {
	// echo $idlinep."-".$namelinep;
	$sql = "DELETE FROM pants WHERE id_code_p ='".$idpantdel."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: editdel.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($nameordel == 10) {
	// echo $idlinep."-".$namelinep;
	$sql = "DELETE FROM ordersell WHERE id_auto_order ='".$idordel."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: editdel.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else if ($nameshoppricepants == 11) {
	// echo $idlinep."-".$namelinep;
	$sql = "DELETE FROM sell_pants WHERE id_auto_sellpant ='".$idshoppricepants."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    // header( "location: editdel.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
	$sql = "DELETE FROM sell_pantsprice WHERE id_auto_spp ='".$idshoppricepants."'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "location: editdel.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}else {
	echo "No data";
	header( "location: index.php" );
}



$conn->close();
?>