<html>
<head>

	<style>
	*{
	padding:0;
	margin:0;
	
	}
	.menu ul{float:left;
	list-style:none;
	margin:0;
	opacity:0.8;
	}
	.menu ul li{
		padding:15px;
		position:relative;
		width:200px;
		background-color:black;
		margin-bottom:1px ;
	}
	.menu ul li a{
		color:#fff;
		text-decoration:none;
	}
	.menu ul ul
	{
		float:left;
		opacity:0;
		visibility:hidden;
		position:absolute;
		transition:all 0.3s;
		left:100%;
		top:-2%;
	}
	.menu ul li:hover > ul{
		opacity:1;
		visibility:visible;
	}
	.menu ul li:hover{
	background-color:brown;
	}
	.menu ul ul li{float:left;
	margin-left:1px;
	}
	
	</style>
</head>
	<body>
	
	<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
	
	<div class="menu">
		<ul>
			<li style="width:200px;"><a style="display:block;" href="admin.php">Home</a></li>
			<li><a style="display:block";>Menu</a>
				<ul>
					<li><a style="display:block;" href="adminsand.php">Sandwiches</a></li>
					<li><a style="display:block;" href="adminburger.php">Burgers</a></li>
					<li><a style="display:block;" href="adminpizza.php">Pizza</a></li>
					<li><a style="display:block;" href="adminbev.php">Beverages</a></li>
					<li><a style="display:block;" href="admindess.php">Desserts</a></li>
					
				</ul>
			</li>
			<li><a style="display:block;" href="sale.php">Sale</a></li>
			<li><a style="display:block;" href="adddish.php">Update Dish</a></li>
			<li><a style="display:block;" href="addimg.php">Add Dish</a></li>
			<li><a style="display:block;" href="del.php">Delete Dish</a></li>
			<li style="background-color:black;height:250%;"></li>
		</ul>
	</div>
	
	</body>
</html>
<?php
include'connection.php';
?>
<form method="post" action="adminlogout.php">
<input style="margin-top:10px;float:right;margin-right:5px;" type="submit" name="adminlog" value="Log Out">
</form>

