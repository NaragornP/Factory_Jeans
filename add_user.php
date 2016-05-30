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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>เพิ่มผู้ใช้</title>
    <script language="javascript">
function fncSubmit()
{ 
  if(document.form1.pass.value == "")
  {
    alert('Please input Password');
    document.form1.pass.focus();   
    return false;
  } 

  if(document.form1.conpass.value == "")
  {
    alert('Please input Confirm Password');
    document.form1.conpass.focus();    
    return false;
  } 

  if(document.form1.pass.value != document.form1.conpass.value)
  {
    alert('Confirm Password Not Match');
    document.form1.conpass.focus();    
    return false;
  } 

  document.form1.submit();
}
</script>
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
                    <h3 class="page-header"><i class="fa fa-user-plus" style="color:green;"></i>เพิ่มผู้ใช้</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-user"></i><a href="profile.html">Profile</a></li>
                        <li><i class="fa fa-user-plus"></i>Add User</li>
                    </ol>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-12">
                    <form name="form1" class="form-horizontal" method="post" action="add_userConf.php" OnSubmit="return fncSubmit();">
                      <section class="panel">
                          <header class="panel-heading">
                            Add User
                          </header>
                          <br><br>
                            <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Username</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-8">
                                      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-sm-8">
                                      <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Surname</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="surname" class="form-control" placeholder="Surname" required>
                                    </div>
                                  </div>
                                  <center><button type="submit" class="btn btn-success btn-lg btn-block">OK</button></center>
                                <br>
                            </div>
                            </div><!--/.row-->
                        </section>
                        
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
 <? include 'include/footerjs.php';?>

  </body>
</html>
