<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="Post">
<input type="text" name="string">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
$con = new PDO("mysql:host=localhost; dbname=items",'root','');
if(isset($_POST["submit"])){
$str = $_POST["string"];
$sth = $con->prepare("SELECT * FROM pizza WHERE Name= '$str'");
$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth -> execute();
if($row = $sth->fetch())
{
	?>
	<br><br><br>
	<table>
	<tr>
	<th>Name</th>
	<th>Price</th>
	</tr>
	<tr>
	<td><?php echo $row->name; ?></td>
	<td><?php echo $row->price; ?></td>
	</tr>
	</table>
<?php
}
else{
echo "Does Not Exist";
}
}



?>


