<!DOCTYPE html>
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

$sql = "SELECT * FROM fortnight";
$result = $conn->query($sql);
?>
<html lang="en">
  <head><title>ลายปักษ์</title>
  </head>

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
					<h3 class="page-header"><i class="fa fa-plus-square" style="color:green;"></i>เพิ่มลายปักษ์</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-plus-square"></i>Add Pattern</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Add Pattern
                          </header>
                          <br><br>
                          	<div class="row">
                          	<div class="col-md-6 col-md-offset-3">
                          		<form class="form-horizontal" action="pattern2.php" method="post" enctype="multipart/form-data">
              								  <div class="form-group">
              								    <label class="col-sm-2 control-label">Code</label>
              								    <div class="col-sm-10">
              								      <input type="text" name="code" class="form-control" placeholder="รหัสลายปักษ์" required>
              								    </div>
              								  </div>
              							
              								  <div class="form-group">
              								    <label class="col-sm-2 control-label">Picture</label>
              								    <div class="col-sm-10">
              								      <input type="file" name="picF" required>
              								    </div>
              								  </div>
              								   	<center><button type="submit" class="btn btn-success btn-lg btn-block">OK</button></center>
              								   	<br><br>
              								</form>
                          	</div>
                        	</div><!--/.row-->

                          
                        </section>
                  </div>
              </div>
              <!-- page end-->
                  <!-- ------------------------------------------ -->

      <div class="row">
          <div class="col-md-6 ">
              <section class="panel">
                  <header class="panel-heading">
                    Stock Pattern
                  </header>
                  <br>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                  <?
                  if ($result->num_rows > 0) {
                  ?>
                      <table class="table table-bordered" style="width:100%">
                        <thead>
                          <th style="width:30%">Code</th>
                          <th style="width:30%">Picture</th>
                          <th style="width:20%">Delete</th>
                        </thead>
                  <?
                      while($row = $result->fetch_assoc()) {
                  ?>
                        <tr>
                          <td><? echo $row["f_code"];?></td>
                          <td><center><img style="width:60%;height:60%;" src="pictureJean/linePak/<?php echo $row["f_picture"];?>"></center></td>
                          <td><a onClick="javascript: return confirm('Are You sure ? Confirm Delete.');" href="delete.php? namelinep=8 & idlinep=<?php echo $row['f_code'];?>"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                        </tr>
                  <?
                      }
                  } else {
                      echo "<p style = 'color:red'>No Data</p>";
                  }
                  $conn->close();
                  ?>
                      </table>
                    </div><!--/.row-->
                  </div>                          
                </section>
          </div>
    <!-- ------------------------------------------ -->
           <div class="col-md-6 ">
              <section class="panel">
                  <header class="panel-heading">
                    Pattern & Jeans
                  </header>
                  <br>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
  <?php
                    $objConnect = @mysql_connect($servername, $username, $password) or die("Error Connect to Database");
                    $objDB = @mysql_select_db($dbname);
                    $strSQL = "SELECT * FROM fortnight,pants WHERE f_code = p_code_pak";
                    $objQuery = @mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                    $Num_Rows = @mysql_num_rows($objQuery);

                    $Per_Page = 3;   // Per Page

                    $Page = $_GET["Page"];
                    if(!$_GET["Page"])
                    {
                      $Page=1;
                    }

                    $Prev_Page = $Page-1;
                    $Next_Page = $Page+1;

                    $Page_Start = (($Per_Page*$Page)-$Per_Page);
                    if($Num_Rows<=$Per_Page)
                    {
                      $Num_Pages =1;
                    }
                    else if(($Num_Rows % $Per_Page)==0)
                    {
                      $Num_Pages =($Num_Rows/$Per_Page) ;
                    }
                    else
                    {
                      $Num_Pages =($Num_Rows/$Per_Page)+1;
                      $Num_Pages = (int)$Num_Pages;
                    }

                    $strSQL .=" order  by id_auto ASC LIMIT $Page_Start , $Per_Page";
                    $objQuery  = mysql_query($strSQL);
                    ?>
                    <center>
                    <table width="350" border="1">
                      <tr>
                      <th width="100"> <div align="center">Code Pattern</div></th>
                      <th width="150"> <div align="center">Picture Pak</div></th>
                      <th width="100"> <div align="center">Code Jean</div></th>
                      <th width="150"> <div align="center">Picture Jean</div></th>
                      </tr>
                    <?
                    while($objResult = mysql_fetch_array($objQuery))
                    {
                    ?>
                      <tr>
                      <td><div align="center"><?php echo $objResult["f_code"];?></div></td>
                      <td><center><img style="width:200px;height:200px;" src="pictureJean/linePak/<?php echo $objResult["f_picture"];?>"></center></td>
                      <td><div align="center"><?php echo $objResult["id_code_p"];?></div></td>
                      <td><center><img style="width:200px;height:200px;" src="pictureJean/jeans/<?php echo $objResult["p_picture"];?>"></center></td>
                      </tr>
                    <?
                    }
                    ?>
                    </table>
                    </center>
                    <br>
                    Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
                    <?php
                    if($Prev_Page)
                    {
                      echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
                    }

                    for($i=1; $i<=$Num_Pages; $i++){
                      if($i != $Page)
                      {
                        echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
                      }
                      else
                      {
                        echo "<b> $i </b>";
                      }
                    }
                    if($Page!=$Num_Pages)
                    {
                      echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
                    }
                    mysql_close($objConnect);
?>
                    </div><!--/.row-->
                  </div>                          
                </section>
          </div>
      </div>

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
 <? include 'include/footerjs.php';?>
  

  </body>
</html>
