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
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>E-Sport Blue Club</span></a>
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
                <h3>Activity List</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Club Activity Information List</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Activity Name</th>
                          <th>Activity Date</th>
                          <th>Activity Venue</th>
                          <th>Activity Description</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
          $sql = "SELECT * FROM activity";               
             
                     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                     $count = 0;
                     if (mysqli_num_rows($result)==0){
                     echo "Data Not Found";
                      }
                     else{
                      while($row = mysqli_fetch_assoc($result))                      
            {   
              $count++;
        ?>
      <tr><form name="memberform" method="post" action="">
        <td><?php echo $count; ?></td>
        <td><?php echo $row["Activity_Name"]; ?></td>
        <td><?php echo $row["Activity_Date"]; ?></td>
        <td><?php echo $row["Activity_Venue"]; ?></td>
        <td><?php echo $row["Activity_Description"]; ?></a></td>
        <input type="hidden" name="Activity_ID" value="<?php echo $row['Activity_ID']; ?>">
        <td><input class="btn btn-danger" type="submit" name="terminatebtn" value="Terminate" onclick=""></td>
      </tr></form>
     
    <?php } }?>
                      </tbody>
                    </table>
                  </div> <a class="btn btn-success" href="admin_activityadd.php">Add New Activity</a>
    <?php
        $rec_count = mysqli_num_rows($result);
          
        if ($rec_count > 0)
          echo "<br /><br />Number of Activity : ". $rec_count;
        else
          echo "No records found";
      ?>
                </div>
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
if (isset($_REQUEST['terminatebtn'])) {
      $acid = $_REQUEST['Activity_ID'];
      $result = mysqli_query($conn,"DELETE FROM activity WHERE Activity_ID = '$acid'");
      $id = mysqli_insert_id($conn);
      
      if ($result) {
         echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('A member has been terminated.')
             window.location = 'admin_activity.php?Activity_ID=' + $id;
            </SCRIPT>");
      }else{
         echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('Fail')
            window.location = 'admin_activity.php';
            </SCRIPT>");
       }

      mysqli_close($conn);
}
?>