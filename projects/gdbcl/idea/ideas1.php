<!DOCTYPE HTML>
<html>
<head>
<title>Ideas</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body id="body-color">
<div id="Sign-Up">
<form class="share" method="POST" action="ideaconn.php">
<li>
<h2>SHARE YOUR IDEAS</h2>
</li>
<ul>
<li>
<label>Name</label>
<input type="text" name="name">
</li>
<li>
<label>Email</label>
<input type="text" name="email">
</li>
<br>
<li>
<label>Share your ideas here</label>
<input type="text" name="idea1">
</li>
<li>
<button class="submit" id="button" type="submit" name="submit" value="Register">submit</button>
</li>
</ul>
</form>

</div>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'idea');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo "Successfully connected to the database";
}
?>

</body>
</html>
