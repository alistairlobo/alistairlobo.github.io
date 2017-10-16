<?php

define('DB_HOST', 'mysql.hostinger.in');
define('DB_NAME', 'u479235051_ideas');
define('DB_USER','u479235051_brox');
define('DB_PASSWORD','webdevidea');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());

	$name = $_POST['name'];
	$email = $_POST['email'];
	$idea1 =  $_POST['idea1'];
	$query = "INSERT INTO ideas (name,email,idea1) VALUES ('$name','$email','$idea1')";
	$data = mysqli_query($con,$query)or die(mysql_error($con));
	if($data)
	{
	echo "Thank you for submitting your ideas";
	}