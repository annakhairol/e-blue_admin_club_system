<?php include'conn.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Blue Sports Club</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <h1><i class="fa fa-paw"><a href="guest_dashboard.php"></i> E-Blue Sports Club</a></h1>
          <section class="login_content">
                   <form name="loginform" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="Username" class="form-control" placeholder="Username" required="required" />
              </div>
              <div>
                <input type="password" name="Password" class="form-control" placeholder="Password" required="required" />
              </div>
              <div style="padding-left: 30% ">
                <input type="submit" name="loginbtn" value="Log in" class="btn btn-primary">
                <!-- <a class="btn btn-default submit" href="administrator">Log in</a> -->
              </div>

              <div class="clearfix"></div>
                <br />

                <div>
                  
                  <p>&copy; Copyright 2018-2019, UiTM Cawangan Perlis</p>
                </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
if (isset($_POST["loginbtn"]))
{
  $adminmatric = $_POST["Username"];
  $adminic = $_POST["Password"];

  $membermatric = $_POST["Username"];
  $memberic = $_POST["Password"];

  $check_admin = mysqli_query($conn,"SELECT * FROM administrator WHERE Admin_Matric = '$adminmatric' AND Admin_IC = '$adminic'");

  $check_member = mysqli_query($conn, "SELECT * FROM member WHERE Member_Matric = '$membermatric' AND Member_IC = '$memberic' AND Member_Status = 'Approved'");
      
  if ($row=mysqli_fetch_assoc($check_admin))
  {
    $_SESSION["adminmatric"] = $row["Admin_Matric"];    
    header("Location: admin_dashboard.php");       
  }
  else
  {
      if ($row=mysqli_fetch_assoc($check_member))
      {
        $_SESSION["membermatric"] = $row["Member_Matric"];    
        header("Location: member_dashboard.php");       
      }
      else
      {
      ?>
          <script type = "text/javascript">
            alert("Invalid Email or Password. If you have registered, your application is still in process");
          </script>
      <?php
      }
  }
}
?>