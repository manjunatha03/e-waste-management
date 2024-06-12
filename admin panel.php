<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: admin login.php");
}
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <style>
        body{
            margin:0px;
        }
       div.header{
           font-family:poppins;
           display:flex;
           justify-content: space-between;
           align-items:center;
           padding: 0px 60px;
           background-color: #204969;
       } 
       div.button{
            background-color: #f0f0f0;
            font-size:16px;
            font-weight:550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;

       }
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
    <div class="header">
  <h1>WELCOME - <?php echo $_SESSION['AdminLoginId']?></h1>  
  <form method="POST">
<button name="logout">LOG OUT</button>
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: admin login.php");
    
}
?>
</form>
    </div>
<table>
        <thead>
            <tr>
            <th>NAME</th>
            <th>BuildingNumber</th>
            <th>Street name</th>
            <th>Area</th>
            <th>Pincode</th>
            <th>Date</th>
            <th>Time</th>
            <th>laptop</th>
            <th>keyboard</th>          
            <th>camera</th>
            <th>mobile</th>
            <th>pc</th>
            <th>other</th>

</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect("localhost","root","","cm");
if($conn-> connect_error)
{
    die("connection failed:". $conn-> connect_error);
}

$query = $conn->query("SELECT fullName,buildingNumber,streetName,area,pinCode,app_date,app_time,company_name,model_name, k_companyname, c_companyname,c_modelname,m_companyname,m_modelname,p_companyname,o_proname FROM personal_details left JOIN members on members.email=personal_details.email left join laptop on laptop.email=personal_details.email LEFT join keyboard on keyboard.email=personal_details.email LEFT join camera on camera.email=personal_details.email LEFT JOIN mobile on mobile.email=personal_details.email LEFT JOIN pc on pc.email=personal_details.email left JOIN other on other.email=personal_details.email;");
$nums = mysqli_num_rows($query);
while($res=mysqli_fetch_assoc($query))
{
    ?>
    <tr>
        <td><?php  echo $res['fullName'] ;?></td>
        <td><?php  echo $res['buildingNumber'] ;?></td>
        <td><?php  echo $res['streetName'] ;?></td>
        <td><?php  echo $res['area'] ;?></td>
        <td><?php  echo $res['pinCode'] ;?></td>
        <td><?php  echo $res['app_date'] ;?></td>
        <td><?php  echo $res['app_time'] ;?></td>
        <td><?php  echo $res['company_name'] . $res['model_name'];?></td>
        <td><?php  echo $res['k_companyname'] ;?></td>
        <td><?php  echo $res['c_companyname'] . $res['c_modelname'];?></td>
        <td><?php  echo $res['m_companyname'] . $res['m_modelname'] ;?></td>
        <td><?php  echo $res['p_companyname'] ;?></td>
        <td><?php  echo $res['o_proname'] ;?></td>
        <form method="POST">
        <td><button type="submit" name="confirm">Confirm</button>
        <?php
        if(isset($_POST['confirm']))
        {
            echo ("<script LANGUAGE='JavaScript'>
		window.alert('appointment cofirmed');
		window.location.href='admin panel.php';
		</script>");
        }
       
?>
</tr>
<?php
}   
?>
</tbody>
</table>

<?php 
       
$conn->close();
?>
</table>
</body>
</html>