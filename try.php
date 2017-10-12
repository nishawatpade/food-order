<?php
include 'cust.php';
include 'connection.php';
session_start();
$username=$_SESSION['uname'];
?>
<html>
<style>
*{
margin:0px;
padding:0px;

}
.total
{ 
  background-color:blue;
 

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
body{
 background-color:black;

 background-attachment: fixed;
 background-image:url('empty-cutting-board-paprika-28172847.jpg');
background-repeat: no-repeat;
 background-size: 100%;
}
 .heading{

margin-left:400px;
margin-right:400px;
padding:20px;
color:white;
background-color:black;
font-family:times;
opacity:0.5;
font-size:30px;
 font-weight: bold;
}
</style>
<body>
<form method="post" action="">
	<input style="margin-left:300px;" type="text" placeholder="Search here" name="search" required>
	<input  type="submit" name="find" value="Search">
</form>
<form method="post" action="cart.php">
	<input style="float:right;" type="submit" value=" View Cart" name="view">
	<input style="float:right;" type="submit" value ="Log Out" name="log">
	<p style="color:black;float:right;"><?php echo "Hi ".$username."!!" ;?></p>
	</form>
<?php
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
	{?>
	<p style="margin-left:600px;"><?php echo "No results found";?></p>
	<?php
	}
}
else
{
?>
<form method="post" action="cart.php">
	<!--<input style="float:right;" type="submit" value=" View Cart" name="view">
	<input style="float:right;" type="submit" value ="Log Out" name="log">-->
<div style="padding-top:130px;padding-left:500px;padding-right:500px;	">
<center><p style="color:white;text-align:center;font-size:30px;padding-right:250px;padding-left:90px;padding-top:20px;padding-bottom:20px;background-color:black;opacity:0.5;">Sandwiches</p></center>
</div>
<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Sandwich';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['path'];
		?>
		
		<div class="gallery">
		<img style="width:300px;height:200px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?></div>
		<div class="dishname"><input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>INR:<?php echo $row['cost']?></div>
		<div class="dishname">
		Quantity:<input type ="text" width="50px" name="q[]">
		<input type="submit" value="Add to cart" name="more">
		</div>
		
		</div>
		<?php
		}
	}
?>


</form>
<?php
}
?>
</body>
</html>
