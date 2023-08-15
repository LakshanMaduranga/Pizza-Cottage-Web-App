<?php
	//create database connection

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "pizzacottage";
	$con= new mysqli($hostname,$username,$password,$db);

	if($con->connect_error)
	{
		echo "failed".$con->connect_error;
	}

	$userid;
	session_start();
	if($_SESSION["email"])
	{
		$userid = $_SESSION["email"];
	}
	else {
		echo "<h1>Please login first .</h1>";
	}
?>