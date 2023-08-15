<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Over View</title>
	<link rel="stylesheet" type="text/css" href="overview_style.css">
	<script src="loadpages.js">
	</script>
</head>
<body>
<div class="main">
	<h1 class="overview">OverView</h1>
	<h2 class="overview_name">Hi, Welcome</h2>
	<h3>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</h3>
	<center>
		<button class="quick_btn" onclick="loadPage('orders')">Orders</button>
		<button class="quick_btn" onclick="loadPage('settings')">Settings</button>
		<button class="quick_btn" onclick="loadPage('logout')">Logout</button>
	</center>

	<h2 class="order_title">Recent Orders</h2>
	<table id="order_details">
		<tr>
		<th width="150px">
			Order Id
		</th>
		<th width="150px">
			Image
		</th>
		<th>
			Product Name 
		</th>
		<th width="180px">
			Product Price
		</th>
		<th width="100px">
			Quantity
		</th>
		</tr>
		<?php 
			include("main.php");
			orderDetails(1); // (0 ->no limit & 1 -> LIMIT 3)
		?>
	</table>
</div>

</body>
</html>