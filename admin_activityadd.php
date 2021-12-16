<?php include ("conn.php"); ?>
<?php
     $adminmatric = $_SESSION["adminmatric"];
      if(!isset($adminmatric)) 
      {
      header("Location: guest_dashboard.php");  
      }
      else
      {
      $query = mysqli_query($conn,"select * from administrator where Admin_Matric = $adminmatric");
      $row = mysqli_fetch_assoc($query);
      }
  
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>E-Blue Sport Club</title>

<!-- Bootstrap -->
<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="../guest" class="site_title"><i class="fa fa-paw"></i> <span>E-Sport Blue Club</span></a>
</div>

<div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <?php include 'admin_menuprofile.php' ?>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <?php include 'admin_sidenavigation2.php' ?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->

          <?php include 'admin_topnavigation.php' ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Activity Form</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Activity Form</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
 
                    <br />
                    <form id="activityform" data-parsley-validate class="form-horizontal form-label-left" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Activity_Name">Activity Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="Activity_Name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Activity_Date">Activity Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="Activity_Date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Activity_Venue" class="control-label col-md-3 col-sm-3 col-xs-12">Activity Venue<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="Activity_Venue" class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Activity_Description" class="control-label col-md-3 col-sm-3 col-xs-12">Activity Description<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="Member_Address" class="form-control col-md-7 col-xs-12" type="" name="Member_Address"> -->
                          <textarea form="activityform" name="Activity_Description" ></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="reset" name="resetbtn" class="btn btn-primary" value="Reset">
                          <input type="submit" name="addbtn" class="btn btn-success" value="Submit">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div></div></div>
                    
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; Copyright 2018-2019, UiTM Cawangan Perlis
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
<?php   
    //TO ADD DATA
    if (isset($_POST['addbtn'])) {
      $acname = addslashes($_POST['Activity_Name']);
      $acdate = addslashes($_POST['Activity_Date']);
      $acvenue = addslashes($_POST['Activity_Venue']);
      $acdesc = addslashes($_POST['Activity_Description']);
    
      
      mysqli_query($conn,"INSERT INTO activity(Activity_Name, Activity_Date, Activity_Venue, Activity_Description) VALUES 
        ('$acname', '$acdate', '$acvenue', '$acdesc')");
        
      
    ?>
  <script type="text/javascript" >
      alert("New activity is successfully recorded.");
    </script>
        
<?php
  mysqli_close($conn);
}
?>