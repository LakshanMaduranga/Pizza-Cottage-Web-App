<!DOCTYPE html>
<html>
<head><title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="homeother.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	

	<div>
		<div class="logo"><a href ="afterlog.php" target="bottom"><img src="images/logo.png"></a></div>
		
	</div>    
		<svg class="svg" width="160" height="60">
			<rect width="160px" height="48px" style="fill:#211e1e;stroke-width:0;stroke:rgb(0,0,0)" />
		</svg>
	<div class="navbar">

		<a class="active" href="afterlog.php" target="bottom">Home</a>
		<div class="subnav">
			<a class="subnavbtn" href="Products/index.php" target="bottom">Products</a>
		</div>
		<div class="subnav">
			<button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
				<div class="subnav-content">
					<a href="group.html" target="bottom">Team</a>
					<a href="careers/career.html" target="bottom">Careers</a>
				</div>
		</div>
		
				

		<form method="Post">
		<div class="search-container">
			<input class ="input" type="text" placeholder="What are you looking for......." name="string">
			<!--<div class="subnav">-->
			<button class="subnavbtn" type="submit" name="submit"><i class="fa fa-search"></i></button>
			<div>
			<?php
			//echo "<a>".$pname." <br>".$pprice."</a>";
			$con = new PDO("mysql:host=localhost; dbname=pizzacottage",'root','');
			if(isset($_POST["submit"]))
			{ echo $_POST["submit"];
				$str = $_POST["string"];
				$sth = $con->prepare("SELECT * FROM product WHERE name= '$str'");
				$sth->setFetchMode(PDO:: FETCH_OBJ);
				$sth -> execute();
				if($row = $sth->fetch())
				{	$pname=$row->name;
					$pprice=$row->price;
					
					echo "<a target="."bottom"." href="."Products/index.php".">Name :$pname<br>Price :$pprice</a>";
				}
				else
				{
					//<div class="notexist">
					echo "Does Not Exist";
					//</div>
				}
			}
			?>
			</div>
			</div>
		

		
		</form>
		
		<diV class="user">
				<div class="subnav">
					<a class="subnavbtn" href="MyAccount/MyAccount.php" target="bottom"><i class="fa fa-user-circle fa-lg"></i></a>
				</div>
			</div>
		

	</div>
	
	
</body>
</html>



