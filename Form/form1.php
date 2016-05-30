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
        <style>
        textarea { 
            resize: none; 
        }
        </style>

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
            <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
            <li><i class="fa fa-bars"></i>Order</li>
            <li><i class=""></i>1</li>
          </ol>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-12">
            <form action="" name="cal" method="post">
              <section class="panel">
                            <header class="panel-heading">
                              Order 1
                            </header>
                            <br><br>
                              <div class="row">
                              <div class="col-sm-6 col-sm-offset-3">
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Color Pant</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="สีกางเกง">
                                      </div>
                                
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">Code</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="รหัส/โต๊ะ">
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">จ่าย</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="?">
                                      </div>
                                
                                    <br><br>
                                
                                      <label class="col-sm-3 control-label">Number</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="จำนวน">
                                      </div>
                         
                                    <br><br>
                               
                                      <label class="col-sm-3 control-label">Color</label>
                                      <div class="col-sm-6">
                                        <input type="text" name="" class="form-control" placeholder="ผ้าสี">
                                      </div>
                                      <label class="col-sm-2 control-label">Yard</label>
                              
                                    <br><br>
                                
                                      <label class="col-sm-3 control-label">White</label>
                                      <div class="col-sm-6">
                                        <input type="text" name="" class="form-control" placeholder="ผ้าขาว">
                                      </div>
                                      <label class="col-sm-2 control-label">Yard</label>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">คู่xตั้ง</label>
                                          <div class="col-sm-2">
                                            <input type="text" name="n28" class="form-control" placeholder="คู่" onKeyUp="ntp()">
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="text" name="p28" class="form-control" placeholder="ตั้ง" onKeyUp="ntp()">
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" name="s28" class="form-control" placeholder="จำนวนกางเกง" disabled>
                                            <input type="hidden" name="s281" class="form-control" >
                                          </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">แบบทรงกางเกง</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="?">
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">รหัสผ้ายีนส์</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="?">
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">สีด้ายการเย็บ</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="?">
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">ติดป้าย</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" placeholder="?">
                                      </div>
                                    
                                    <br><br>
                                    
                                      <label class="col-sm-3 control-label">หมายเหตุ</label>
                                      <div class="">
                                        <textarea name="" cols="10" rows="5" class="form-control"></textarea>
                                      </div>

                                  </div>
                                   <hr>

                                    <center>
                                    <button name="accept" id="accept" type="button" class="btn btn-success btn-lg btn-block" onClick = "acceptFunction(<?echo $db_field["ID"];?>)">SAVE</button>
                                    <!-- <button type="submit" class="btn btn-success btn-lg btn-block">NEXT</button> -->
                                    </center>
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
<? include 'include2/footerjs.php';?>

  </body>
</html>
