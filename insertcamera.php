<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['c_companyname']) && isset($_POST['c_modelname']) &&
        isset($_POST['c_storage']) && isset($_POST['c_batterypower']) &&
        isset($_POST['c_maxres']) && isset($_POST['c_lowres']) &&
        isset($_POST['c_zoom']) && isset($_POST['c_dim']) &&
        isset($_POST['c_specs']) && isset($_POST['c_work'])) {

        $email= $_POST['email'];
        $c_companyname = $_POST['c_companyname'];
        $c_modelname = $_POST['c_modelname'];
        $c_storage= $_POST['c_storage'];
        $c_batterypower = $_POST['c_batterypower'];
        $c_maxres = $_POST['c_maxres'];
        $c_lowres = $_POST['c_lowres'];
        $c_zoom = $_POST['c_zoom'];
        $c_dim = $_POST['c_dim'];
        $c_work = $_POST['c_work'];
        $c_specs = $_POST['c_specs'];
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "data";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO camera(email,c_companyname, c_modelname, c_storage, c_batterypower, c_maxres, c_lowres, c_zoom, c_dim, c_work, c_specs) values(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            
            
                
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssiiiiisss", $email,$c_companyname, $c_modelname, $c_storage, $c_batterypower, $c_maxres, $c_lowres, $c_zoom, $c_dim, $c_work, $c_specs);
                if ($stmt->execute()) {
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('camera records registered sucessfully,add more products or checkout');
                    window.location.href='index1.php';
                    </script>");
                }
                
            
            else {
                echo"<script>alert('details were not recorded');</script>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>