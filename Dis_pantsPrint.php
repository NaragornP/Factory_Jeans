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
$shop = $_POST["shop"];
$address = $_POST["address"];
$date = $_POST["date"];
$bals = $_POST["bals"];
$balm = $_POST["balm"];
$ball = $_POST["ball"];
$balxl = $_POST["balxl"];
$bal34 = $_POST["bal34"];
$bal36 = $_POST["bal36"];
$bal38 = $_POST["bal38"];
$bal40 = $_POST["bal40"];
$dis = $_POST["dis"];
$balanc2 = $_POST["balanc2"];


$sql = "UPDATE pants SET p_S = $bals,p_m = $balm,p_l = $ball,p_xl=$balxl,p_34=$bal34,p_36=$bal36,p_38=$bal38,p_40=$bal40  WHERE id_code_p= '".$code."' ";

if ($conn->query($sql) === TRUE) {
    echo '<div class="no-print"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>';
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<div class="no-print"><i class="fa fa-times" aria-hidden="true"></i></div>';
}

$n26 = $_POST["n26"];
$p26 = $_POST["p26"];
$s261 = $_POST["s261"];
$n28 = $_POST["n28"];
$p28 = $_POST["p28"];
$s281 = $_POST["s281"];
$n30 = $_POST["n30"];
$p30 = $_POST["p30"];
$s301 = $_POST["s301"];
$n32 = $_POST["n32"];
$p32 = $_POST["p32"];
$s321 = $_POST["s321"];
$n34 = $_POST["n34"];
$p34 = $_POST["p34"];
$s341 = $_POST["s341"];
$n36 = $_POST["n36"];
$p36 = $_POST["p36"];
$s361 = $_POST["s361"];
$n38 = $_POST["n38"];
$p38 = $_POST["p38"];
$s381 = $_POST["s381"];
$n40 = $_POST["n40"];
$p40 = $_POST["p40"];
$s401 = $_POST["s401"];

$ze26 = $_POST["ze26"];
$ze28 = $_POST["ze28"];
$ze30 = $_POST["ze30"];
$ze32 = $_POST["ze32"];
$ze34 = $_POST["ze34"];
$ze36 = $_POST["ze36"];
$ze38 = $_POST["ze38"];
$ze40 = $_POST["ze40"];

// echo "<br>".$colp." | ".$code." | ".$sell." | ".$num ." | ".$colf." | ".$whif." | ".$ku." | ".$tang." | ".$sum." | ".$typep." | ".$codejean." | ".$tag." | ".$ps;

$sql = "INSERT INTO sell_pants (sellpa_codel,sellpa_shop,sellpa_address,sellpa_date,sellpa_ss,sellpa_sm,sellpa_sl,sellpa_sxl,sellpa_s34,sellpa_s36,sellpa_s38,sellpa_s40)
 VALUES ('$code','$shop','$address','$date','$n26','$n28','$n30','$n32','$n34','$n36','$n38','$n40')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="no-print"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>';
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<div class="no-print"><i class="fa fa-times" aria-hidden="true"></i></div>';
}
$sql = "INSERT INTO sell_pantsprice (spp_code,spp_sp,spp_mp,spp_lp,spp_xlp,spp_34p,spp_36p,spp_38p,spp_40p,spp_discount,spp_total,sp_shopname)
 VALUES ('$code','$p26','$p28','$p30','$p32','$p34','$p36','$p38','$p40','$dis','$balanc2','$shop')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="no-print"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>';
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<div class="no-print"><i class="fa fa-times" aria-hidden="true"></i></div>';
}
//------------------------------------CHECK HAVE SHOP---------------------------------------------
$sql = "SELECT * FROM shop";
$result = $conn->query($sql);
$numb=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sn_check[] = $row["shop_name"];
        $numb=$numb+1;
    }
} else {
    echo "No Data";
}
$i = 0;
$tf = TRUE;
// echo $numb."<br>";
//---------------------------------LOGIC-----CHECK HAVE SHOP----------------------------------------
while ($tf == TRUE) {
  if ($sn_check[$i] == $shop) {
    // echo $sn_check[$i]."มีแล้ว";
    $ok = 1;
    $tf = FALSE;
  } else {
    if ($numb == $i) {
      $tf = FALSE;
    }     
    // echo "ยังไม่มี";
    $ok = 0;
    $i++;
  }     
}
// echo $ok;
if ($ok == 0) {
    $sql = "INSERT INTO shop (shop_name,address,shop_pcode)
     VALUES ('$shop','$address','$code')";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="no-print"><i class="fa fa-plus-square-o" aria-hidden="true"></i></div>';
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<div class="no-print"><i class="fa fa-times" aria-hidden="true"></i></div>';
    }
} else {
  echo '<div class="no-print"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></div>';
}
$conn->close();
?>
<html>
  <head>
    <title>Print_Form</title>
    <style>
      html, body {
                width: 100%;
                height: 100%;
                margin:auto; position:relative;
                padding: 0;
                display: inline-block;
                overflow:hidden;
            }
        </style>    
  </head>
  <body>
    <form name="pri" action="Dis_pants.php">
      <div class="row">     
        <div class="col-md-8 col-md-offset-3"><h1>Sold Out (จำหน่ายกางเกง)</h1>
          <div class="row">
          <div class="col-md-8">
            <center> 
            <table class="table table-bordered" style="width:100%;text-align: center">
              <thead>
                <th style="width:30%" >Title</th>
                <th style="width:70%" >Detail</th>
              </thead>
            <tr>
              <td>รหัสกางเกง</td>
              <td><?echo $code;?></td>
            </tr>
            <tr>
              <td>ร้านค้า</td>
              <td><?echo $shop;?></td>
            </tr>
            <tr>
              <td>ที่อยู่</td>
              <td><?echo $address;?></td>
            </tr>
            <tr>
              <td>วันที่</td>
              <td><?echo $date;?></td>
            </tr>
            <tr>
              <td>Size S</td>
              <td><?echo $n26." ตัว x ".$p26." บาท = ".$s261." บาท";?></td>
            </tr>
            <tr>
              <td>Size M</td>
              <td><?echo $n28." ตัว x ".$p28." บาท = ".$s281." บาท";?></td>
            </tr>
            <tr>
              <td>Size L</td>
              <td><?echo $n30." ตัว x ".$p30." บาท = ".$s301." บาท";?></td>
            </tr>
            <tr>
              <td>Size XL</td>
              <td><?echo $n32." ตัว x ".$p32." บาท = ".$s321." บาท";?></td>
            </tr>
            <tr>
              <td>Size 34</td>
              <td><?echo $n34." ตัว x ".$p34." บาท = ".$s341." บาท";?></td>
            </tr>
            <tr>
              <td>Size 36</td>
              <td><?echo $n36." ตัว x ".$p36." บาท = ".$s361." บาท";?></td>
            </tr>
            <tr>
              <td>Size 38</td>
              <td><?echo $n38." ตัว x ".$p38." บาท = ".$s381." บาท";?></td>
            </tr>
            <tr>
              <td>Size 40</td>
              <td><?echo $n40." ตัว x ".$p40." บาท = ".$s401." บาท";?></td>
            </tr>
            <tr >
              <td>ราคารวม</td><? $total=$balanc2+$dis?>
              <td><?echo "ราคาเต็ม ".$total." ลด ".$dis." บาท = ".$balanc2." บาท";?></td>
            </tr>
          </table>
          </div>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
      <div class="no-print">
        <button class="btn btn-primary btn-lg btn-block" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
      </div>
      </div>

    
  </form>
  </body>
</html>
