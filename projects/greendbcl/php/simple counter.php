<?php

mysql_connect("localhost","root","01091995") or die("couldnt connect to database");
mysql_select_db("simple counter") or die ("couldnt find database");

$find_counts = mysql_query("SELECT * FROM User_count");

while ($row = mysql_fetch_assoc($find_counts)) 
{
	# code...
	$current_counts = $row['counts'];
	$new_count = $current_counts + 1;
	$update_count = mysql_query("UPDATE `simple counter` . `User_count` SET `counts` = $new_count");
echo $new_count;

}

?>