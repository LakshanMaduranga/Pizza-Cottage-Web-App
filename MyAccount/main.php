<?php

function orderDetails($no)
{
	include("config.php");

	//---------------------- create sql commands ----------------------

	$q1 = "select * from orderitems WHERE orderid IN (select orders.orderid from orders,customer WHERE orders.cusid = '$userid')"; //used in order page
	$q2 = "select * from orderitems WHERE orderid IN (select orders.orderid from orders,customer WHERE orders.cusid = '$userid') LIMIT 3"; //used in overview page

	//---------------------- create sql commands ----------------------

	if($no == 0)
	{
		$sql_q = $q1;
	}
	else if ($no == 1) {
		$sql_q = $q2;
	}
	$result = $con->query($sql_q);

	while($row = $result->fetch_assoc()) 
	{	
		echo "
		<tr>
		<td>
		".$row['orderid']."
		</td>
		<td>
		<img src=".$row['oimage'].">
		</td>
		<td>
		".$row['pname']."
		</td>
		<td>
		".$row['pprice']."
		</td>
		<td>
		".$row['qty']."
		</td>
		</tr>";
	}
	$con->close();
}
?>