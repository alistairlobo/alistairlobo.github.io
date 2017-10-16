<?php  
define('DB_HOST', 'mysql.hostinger.in');
define('DB_NAME', 'u479235051_ideas');
define('DB_USER','u479235051_brox');
define('DB_PASSWORD','webdevidea');
$dbcon=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
mysqli_select_db($dbcon,DB_NAME);  
?> 