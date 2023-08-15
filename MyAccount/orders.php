<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="orders_style.css">
	<title>Orders</title>
	<script>
	function search()
	{
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("search_products");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("order_details");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) 
	  {
	    td = tr[i].getElementsByTagName("td")[0];
	    if(td) 
	    {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) 
	      {
	        tr[i].style.display = "";
	      } 
	      else 
	      {
	        tr[i].style.display = "none";
	      }
	    }       
	  }
	}
	</script>
</head>
<body>
<div class="main_order_details">
	<h1 class="orders_title">Orders</h1>
	<div class="Search">
			<input type="text" id="search_products" onkeyup="search()" placeholder="Search by order ID">
	</div>
	<div class="user_order_details">
		<br>
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
			orderDetails(0); // (0 ->no limit & 1 -> LIMIT 3)
		?>
	</table>
	</div>
</div>
</body>
</html>