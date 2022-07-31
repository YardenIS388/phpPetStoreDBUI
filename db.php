<?php
    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "315424721";
	// $dbname = "Local instance 3306";
    $connection = mysqli_connect($dbhost,$dbuser,$dbpass);
    if(mysqli_connect_errno()){
        die("DB CONNECTION FAILED".mysqli_connect_error() . "(".mysqli_connect_errno() . ")");
    }
   
 
?>