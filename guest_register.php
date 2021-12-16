<?php include("conn.php")?><!DOCTYPE html>

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
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,280,280italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href=" dashboard/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href=" dashboard/css/creative.min.css" rel="stylesheet">
  <style type="text/css">
    td#tabletext{text-align: left; color: white; width: 40%;}
    td#tablepad{padding-left: 5px;}
    td#mybtn{padding-top: 15px;}
    td{padding-bottom: 15px;}
  </style>

</head>

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
          <h1 class="text-uppercase text-white font-weight-bold">Registration Form</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Please fill in your personal information below</p>
          <form name="registerform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <table>
                <tr>
                  <td id="tabletext">Matric ID: </td>
                  <td><input type="text" name="Member_Matric" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Name: </td>
                  <td><input type="text" name="Member_Name" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">IC Number: </td>
                  <td><input type="text" name="Member_IC" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Address: </td>
                  <td><input type="text" name="Member_Address" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">States: </td>
                  <td id="tablepad">
                    <select name="Member_State" style="width: 100%; height: ">
                      <option value="-- Select a state --" >-- Select a state --</option>
                      <option value="Kedah">Kedah</option>
                      <option value="Kelantan">Kelantan</option>
                      <option value="Johor">Johor</option>
                      <option value="Melaka">Melaka</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Pahang">Pahang</option>
                      <option value="Perak">Perak</option>
                      <option value="Perlis">Perlis</option>
                      <option value="Sabah">Sabah</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Selangor">Selangor</option>
                      <option value="Terengganu">Terengganu</option>
                      <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                      <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                      <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td id="tabletext">Phone Number: </td>
                  <td><input type="text" name="Member_Phone" size="50"></td>
                </tr>
                <tr>
                  <td id="tabletext">Gender: </td>
                  <td align="left" style="color: white;">
                    <input type="radio" name="Member_Gender" value="male" > Male
                    <input type="radio" name="Member_Gender" value="female"> Female
                  </td>
                </tr>
                <tr>
                  <td id="mybtn" colspan="2"><center><input  class="btn btn-primary" type="submit" name="addbtn" value="Complete Registration" ></center></td>
                </tr>
              </table>
            </form>
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
<?php   
    if (isset($_POST['addbtn'])) {
      $membermatric = addslashes($_POST['Member_Matric']);
      $membername = addslashes($_POST['Member_Name']);
      $memberic = addslashes($_POST['Member_IC']);
      $memberaddress = addslashes($_POST['Member_Address']);
      $memberstates = addslashes($_POST['Member_State']);
      $memberphone = addslashes($_POST['Member_Phone']);
      $membergender = addslashes($_POST['Member_Gender']);
      
      $result = mysqli_query($conn,"INSERT INTO member(Application_Date, Member_Matric, Member_Name, Member_IC, Member_Address, Member_State, Member_Phone, Member_Gender, Member_Status) VALUES 
        (curdate(),'$membermatric', '$membername', '$memberic', '$memberaddress', '$memberstates', '$memberphone', '$membergender', 'Pending')");

      // untuk dapatkan last ID auto increment yang create dekat DB
      $id = mysqli_insert_id($conn);

      if ($result) {
         echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('Successful. Please keep your Application ID to check your request status.')
             window.location = 'guest_confirm.php?Application_ID=' + $id;
            </SCRIPT>");
      }else{
         echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('Fail')
            window.location = 'guest_register.php?result=fail';
            </SCRIPT>");
       }
      }
?>