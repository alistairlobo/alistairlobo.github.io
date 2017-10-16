<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'idea');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function enterideas()
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$idea1 =  $_POST['idea1'];
	$query = "INSERT INTO ideas (name,email,idea1) VALUES ('$name','$email','$idea1')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "Thank you for submitting your ideas";
	}

}
if(isset($_POST['submit']))
{
	enterideas();
}