<?php
include_once 'connection.php';
session_start();
$email=$_SESSION['email'];
$result = mysqli_query($db,"SELECT fullName,buildingNumber,area,app_date,app_time  FROM personal_details,members where personal_details.email='$email'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="styles.css">

 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>

  <tr>
    <br><br>
      <h1>CONFIRMATION OF APPOINTMENTS FOR <?php echo $email?></h1>
    <td>NAME</td>
    <td>BuildingNumber</td>
    <td>Date</td>
    <td>Time</td>
    <td>Area</td>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["fullName"]; ?></td>
    <td><?php echo $row["buildingNumber"]; ?></td>
    <td><?php echo $row["area"]; ?></td>
    <td><?php echo $row["app_date"]; ?></td>
    <td><?php echo $row["app_time"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
