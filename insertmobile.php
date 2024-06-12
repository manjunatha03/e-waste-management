<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['m_companyname']) && isset($_POST['m_modelname']) &&
        isset($_POST['m_screensize']) && isset($_POST['m_batterypower']) &&
        isset($_POST['m_sim']) && isset($_POST['m_port']) &&
        isset($_POST['m_pcamera']) && isset($_POST['m_fcamera']) &&
        isset($_POST['m_ram']) && isset($_POST['m_work']) &&
        isset($_POST['m_specs'])) {
        
        $email= $_POST['email'];
        $m_companyname= $_POST['m_companyname'];
        $m_modelname = $_POST['m_modelname'];
        $m_screensize = $_POST['m_screensize'];
        $m_batterypower = $_POST['m_batterypower'];
        $m_sim = $_POST['m_sim'];
        $m_port = $_POST['m_port'];
        $m_pcamera = $_POST['m_pcamera'];
        $m_fcamera = $_POST['m_fcamera'];
        $m_ram = $_POST['m_ram'];
        $m_work = $_POST['m_work'];
        $m_specs = $_POST['m_specs'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "data";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO mobile(email,m_companyname, m_modelname, m_screensize, m_batterypower, m_sim, m_port, m_pcamera, m_fcamera, m_ram, m_work, m_specs) values(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            
            
                
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssiissiiiss",$email,$m_companyname, $m_modelname, $m_screensize, $m_batterypower, $m_sim, $m_port, $m_pcamera, $m_fcamera, $m_ram, $m_work, $m_specs);
                if ($stmt->execute()) {
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('mobile records registered sucessfully,add more products or checkout');
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