<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form name="form1" method="post" action="check_forgetpass.php">   
        <div class="login-wrap">
            <h1>Forget Password</h1>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
              <span class="input-group-addon">New Password</span>
              <input type="password" name="pass1" id="pass1" class="form-control" placeholder="New Password" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon">Confirm Password</span>
                <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Confirm Password">
            </div>
            <br>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="Submit"><h3>CONFIRM</h3></button>
            <a href="login.php"><button class="btn btn-info btn-lg" type="button">Cancle</button></a>
        </div>
      </form>

    </div>


  </body>
</html>
