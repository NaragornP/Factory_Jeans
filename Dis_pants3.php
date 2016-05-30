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

$code = $_POST['code'];
$shop = $_POST['shop'];
$address = $_POST['address'];
$date = $_POST['date'];

//--- เหลือ------
$ss = $_POST['ss'];
$sm = $_POST['sm'];
$sl = $_POST['sl'];
$sxl = $_POST['sxl'];
$s34 = $_POST['ss34'];
$s36 = $_POST['ss36'];
$s38 = $_POST['ss38'];
$s40 = $_POST['ss40'];

// echo $code."-".$shop."-".$address."-".$date."-".$ss."-".$sm."-".$sl."-".$sxl."-".$s34."-".$s36."-".$s38."-".$s40."<br>";
//-------------------------------------

$n26 = $_POST['n26'];
$p26 = $_POST['p26'];
$s261 = $_POST['s261'];

$n28 = $_POST['n28'];
$p28 = $_POST['p28'];
$s281 = $_POST['s281'];

$n30 = $_POST['n30'];
$p30 = $_POST['p30'];
$s301 = $_POST['s301'];

$n32 = $_POST['n32'];
$p32 = $_POST['p32'];
$s321 = $_POST['s321'];

$n34 = $_POST['n34'];
$p34 = $_POST['p34'];
$s341 = $_POST['s341'];

$n36 = $_POST['n36'];
$p36 = $_POST['p36'];
$s361 = $_POST['s361'];

$n38 = $_POST['n38'];
$p38 = $_POST['p38'];
$s381 = $_POST['s381'];

$n40 = $_POST['n40'];
$p40 = $_POST['p40'];
$s401 = $_POST['s401'];

$bals = $ss - $n26;
$balm = $sm - $n28;
$ball = $sl - $n30;
$balxl = $sxl - $n32;
$bal34 = $s34 - $n34;
$bal36 = $s36 - $n36;
$bal38 = $s38 - $n38;
$bal40 = $s40 - $n40;

// echo $n26."-".$p26."-".$s261."<br>";
// echo $n28."-".$p28."-".$s281."<br>";
// echo $n30."-".$p30."-".$s301."<br>";
// echo $n32."-".$p32."-".$s321."<br>";
// echo $n34."-".$p34."-".$s341."<br>";
// echo $n36."-".$p36."-".$s361."<br>";
// echo $n38."-".$p38."-".$s381."<br>";
// echo $n40."-".$p40."-".$s401."<br>";
//-------------------------------------

$ze26 = $_POST['s261'];
$ze28 = $_POST['s281'];
$ze30 = $_POST['s301'];
$ze32 = $_POST['s321'];
$ze34 = $_POST['s341'];
$ze36 = $_POST['s361'];
$ze38 = $_POST['s381'];
$ze40 = $_POST['s401'];
$sums = $ze26+$ze28+$ze30+$ze32+$ze34+$ze36+$ze38+$ze40;
// echo $sums;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>จำหน่ายออก3</title>
  </head>
  <script language="JavaScript">
          function disc(){
          var num=parseFloat(document.cal.sums.value);
          var pri=parseFloat(document.cal.dis.value);
          document.cal.balanc.value=num-pri;
          document.cal.balanc2.value=num-pri;
          
        }
  </script>
  <script>
            function acceptFunction(id) {
                var r = confirm("Are you sure ? You want to SAVE.");
                if (r == true) {
                    // document.getElementById("accept").action = 'accept.php?accept=<?=$db_field["ID"];?>';
                    window.location.href = "Dis_pants4.php?accept="+id;
                }else if (r == false){
                document.getElementById("accept").action = "#";
                window.location.reload();
                }
            }
        </script>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <? include 'include/Topbar.php'; ?>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <? include 'include/slidebar.php'; ?>
      </aside>
      <!--sidebar end-->
  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-minus-square" style="color:red;"></i>จำหน่ายกางเกง</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-bookmark"></i>Pants</li>
                        <li><i class="fa fa-minus-square"></i>Pay Off Pants 2</li>
                    </ol>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-12">
            <form action="Dis_pantsPrint.php" name="cal" method="post">
              <section class="panel">
                            <header class="panel-heading">
                              Pay Off Pants 2
                            </header>
                            <br><br>
                              <div class="row">
                              <div class="col-sm-6 col-sm-offset-3">
                                <div class="form-group">
                                      <label class="col-sm-3 control-label">Total Price</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="sums" class="form-control" value="<? echo $sums; ?>" onKeyUp="disc()" disabled>
                                      </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">Discount</label>
                                      <div class="col-sm-8">
                                        <input type="number" min="0" name="dis" class="form-control" placeholder="ส่วนลด" onKeyUp="disc()" required>
                                      </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">Balance</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="balanc" class="form-control" placeholder="เงินคงเหลือ" style="color:red;" disabled>
                                        <input type="hidden" name="balanc2" >
                                      </div>
                                    </div>
                                    <br><br>
                                    <center>
                                    <!-- <button name="accept" id="accept" type="button" class="btn btn-success btn-lg btn-block" onClick = "acceptFunction(<?echo $db_field["ID"];?>)">SAVE</button> -->
                                    <button type="submit" class="btn btn-success btn-lg btn-block">NEXT</button>
                                    </center>
                                  <br>
                              </div>
                              </div><!--/.row-->
                          </section>
                            <input type="hidden" name="code" value="<? echo $code; ?>">
                            <input type="hidden" name="shop" value="<? echo $shop; ?>">
                            <input type="hidden" name="address" value="<? echo $address; ?>">
                            <input type="hidden" name="date" value="<? echo $date; ?>">
                            <input type="hidden" name="bals" value="<? echo $bals; ?>">
                            <input type="hidden" name="balm" value="<? echo $balm; ?>">
                            <input type="hidden" name="ball" value="<? echo $ball; ?>">
                            <input type="hidden" name="balxl" value="<? echo $balxl; ?>">
                            <input type="hidden" name="bal34" value="<? echo $bal34; ?>">
                            <input type="hidden" name="bal36" value="<? echo $bal36; ?>">
                            <input type="hidden" name="bal38" value="<? echo $bal38; ?>">
                            <input type="hidden" name="bal40" value="<? echo $bal40; ?>">

                            <input type="hidden" name="n26" value="<? echo $n26; ?>">
                            <input type="hidden" name="p26" value="<? echo $p26; ?>">
                            <input type="hidden" name="s261" value="<? echo $s261; ?>">
                            <input type="hidden" name="n28" value="<? echo $n28; ?>">
                            <input type="hidden" name="p28" value="<? echo $p28; ?>">
                            <input type="hidden" name="s281" value="<? echo $s281; ?>">
                            <input type="hidden" name="n30" value="<? echo $n30; ?>">
                            <input type="hidden" name="p30" value="<? echo $p30; ?>">
                            <input type="hidden" name="s301" value="<? echo $s301; ?>">
                            <input type="hidden" name="n32" value="<? echo $n32; ?>">
                            <input type="hidden" name="p32" value="<? echo $p32; ?>">
                            <input type="hidden" name="s321" value="<? echo $s321; ?>">
                            <input type="hidden" name="n34" value="<? echo $n34; ?>">
                            <input type="hidden" name="p34" value="<? echo $p34; ?>">
                            <input type="hidden" name="s341" value="<? echo $s341; ?>">
                            <input type="hidden" name="n36" value="<? echo $n36; ?>">
                            <input type="hidden" name="p36" value="<? echo $p36; ?>">
                            <input type="hidden" name="s361" value="<? echo $s361; ?>">
                            <input type="hidden" name="n38" value="<? echo $n38; ?>">
                            <input type="hidden" name="p38" value="<? echo $p38; ?>">
                            <input type="hidden" name="s381" value="<? echo $s381; ?>">
                            <input type="hidden" name="n40" value="<? echo $n40; ?>">
                            <input type="hidden" name="p40" value="<? echo $p40; ?>">
                            <input type="hidden" name="s401" value="<? echo $s401; ?>">

                            <input type="hidden" name="ze26" value="<? echo $ze26; ?>">
                            <input type="hidden" name="ze28" value="<? echo $ze28; ?>">
                            <input type="hidden" name="ze30" value="<? echo $ze30; ?>">
                            <input type="hidden" name="ze32" value="<? echo $ze32; ?>">
                            <input type="hidden" name="ze34" value="<? echo $ze34; ?>">
                            <input type="hidden" name="ze36" value="<? echo $ze36; ?>">
                            <input type="hidden" name="ze38" value="<? echo $ze38; ?>">
                            <input type="hidden" name="ze40" value="<? echo $ze40; ?>">
                 
                        </form>
          </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <? include 'include/footerjs.php'; ?>
  </body>
</html>