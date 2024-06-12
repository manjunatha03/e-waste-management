<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['k_type']) && isset($_POST['k_companyname']) &&
        isset($_POST['k_brand']) && isset($_POST['k_switch']) &&
        isset($_POST['k_port']) && isset($_POST['k_work']) &&
        isset($_POST['k_specs'])) {

        $email=$_POST['email'];
        $k_type= $_POST['k_type'];
        $k_companyname = $_POST['k_companyname'];
        $k_brand = $_POST['k_brand'];
        $k_switch = $_POST['k_switch'];
        $k_port = $_POST['k_port'];
        $k_work = $_POST['k_work'];
        $k_specs = $_POST['k_specs'];
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "data";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO keyboard(email,k_type, k_companyname, k_brand, k_switch, k_port, k_work, k_specs) values(?,?, ?, ?, ?, ?, ?, ?)";
            
            
            
                
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssss",$email,$k_type, $k_companyname, $k_brand, $k_switch, $k_port, $k_work, $k_specs);
                if ($stmt->execute()) {
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('keyboard records registered sucessfully,add more products or checkout');
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