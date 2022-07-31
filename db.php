<?php
    $dbhost = "eu-cdbr-west-03.cleardb.net";
	$dbuser = "b388e7a7b39ca2";
	$dbpass = "3458317f";
	// $dbname = "Local instance 3306";
    $connection = mysqli_connect($dbhost,$dbuser,$dbpass);
    if(mysqli_connect_errno()){
        die("DB CONNECTION FAILED".mysqli_connect_error() . "(".mysqli_connect_errno() . ")");
    }
   
 
?>