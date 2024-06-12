<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>schedule</title>
    <meta charset= "utf-8" name="viewport"content="width=device-width, inital-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="scss.css">
</head>
  <body>
  <h2>SCHEDULE YOUR APPOINTMENT</h2>
  <div class="login_form">
	<form method="POST" action="process.php">
        
                <div class="input-field">
                <input type="text" placeholder="EMAIL" name="email">
                </div>
                <div class="input-field">
                <input type="text" placeholder="NAME" name="user_name">
                </div>
                <div class="input-field">
                <input type="text" placeholder="VERIFICATION ID" name="id_type">
                </div>
				<div class="input-field">
                <input type="text" placeholder="VERIFICATION NUMBER" name="id_number">
                </div>
				<div class="input-field">
                <input type="date" placeholder="APPOINTMENT DATE" name="app_date">
                </div>
                <div class="input-field">
                <input type="time" placeholder="APPOINTMENT TIME" name="app_time">
                </div>
				<button type="submit" name="save">SUBMIT</button>
</div>
	</form>
  </body>
</html>