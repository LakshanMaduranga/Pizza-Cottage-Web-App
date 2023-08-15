<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "pizzacottage";
	$con= new mysqli($hostname,$username,$password,$db);
	// Check connection
	if ($con->connect_error) {
	die("Connection failed please contact us " . $con->connect_error);
	}
	if(isset($_POST["submitInfo"]))
	{
		$Email = $_POST["regEmail"];
		$Password = $_POST['regPassword'];
		$FName = $_POST['fname'];
		$LName = $_POST['lname'];
		$HouseNo = $_POST['houseNo'];
		$StreetName = $_POST['streetName'];
		$District = $_POST['districtSelect'];
		$City = $_POST['citySelect'];
		$MobileNo = $_POST['mobileNo'];
		$sql= "INSERT INTO customer
		(
		`email`,
		`password`,
		`firstname`,
		`lastname`,
		`houseno`,
		`streetname`,
		`city`,
		`district`,
		`mobileno`
		)
		VALUES
		(
		'$Email',
		'$Password',
		'$FName',
		'$LName',
		'$HouseNo',
		'$StreetName',
		'$District',
		'$City',
		'$MobileNo'
		)";
		if($con->query($sql))
		{
			echo ("<script LANGUAGE='JavaScript'>
					window.alert('Congratulations, your account has been successfully created');
					window.location.href='../frame2.php';
					</script>");
		}
		else 
		{
			echo ("<script LANGUAGE='JavaScript'>
					window.alert('Error have occured and the system cannot continue. Please try again!');
					window.location.href='register.html';
					</script>");
		}
		$con->close();
	}
?>
