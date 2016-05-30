<!DOCTYPE html>
<?php 
session_start();
include 'include/connect.php';
include 'include/header.html';
$sqluser = "SELECT * FROM user_system WHERE Username = '".$_SESSION['Username']."' ";
$resultuser = $conn->query($sqluser);

if ($resultuser->num_rows > 0) {
    // output data of each row
    while($row = $resultuser->fetch_assoc()) {
        $password = $row["Password"];
        $status = $row["LoginStatus"];
    }
} else {
    // echo "0 results";
}
  // echo $status.$_SESSION['UserID'];
if(!isset($_SESSION['UserID'])&&($row["LoginStatus"]==0))
  {
    echo "<br><br><br><br><br><br><br><br><br><br>";
    echo '<div class="alert alert-info">';
    echo '<center><h1><strong>Please ! </strong>Login.</h1>';
    echo "</div>";
    echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=login/login.php">';
    exit();
  }
?>
<html lang="en">
  <head>
    <title>Profile</title>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <? include 'include/Topbar.php'; ?>
            <style>
      body {
              font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
              font-size: 15px;
              line-height: 1.42857143;
              color: #2c3e50;
              background-color: #18bc9c;
           }
      h1{
            font-weight: bold;
            font-size: 50px;
            font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
          }
      h3{
            font-size: 30px;
            font-weight: bold;
            font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
          }    
      h5{
            /*font-size: 30px;*/
            font-weight: bold;
            font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
          }    
    </style>
          <script language="javascript">
        function fncSubmit()
        {

          if(document.form1.txtPassword.value == "")
          {
            alert('Please ! input Password');
            document.form1.txtPassword.focus();   
            return false;
          } 

          if(document.form1.txtConPassword.value == "")
          {
            alert('Please ! input Confirm Password');
            document.form1.txtConPassword.focus();    
            return false;
          } 

          if(document.form1.txtPassword.value != document.form1.txtConPassword.value)
          {
            alert('Confirm Password Not Match !');
            document.form1.txtConPassword.focus();    
            return false;
          } 

          document.form1.submit();
        }
      </script>
      </header>      
      <aside>
          <? include 'include/slidebar.php'; ?>
      </aside>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel"><h3>Change Password</h3></h4>
      </div>
      <br>
      <form name="form1" class="form-horizontal" method="post" action="include/change_pass.php" OnSubmit="return fncSubmit();">
         <div class="form-group">
            <label class="col-sm-4 control-label"><h5>New Password</h5></label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><h5>Confirm New Password</h5></label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="txtConPassword" id="txtConPassword" placeholder="" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block"><h4>Save</h4></button>
        </form>
    </div>
  </div>
</div>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

<div class="row"><center>
  <div class="col-md-6 col-md-offset-3">
    <h1>About</h1><hr>
    <h3 class="col-md-6" align="right">Username : </h3>
    <h3 class="col-md-6" align="left"><?php echo $_SESSION['Username']; ?></h3><br>
    <h3 class="col-md-6" align="right">Name : </h3>
    <h3 class="col-md-6" align="left"><?php echo $_SESSION['Name']; ?></h3><br>
    <h3 class="col-md-6" align="right">Surname : </h3>
    <h3 class="col-md-6" align="left"><?php echo $_SESSION['Surname']; ?></h3><br>

  </div></center>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3"><hr>

      <button align="right" class="btn btn-primary btn-lg btn-block" type="submit" data-toggle="modal" data-target=".bs-example-modal-sm"><h4>Change Password</h4></button>

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
