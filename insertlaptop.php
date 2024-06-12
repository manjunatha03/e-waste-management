<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['company_name']) && isset($_POST['model_name']) &&
        isset($_POST['screen_size']) && isset($_POST['cpu']) &&
        isset($_POST['batterypower']) && isset($_POST['ram']) &&
        isset($_POST['storage']) && isset($_POST['operating_system']) &&
        isset($_POST['os_version']) && isset($_POST['work']) &&
        isset($_POST['specs'])) {
        
        $email= $_POST['email'];
        $company_name = $_POST['company_name'];
        $model_name = $_POST['model_name'];
        $screen_size = $_POST['screen_size'];
        $cpu = $_POST['cpu'];
        $batterypower = $_POST['batterypower'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];
        $operating_system = $_POST['operating_system'];
        $os_version = $_POST['os_version'];
        $work = $_POST['work'];
        $specs = $_POST['specs'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "data";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {

            $Insert = "INSERT INTO `laptop`(`email`, `company_name`, `model_name`, `screen_size`, `cpu`, `batterypower`, `ram`, `storage`, `operating_system`, `os_version`, `work`, `specs`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
            
            
            
            
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssisiisssss",$email,$company_name, $model_name, $screen_size, $cpu, $batterypower, $ram, $storage, $operating_system, $os_version, $work, $specs);
                if ($stmt->execute()) {
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('laptop records registered sucessfully,add more products or checkout');
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