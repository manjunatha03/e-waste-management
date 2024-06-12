<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['p_companyname']) && isset($_POST['p_speed']) &&
        isset($_POST['p_hd']) && isset($_POST['p_screensize']) &&
        isset($_POST['p_ram']) && isset($_POST['p_work']) &&
        isset($_POST['p_specs'])) {
        
        $email= $_POST['email'];
        $p_companyname= $_POST['p_companyname'];
        $p_speed= $_POST['p_speed'];
        $p_hd = $_POST['p_hd'];
        $p_screensize = $_POST['p_screensize'];
        $p_ram = $_POST['p_ram'];
        $p_work = $_POST['p_work'];
        $p_specs = $_POST['p_specs'];
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "data";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO pc(email,p_companyname, p_speed, p_hd, p_screensize, p_ram, p_work, p_specs) values(?,?, ?, ?, ?, ?, ?, ?)";
            
            
            
                
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssiiiiss",$email,$p_companyname, $p_speed, $p_hd, $p_screensize, $p_ram, $p_work, $p_specs);
                if ($stmt->execute()) {
                    echo"<script>alert('Details recorded successfully');</script>";
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