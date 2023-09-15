<?php
ob_start();

$dbname = "loogle-search";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "nicknick";

try 
{
	$con = new PDO("mysql:dbname=$dbname;host=$dbhost", "$dbuser", "$dbpass");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) 
{
	echo "Connection failed: " . $e->getMessage();
}
?>
