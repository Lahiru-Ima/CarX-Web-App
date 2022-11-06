<?php
	$server="localhost";
	$username="root";
	$password="";
	$dbname="19it506";

	//create connection_aborted
	$conn=new mysqli($server,$username,$password,$dbname);
	//check connection_aborted
	if ($conn->connect_error){
		die("connection failed:" . $conn->connect_error);
	} else {
		//echo "Connected Successfully";
	}
?>