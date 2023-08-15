<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $hostname = "localhost";
		$username = "root";
		$password = "";
		$db = "pizzacottage";
		$con= new mysqli($hostname,$username,$password,$db);
		// Check connection
		if ($con->connect_error) {
		die("Database Connection failed: " . $con->connect_error);
		}
        $result = mysqli_query($con,"select * from customer WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
		echo ("<script LANGUAGE='JavaScript'>
					window.location.href='afterlog.php';
					</script>");
        } else {
         echo ("<script LANGUAGE='JavaScript'>
					window.alert('Login failed. Invalid username or password.');
					window.location.href='../frame2.php';
					</script>");
        }
    }
    if(isset($_SESSION["email"])) {
    header("Location:../afterlog.php");
    }
?>
