<?php

$host="localhost";
$username="root";
$password="";
$dbname="phplearn";

$con=mysqli_connect($host,$username,$password,$dbname);
if (!$con)
 {
	// echo 'connection success'."<br>";
	die("connection_aborted");
 }



?>