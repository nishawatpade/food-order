<html>
<head>
<link rel="stylesheet" href="fontwesome.css">
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
	<img src='food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
	<div class="menu">
		<ul>
			<li style="width:200px;"><a>Home</a></li>
			<li><a>Menu</a>
				<ul>
					<li><a>Sandwiches</a></li>
					<li><a>Burgers</a></li>
					<li><a>Pizza</a></li>
					<li><a>Beverages</a></li>
					<li><a>Desserts</a></li>
				</ul>
			</li>
			<li><a href="sale.php">Sale</a></li>
			<li><a>Update</a></li>
			<li style="background-color:black;height:200%;"></li>
		</ul>
	</div>
	
	</body>
</html>
