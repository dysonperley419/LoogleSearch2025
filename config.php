<?php
ob_start();

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";

$host = $_SERVER['HTTP_HOST'];

define('SITE_URL', $protocol . '://' . $host);

$dbname = "m11265_loogle";
$dbhost = "mysql2.serv00.com";
$dbuser = "m11265_dexptuba3";
$dbpass = "Dysonp2013";

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
