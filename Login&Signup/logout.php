<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);

echo ("<script LANGUAGE='JavaScript'>
					parent.window.location.href='../frame2.php'
					</script>");
?>