<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

  <title>E-Parisara - details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://greene.gov.in/wp-content/uploads/2019/03/2019031148.jpg" rel="icon">
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="C:/xampp/htdocs/miniproject/Chethana2001-main/minip/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
		body{
			background-color: seashell;
		}
    div.login_form{
    width: 550px;
    background-color: #f2f4ff;
    box-shadow: 0px 5px 10px black;

}
div.login_form form{
    padding: 30px 60px;
          
}
div.login_form form input{
  margin: 0px 0px 10px 0px;
}
div.login_form form div.input-field i{
    color: rgb(8, 99, 99);
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;
    
}
div.login_form form div.input-field input{
    background-color: #f2f4f6;
    padding: 18px;
    border: none;
    width: 100%;
    padding-left: 15px;
}
div.login_form button{
    width: 50%;
    background-color: #0e4403;
    padding: 8px;
    border: none;
    align-items: center;
    font-size: 16px;
    font-weight: 500;
    color: white;
    margin:25px 0;
    transition: background-color 0.4s;
}
div.login_form button:hover{
    background-color: #03af76;
}
    

	</style>>
</head>

<body>
    <center>
      <br>
      <br>
      <br>
		<h1>WELCOME- <?php echo $_SESSION["email"];?></h1>
    <h2></h2>
    <br>
    <h3><strong>PERSONAL DETAILS</strong></h3>    
    <p> <strong>Please enter all the details mentioned below</strong></p>
    <div class="login_form">
        <form action="" method="POST">
        <div class="input-field">
            <input type="text" name="fullName" placeholder="Enter Full Name"><br>
  </div>
  <div class="input-field">
            <input type="text" name="phoneNumber" placeholder="Enter phoneNumber"><br> </div>
            <div class="input-field">
            <input type="text" name="email" placeholder="Enter email"><br>	</div>
            <div class="input-field">		
            <input type="text" name="wardNumber" placeholder="Enter ward number"><br> </div>
            <div class="input-field">
            <input type="text" name="buildingNumber" placeholder="Enter building number"><br></div>
            <div class="input-field">
            <input type="text" name="streetName" placeholder="Enter street name"><br> </div>
            <div class="input-field">
            <input type="text" name="area" placeholder="Enter area"><br> </div>
            <div class="input-field">
		    <input type="text" name="pinCode" placeholder="Enter pinCode"><br> </div>

		   
            <button type="submit" name="submit">Submit</button>
  </div>
    </form>    
  

</body>

</html>
<?php
if(isset($_POST['submit']))
{
	$fullName=$_POST['fullName'];
    $phoneNumber=$_POST['phoneNumber'];
    $email=$_POST['email'];
    $wardNumber=$_POST['wardNumber'];
    $buildingNumber=$_POST['buildingNumber'];
    $streetName=$_POST['streetName'];
    $area=$_POST['area'];
    $pinCode=$_POST['pinCode'];

    $sql="INSERT INTO `personal_details`(`FullName`, `phoneNumber`,`email`,`wardNumber`, `buildingNumber`, `streetName`, `area`, `pinCode`)   
       VALUES ('$fullName','$phoneNumber','$email','$wardNumber','$buildingNumber','$streetName','$area','$pinCode');";
  $query_run= mysqli_query($db,$sql);
  
   if ($query_run) 
	{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('personal details updated');
    window.location.href='index1.php';
    </script>");
	}
	else
	{
		echo '<script type = "text/javascript"> alert("data not inserted")</script>';
	}
}

?>
