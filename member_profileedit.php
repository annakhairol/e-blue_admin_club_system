<?php include ("conn.php"); ?>
<?php
     $membermatric = $_SESSION["membermatric"];
      if(!isset($membermatric)) 
      {
      header("Location: guest_dashboard.php");  
      }
      else
      {
      $query = mysqli_query($conn,"select * from member where Member_Matric = $membermatric");
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

    <title>E-sport Blue Club</title>

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
              <a href="administrator" class="site_title"><i class="fa fa-paw"></i> <span>E-Sport Blue Club</span></a>
            </div>

           <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <?php include 'member_menuprofile.php' ?>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <?php include 'member_sidenavigation2.php' ?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->

          <?php include 'member_topnavigation.php' ?>
        <!-- /top navigation -->

               <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Profile</h3>
              </div>

            <div class="clearfix"></div>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Personal Information</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form name="editform" method="post" action="">
                    <table class="table table-hover">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Matric ID:</th>
                          <td><?php echo $row['Member_Matric'];?></td>
                        </tr>
                        <tr>
                          <th>Full Name:</th>
                          <td><?php echo $row['Member_Name'];?></td>
                        </tr>
                        <tr>
                          <th>IC Number:</th>
                          <td><?php echo $row['Member_IC'];?></td>
                        </tr>
                        <tr>
                          <th>Address:</th>
                          <td><input type="text" name="Member_Address" value="<?php echo $row['Member_Address'];?>"></td>
                        </tr>
                        <tr>
                          <th>Position:</th>
                          <td><input type="text" name="Member_State" value="<?php echo $row['Member_State'];?>"></td>
                        </tr>
                        <tr>
                          <th>Phone Number:</th>
                          <td><input type="text" name="Member_Phone" value="<?php echo $row['Member_Phone'];?>"></td>
                        </tr>
                        <tr>
                          <th>Gender:</th>
                          <td><?php echo $row['Member_Gender'];?></td>
                        </tr>
                        <tr>
                          <td colspan="2"><center><input class="btn btn-success" type="submit" name="updatebtn" value="Update Profile"></center></td>
                        </tr>
                      </tbody>
                    </table>
</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
if (isset($_POST['updatebtn'])) {
      $adaddress = addslashes($_POST['Member_Address']);
      $adstate = addslashes($_POST['Member_State']);
      $adphone = addslashes($_POST['Member_Phone']);
      mysqli_query($conn,"UPDATE member SET Member_Address = '$adaddress', Member_State = '$adstate', Member_Phone = '$adphone' WHERE Member_Matric = '$membermatric'");

      echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.location = 'member_profile.php?result=SuccessfullyUpdated';
          </SCRIPT>");

      mysqli_close($conn);
}
?>