<?php 
$servername='localhost'; 
$username='root'; 
$password=''; 
$dbname = "uasweb"; 
$conn=mysqli_connect($servername, $username, 
$password, "$dbname"); 
if (!$conn) { 
	die ('Tidak bisa terhubung ke MySQL:' .mysql_error()); 
}
else{
	echo "";
}
?> 