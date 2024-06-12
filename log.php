<?php
  include "connection.php";
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Parisara - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->'
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://greene.gov.in/wp-content/uploads/2019/03/2019031148.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="assets/css/styling.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>E-Parisaraa</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>


            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="log.php">User Login</a></li>
             <li><a href="admin login.php">Admin login</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
    <section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;color:white;"> </h1><br>
        <h1 style="text-align: center; font-size: 25px;">User </h1>
        <form name ="   " actions ="" method ="post">

 <div class="login">
          <input  class="form-control" type="text" name="username" placeholder="Username" required=""style="font-size:17px"> <br>
          <input  class="form-control" type="password" name="password" placeholder="Password" required="" style="font-size:17px"> <br>
     <input class="form-control" type="submit" name="submit" value="Login" style="color:green;width: 100px; height:50px;font-size: 15px;font-family: Lucida Console;">
          </div>

      <p style="color: black; padding-left: 10px ;">
        <br><br>
        <a style= "text-align: inherit; font-size: 17px; color:white;" href="">Forgot password?</a> <a style="font-size: 17px; color :yellow">New to this website?</a>
 <a style="color:white; font-size: 17px;" href="registration.php">Sign Up</a>
      </p>
    </form>
    </div>
  </div>
</section><!-- End Header -->
    <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `registration` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script>
              -->
              <script type="text/javascript">
               alert("The username and password doesn't match");
              </script>
          <div class="alert alert-danger" style="width: 350px; text-align: center; margin-left:500px;padding-bottom: 0px; background-color:#9a3735; color:white">
            <strong>The username and password doesn't match</strong>

          </div>
        <?php
      }
      else
      {
        $_SESSION['pic']= $row['pic'];
        $_SESSION['email']=$row['email'];

        ?>
          <script type="text/javascript">
            window.location="dd.php"
        $_SESSION['login_user'] = $_POST['username'];
          </script>
        <?php
      }
    }

  ?>



</body>
</html>
