<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['o_proname']) && isset($_POST['o_company']) &&
        isset($_POST['o_work']) && isset($_POST['o_specs'])) {
        
        $email= $_POST['email'];
        $o_proname= $_POST['o_proname'];
        $o_company= $_POST['o_company'];
        $o_work = $_POST['o_work'];
        $o_specs = $_POST['o_specs'];
        
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "data";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO other(email,o_proname, o_company, o_work, o_specs) values(?,?, ?, ?, ?)";
            
            
            
                
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss",$email,$o_proname, $o_company, $o_work, $o_specs,);
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