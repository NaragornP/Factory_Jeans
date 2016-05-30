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
?>
<html>
<head>
<title>Test Open piC</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
  $objConnect = mysql_connect($servername, $username, $password) or die("Error Connect to Database");
  $objDB = mysql_select_db($dbname);
  $strSQL = "SELECT * FROM fortnight,pants WHERE f_code = p_code_pak";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  $Num_Rows = mysql_num_rows($objQuery);

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
</body>
</html>