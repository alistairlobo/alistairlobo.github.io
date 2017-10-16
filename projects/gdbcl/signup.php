<?php

define('DB_HOST', 'mysql.hostinger.in');
define('DB_NAME', 'u479235051_ideas');
define('DB_USER','u479235051_brox');
define('DB_PASSWORD','webdevidea');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
	$data = mysqli_query($con,$query)or die(mysqli_error($con));
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}

}

function SignUp()
{
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysqli_query($con,"SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
	
	if ($_POST['pass']!= $_POST['cpass'])
 {
     echo("Oops! Password did not match! Try again. ");
 }

	else if(!$row = mysqli_fetch_array($query) or die(mysqli_error($con)))
	{
		NewUser();
	}
	else if($row = mysqli_fetch_array($query))
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
else
{

		echo "Please enter a user name";
}


}
if(isset($_POST['submit']))
{
	SignUp();
}

?>
