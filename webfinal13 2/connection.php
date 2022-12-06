<?php
session_start();
ob_start();
$servername = "localhost";
$username = "root";
$password="";
$database="artShop-4";
$connection = mysqli_connect($servername,$username,$password,$database);
if(!$connection){
	echo "ERROR! Unable to connect with DB";
}


?>