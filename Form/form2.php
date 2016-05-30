<!DOCTYPE html>
<html lang="en">
  <head>


    <title>Search</title>
    <?php include 'include2/header.html'; ?>
     
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <? include 'include2/Topbar.php'; ?>

      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <? include 'include2/slidebar.php'; ?>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-search" style="color:blue;"></i>ค้นหา</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-search"></i>Search</li>
          </ol>
        </div>
      </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Search
                          </header>
                          <br><br>
                            <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              


<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <div class="row">
    <div class="col-md-2">
      <i class="fa fa-search fa-2x"></i>
    </div>
    <div class="col-md-6">
    <input name="txtKeyword" type="text" class="form-control" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
    </div>
  </div>
  <br>
</form>
<?php
if($_GET["txtKeyword"] != "")
  {
  $objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
  $objDB = mysql_select_db("mydatabase");
  // Search By Name or Email
  $strSQL = "SELECT * FROM customer WHERE (Name LIKE '%".$_GET["txtKeyword"]."%' or Email LIKE '%".$_GET["txtKeyword"]."%' )";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  ?>
  <table width="600" border="1">
    <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
    </tr>
  <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
    <tr>
    <td><div align="center"><?php echo $objResult["CustomerID"];?></div></td>
    <td><?php echo $objResult["Name"];?></td>
    <td><?php echo $objResult["Email"];?></td>
    <td><div align="center"><?php echo $objResult["CountryCode"];?></div></td>
    <td align="right"><?php echo $objResult["Budget"];?></td>
    <td align="right"><?php echo $objResult["Used"];?></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <?php
  mysql_close($objConnect);
}
?>









                            </div>
                          </div><!--/.row-->
                        </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
<? include 'include2/footerjs.php';?>

  </body>
</html>
