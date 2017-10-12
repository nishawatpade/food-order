<?php
include('connetion.php');
session_start();
	$username=$_SESSION['uname'];
	?>
<html>
<head>

	<style>
	*{
	padding:0;
	margin:0;
	
	}
	.gallery {
    
    margin-top:70px;
    margin-left:110px;
   
    border: 1px solid #ccc;
    float: left;
    width: 300px;
}

.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    
   
}
.dishname {
    padding: 10px;
    text-align: center;
    background-color:black;
    color:white;
opacity:0.5;
 font-weight: bold;
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
	
	<form method="post" action="cart.php">
	
	
	<input style="float:right;" type="submit" value=" View Cart" name="view">
	<input style="float:right;" type="submit" value ="Log Out" name="log">
	<p style="color:black;float:right;"><?php echo "Hi ".$username."!!" ;?></p>
	</form>
	<div class="menu">
		<ul>
			<li style="width:200px;"><a href="try.php">Sandwiches</a></li>
			<li><a href="bur2.php">Burgers</a></li>
			<li><a href="piz2.php">Pizza</a></li>
			<li><a href="bever2.php">Beverages</a></li>
			<li><a href="dess2.php">Desserts</a></li>
			<li style="background-color:black;height:250%;"></li>
		</ul>
	</div>
	<div style="margin-left:600px;">
	<form method="post" action="">
	
	<br>
	<input type="text" placeholder="Search here" name="search" required>
	<input  type="submit" name="find" value="Search">
	</form>
	</div>
	</body>
</html>
<?php
include 'connection.php';

if(isset($_POST['find']))
{
	$name=$_POST['search'];
	$sql="select * from menu where dishname like '%$name%' OR category like '%$name%';";

	//echo $sql;
	$result2=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['path'];
		?>
		<form method="post" action="cart.php">
		
		<div class="gallery">
		<img style="width:300px;height:200px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?></div>
		<div class="dishname"><input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>INR:<?php echo $row['cost']?></div>
		<div class="dishname">
		Quantity:<input type ="text" width="50px" name="q[]">
		<input type="submit" value="Add to cart" name="more">
		</div>
		
		</div>
		</form>
		<?php
		}
	}
	else
	{
		?><center><p style="color:white;"><?php echo "No results found";?></p></center>
		<?php
	}
}
?>
