<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "idea";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);//$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
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