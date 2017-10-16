<!--?php
	$count_my_page = ("/hitcounter.txt");
	$hits = file($count_my_page);
	$hits[0] ++;
	$fp = fopen($count_my_page , "w");
	fputs($fp , "$hits[0]");
	fclose($fp);
	echo $hits[0];
?>-->

<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("/hitcounter.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo "$count" ;
echo " hits" ;
echo "\n" ;

// opens countlog.txt to change new hit number
$datei = fopen("/hitcounter.txt","w");
fwrite($datei, $count);
fclose($datei);

?>