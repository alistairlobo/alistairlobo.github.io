
  <html>
<head>
<title>Admin-Login:GDBCL</title>
<link rel="stylesheet" type="text/css" href="user_login.css">
</head>
<body>
<center><br><br><br>
<img id="login_logo" src="login-logo.png"/>
<br><h4>GDBCL Administrator</h4>
<br></br>


<form action="#" method="post">


<input type="text" name="user" placeholder="Username..."/><br></br>

<input type="password" name="pass" placeholder="Password..."/><br></br>
<input type="submit" id="button" name="submit" value="Login"/>
<br><br> Register <a href="reg.php">here</a>

</form>
<br></br><br></br>
<a href="index.html"><img id="home_login" src="home-login.png"/></a>
<br>GDBCL Home
</center>
<?php
define('DB_HOST', 'mysql.hostinger.in');
define('DB_NAME', 'u479235051_ideas');
define('DB_USER','u479235051_brox');
define('DB_PASSWORD','webdevidea');

session_start();
if(isset($_POST['submit']))
{
 #mysql_connect('localhost','root','') or die(mysql_error());
 #mysql_select_db('new') or die(mysql_error());
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
 $userName = $_POST['user'];
 $password = $_POST['pass'];
 if(!empty($_POST['user'])&&!empty($_POST['pass']))
 #if($user!=''&&$pass!='')
 {
  $query = mysqli_query($con,"SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

   #$query=mysql_query("SELECT * FROM websiteusers where userName='".$user."' && password='".$pass."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    if($_SESSION['userName']== $user && $_SESSION['password']==$pass)
    header('Location: admin.html');
    echo'Logged in';
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>

</body>
</html>