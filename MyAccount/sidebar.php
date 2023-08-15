</!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
	<style type="text/css">
		body{
			margin: 0px;
		}
		div.nav{
			margin: 0;
  			padding: 0;
  			width: 100%;
  			background-color: #211e1e;
			position: fixed;
			height: 100%;
			overflow: auto;
		}
		div.nav a{
			display: block;
			color: white;
			padding: 16px;
			text-decoration: none;
		}	
		div a:hover{
			color: white;
			background-color: black;
		}
	</style>
	<script src="loadpages.js">
	</script>
</head>
<body>

<div class="nav">
	<a onclick="loadPage('dashboard')"><img src="imgs/dashboard.png" width="20px" height="20px"> Overview</a>
	<a onclick="loadPage('orders')"><img src="imgs/orders.png" width="20px" height="20px"> Orders</a>
	<a onclick="loadPage('settings')"><img src="imgs/settings.png" width="20px" height="20px"> Settings</a>
	<a onclick="loadPage('logout')"><img src="imgs/logout.png" width="20px" height="20px"> Logout</a>
</div>
</body>
</html>