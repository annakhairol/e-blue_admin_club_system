<?php include("conn.php")?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Blue Sports Club</title>

  <!-- Font Awesome Icons -->
  <link href=" dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href=" dashboard/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href=" dashboard/css/creative.min.css" rel="stylesheet">
  <style type="text/css">
    td#tabletext{text-align: left; color: white; width: 50%;}
    td#tablepad{padding-left: 86px}
    td{padding-bottom: 15px;}
    a#mybtn{margin-left: 15px;}
  </style>

</head>
<?php   
      $AppID = $_REQUEST['Application_ID'];
      $sql = "SELECT * FROM member WHERE Application_ID = '$AppID'";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      $row = mysqli_fetch_assoc($result);
    ?>
<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="guest_dashboard.php">E-Blue Sports Club</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="guest_dashboard.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="guest_dashboard.php#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="guest_register.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="guest_checkstatus.php">Check Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Personal Information</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <form>
              <table style="margin-left: 40px;">
                <tr>
                  <td id="tabletext">Application ID: </td>
                  <td><input type="text" name="Application_ID" value="<?php echo $row['Application_ID']; ?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Matric ID: </td>
                  <td><input type="text" name="Member_ID" value="<?php echo $row['Member_Matric']; ?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Name: </td>
                  <td><input type="text" name="Member_Name" value="<?php echo $row['Member_Name']; ?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">IC Number: </td>
                  <td><input type="text" name="Member_IC" value="<?php echo $row['Member_IC']; ?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Address: </td>
                  <td><input type="text" name="Member_Address" value="<?php echo $row['Member_Address'];?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">States: </td>
                  <td><input type="text" name="Member_State" value="<?php echo $row['Member_State'];?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Phone Number: </td>
                  <td><input type="text" name="Member_Phone" value="<?php echo $row['Member_Phone']; ?>" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Gender: </td>
                  <td><input type="text" name="Member_Gender" value="<?php echo $row['Member_Gender']; ?>" size="50"></td>
                </tr>
              </table>
            </form>
            <br> <br>
            <p style="color: white;">**Note: Please note that your username is your matric number and your password is your IC number.**</p>
            <a id="mybtn" class="btn btn-primary btn-xl js-scroll-trigger" href="guest_dashboard.php">Back to Home!</a>
            <a id="mybtn" class="btn btn-primary btn-xl js-scroll-trigger" href="login.php">Login? Click Here!</a>
        </div>
      </div>
    </div>
  </header>


  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2018 - 2019 | UiTM Perlis Branch</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=" dashboard/vendor/jquery/jquery.min.js"></script>
  <script src=" dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src=" dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src=" dashboard/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src=" dashboard/js/creative.min.js"></script>

</body>

</html>
