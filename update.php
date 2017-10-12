<?php
include 'admin.php';
include 'connection.php';
?>
<html>
	<body>
		<div style="padding-top:100px;">
		<div style = "background-color:black;padding:30px;margin-left:500px;margin-right:200px;opacity:0.8;">
		<form  method="post" action="">
		<input type="submit" name="price" value="Update Price">
		<input type="submit" name="name" value="Update Name">
	
	</form>
		</div>
		</div>		
	
<?php
session_start();
$d=$_SESSION['newdish'];
	if(isset($_POST["price"]))
	{
		?>
		<div style="padding-top:100px;">
		<div style = "color:white;background-color:black;padding:30px;margin-left:500px;margin-right:200px;opacity:0.8;">
		<form method="post" action="cost.php">
		Enter the new cost:<br>
		<input type="text" name="newcost">
		<input type="submit" name="new" value="new">
		</form>
		</div>
		</div>
		<?php
		
		if(isset($_POST['new']))
		{
		echo"yes";
		$newc=$_POST['newcost'];
		$query="UPDATE img SET cost='$newc' WHERE dishname = '$d';";
		if ($conn->query($query) === TRUE)
		{
			echo "updated";
		}
		else
			echo "error";
		}
		
	}
	
	if(isset($_POST["name"]))	
	{
		?>
		<div style="padding-top:100px;">
		<div style = "color:white;background-color:black;padding:30px;margin-left:500px;margin-right:200px;opacity:0.8;">
		<form method="post" action="cost.php">
		Enter the new name:<br>
		<input type="text" name="newname">
		<input type="submit" name="newval" value="New Name">
		</form>
		</div>
		</div>
		<?php
		
		
	}
?>

</body>
</html>
