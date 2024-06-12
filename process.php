<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	  $email=$_POST['email'];
	 $user_name = $_POST['user_name'];
	 $id_type = $_POST['id_type'];
     $id_number = $_POST['id_number'];
	 $app_date = $_POST['app_date'];
	 $app_time = $_POST['app_time'];
	 $sql ="INSERT INTO `members` (`user_name`,`email`,`id_type`, `id_number`, `app_date`, `app_time`) VALUES ('$user_name', '$email',' $id_type',  '$id_number', '$app_date', '$app_time');";
	 if (mysqli_query($db, $sql)) {
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Succesfully booked appointment.check confirmed appointment page for more info');
		window.location.href='index1.php';
		</script>");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>