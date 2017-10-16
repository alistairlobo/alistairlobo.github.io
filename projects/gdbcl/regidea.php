<!doctype html>
<html lang="en-US">
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/styles1.css"/>
        <link rel="stylesheet" href="css/gallery.theme.css"/>
        <link rel="stylesheet" href="css/gallery.min.css"/>
        <link rel="stylesheet" href="css/table.css"/>
    </head>
    <body>
    <style type="text/css">
	table {
		font-family: verdana,arial,sans-serif;
		font-size:11px;
		color:#333333;
		border-width: 1px;
		border-color: #999999;
		border-collapse: collapse;
		margin-left: 100px;
	}
	table th {
		background:#b5cfd2 url('cell-blue.jpg');
		border-width: 1px;
		padding: 8px;
		border-style: solid;
		border-color: #999999;
	}
	table td {
		background:#dcddc0 url('cell-grey.jpg');
		border-width: 1px;
		padding: 8px;
		border-style: solid;
		border-color: #999999;
	}
</style>

    <img src="images/01.1.png" class="holo-div">

    <span class="scroll-top" id="scroll-top-id">
          <a href="#filler"><img src="images/scroll-img.png" width="25px" height="28px"></a>
    </span>

    <div class="social-icons">
      <ul>
        <li><a href="https://www.facebook.com"><img src="images/facebook.png"></a></li>
      </ul>
      <ul>
        <li><a href="https://www.twitter.com"><img src="images/twitter.png"></a></li>
      </ul>  
      <ul>
        <li><a href="#"><img src="images/rss.png"></a></li>
      </ul>  
      <ul>
        <li><a href="https://www.blogger.com"><img src="images/blogger.png"></a></li>
      </ul>   
    </div>
    
    <section id="filler">
      <section id="wrapper">
        <div class="css-carousel">
          
        </div>  
      </section>
        <nav>
          <ul>
            <!--<li><a href="#">Help</a></li>-->
            
            <li><a href="index.html">Sign Out</a></li>
            <li><a href="regidea.php">ideas submitted</a></li>
            <li><a href="reguser.php">registered users</a></li>
          </ul>
          <ul>
            <img src="images/main-logo3.png" class="main-logo-class"/>
          </ul>
        </nav>
      </section>

<?php
define('DB_HOST', 'mysql.hostinger.in');
define('DB_NAME', 'u479235051_ideas');
define('DB_USER','u479235051_brox');
define('DB_PASSWORD','webdevidea');
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
mysqli_select_db($conn,DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$sql = "SELECT * FROM ideas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 echo "<table border= '1' ><tr><th>Name</th><th>Email</th><th>IDEAS</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row ["email"] . "</td><td>" . $row["idea1"] ."</td></tr><br>";
    } echo "</table>";
} else {
    echo "0 results";
}
?>
        </div>  
</div> 

      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/modernizr.js"></script>
      </body>
      </html>