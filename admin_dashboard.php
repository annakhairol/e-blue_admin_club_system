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
  
    ?><!DOCTYPE html>
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
              <a href="admin_dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>E-Sport Blue Club</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php include 'admin_menuprofile.php' ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             <?php include 'admin_sidenavigation.php' ?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
         <?php include 'admin_topnavigation.php' ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!-- top tiles icons -->
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <?php
          $sql = "SELECT * FROM member WHERE Member_Status = 'Approved'";               
             
                     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                     $count = 0;
                     
                     
                      while($row = mysqli_fetch_assoc($result))                      
            {   
              $count++;

               } 

               $rec_count1 = mysqli_num_rows($result);
          
        ?>
                  <div class="count"><?php echo $rec_count1; ?></div> <!-- query list of members-->
                  <h3><a href="admin_member.php">Members List</a></h3>
                  <p>List of members approved by admin.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                 <!--  <?php 
                            $a = 1;
                            foreach ($records as $r) { 
                                if ($r->Member_Status == 'Pending') {
                                $a++;
                                }
                            } 
                        ?> -->
                        <?php
          $sql = "SELECT * FROM member WHERE Member_Status = 'Pending'";               
             
                     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                     $count = 0;
                     
                     
                      while($row = mysqli_fetch_assoc($result))                      
            {   
              $count++;

               } 

               $rec_count = mysqli_num_rows($result);
          
        ?>
                  <div class="count"><?php echo $rec_count?></div> <!-- query new request -->
                  <h3><a href="admin_request.php">New Request</a></h3>
                  <p>List of request that needed to be approved.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-share-square-o"></i></div>
<?php
          $sql = "SELECT * FROM member WHERE Member_Status = 'Rejected'";               
             
                     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                     $count = 0;
                     
                     
                      while($row = mysqli_fetch_assoc($result))                      
            {   
              $count++;

               } 

               $rec_count2 = mysqli_num_rows($result);
          
        ?>
                  <div class="count"><?php echo $rec_count2;?></div> <!-- query new request -->
                  <h3><a href="admin_reject.php">Rejected</a></h3>
                  <p>List of request that has been rejected.</p>
                </div>
              </div>
            </div>
            <!-- /top tiles icons -->
            <!-- Announcement -->
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>UiTM General Announcement</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">May</p>
                        <p class="day">2</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Drama Club</a>
                        <p><b>The Lion King - </b> Tickets will be on sale from Sunday 2/6/2019 to Saturday 9/6/2016</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">May</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">College Iftar Gathering</a>
                        <p>Event will be held on 15th of May, Masjid An Nur UiTM Perlis, starting at 7pm</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">May</p>
                        <p class="day">15</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Ramadhan Benefits</a>
                        <p>A talk about the month of Ramadhan by Mufti Perlis.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">May</p>
                        <p class="day">22</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">E-Sport Blue Club</a>
                        <p>Semester End Meeting on 24th May 2019, Friday</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">May</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Arau Shuttle Bus (Kangar Bus Terminal & KTM Arau)</a>
                        <p>Shuttle Bus services provided for students who going back for Raya celebration starting on 23/6/2019 - 26/6/2019</p>
                      </div>
                    </article>
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

