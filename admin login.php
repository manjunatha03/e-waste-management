<?php
 require("connection.php");
?>
<html>
<head>
    <title>admin_login</title>
    <meta charset= "utf-8" name="viewport"content="width=device-width, inital-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
    <div class="login_form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="ADMIN NAME" name="Admin_Name">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="PASSWORD" name="Admin_Password">
                </div>
            <button type="submit" name="signin">SIGN IN</button>
            <div class="extra">
                <a href="#">Forget Password ?</a> 
            </div>

        </form>
    </div>
<?php
if(isset($_POST['signin']))
{
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[Admin_Name]' AND `Admin_Password`='$_POST[Admin_Password]'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1)
    {
      session_start();
      $_SESSION['AdminLoginId']=$_POST['Admin_Name'];
      header("location: admin panel.php");
    }
    else
    {
      echo"<script>alert('incorrect password');</script>";
    }
}
?>
</body>
</html>