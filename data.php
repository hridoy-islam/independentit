<?php 
	include "database.php"; 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$problem = $_POST['problem'];
	$message = $_POST['message'];


	$shuvo = "INSERT INTO client (name, email, phone, problem, message) VALUES ('$name', '$email', '$phone', '$problem', '$message')";
	$sohel = mysqli_query($connection, $shuvo);

	if ($sohel) {
		echo "DATA INSERTRD";
	} else {
		die("QUERY ERROR");
	}
	






?>