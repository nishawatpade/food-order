<html>
<style>
.gallery{
display: inline-block;
margin-top:30px;
margin-right:10px;
}
.dishname{
display:inline-block;
width:100px;
height:100px;
font-size:13px;

color:black;
}
input[type="text"]{
width:35px;
height:20px;
}
.total{
margin-left:100px;
margin-top:50px;

width:100%;
display:inline-block;
}
.menu{
margin-left:500px;
margin-top:20px;
max-width:100px;
text-align:center;
padding:20px;
background-color:black;
color:white;
}
body{
background-image:url('menu-restaurant-table-23101317.jpg');

background-repeat:no-repeat;
size: cover;
background-attachment: fixed;
}</style>
<body>
<form method="post" action="neword.php">
<div style="margin-left:1100px;">
<input type="submit" name="log" value="Log Out">
</div>
<div class="total">
<div class="menu">
Sandwiches
</div><br>

<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Sandwich';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['img_path'];
		?>
		
		
		<img style="width:120px;height:120px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?>
		INR:<?php echo $row['cost']?>
		<input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>
		Quantity:<input type ="text" width="50px" name="q[]">
		</div>
		
		<?php
		}
		?>
		
		<?php
	}
?>
<br>
<br>
<br>
<div class="menu">
Burger
</div>
<br>
<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Burger';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['img_path'];
		?>
		
		
		<img style="width:120px;height:120px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?>
		INR:<?php echo $row['cost']?>
		<input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>
		Quantity:<input type ="text" width="50px" name="q[]">
		</div>
		
		<?php
		}
		?>
		
		<?php
	}
?>

<br><br><br>
<div class="menu">
Pizza
</div><br>
<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Pizza';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['img_path'];
		?>
		
		
		<img style="width:120px;height:120px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?>
		INR:<?php echo $row['cost']?>
		<input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>
		Quantity:<input type ="text" width="50px" name="q[]">
		</div>
		
		<?php
		}
		?>
		
		<?php
	}
?>

<br>
<br>
<br>
<div class="menu">
Beverages
</div><br>
<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Beverage';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['img_path'];
		?>
		
		
		<img style="width:120px;height:120px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?>
		INR:<?php echo $row['cost']?>
		<input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>
		Quantity:<input type ="text" width="50px" name="q[]">
		</div>
		
		<?php
		}
		?>
		
		<?php
	}
?>

<br><br><br>
<div class="menu">
Desserts</div><br>
<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Dessert';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['img_path'];
		?>
		
		
		<img style="width:120px;height:120px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?>
		INR:<?php echo $row['cost']?>
		<input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]" ></input>
		
		Quantity:<input type ="text" width="50px" name="q[]">
		
		</div>
		
		<?php
		}
		
	}
?>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>


