<?php 
$host="localhost";
$dbuser="hamza";
$dbpwd="hamza";
$dbName="login_system";
$connect=mysqli_connect($host,$dbuser,$dbpwd,$dbName);
if (!$connect==true) {
	echo "Established secure connection error!";
}
