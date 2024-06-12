<?php
  include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>USER DETAILS</title>
	<style>
		body{
			background-color: seashell;
		}
		input {
			width: 30%;
			height:8%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}

	</style>>
</head>
<body>
    <center>
		<h1>Personal Details</h1>
    <form action="" method="POST">
	<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>
  
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
       VALUES ('$SERIAL_NO','$phoneNumber','$email','$wardNumber','$buildingNumber','$streetName','$area','$pinCode');";
  $query_run= mysqli_query($db,$sql);
  
   if ($query_run) 
	{
		echo '<script type = "text/javascript"> alert("data inserted")</script>';
	}
	else
	{
		echo '<script type = "text/javascript"> alert("data not inserted")</script>';
	}
}

?>
    
