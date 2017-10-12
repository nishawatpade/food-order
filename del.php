<?php
include 'connection.php';
include 'admin.php';
?>

<html>
	<body>
		<div style="padding-top:100px;">
		<div style = "color:white;background-color:black;padding:30px;margin-left:500px;margin-right:200px;opacity:0.8;">
		<form  method="post" action="">
		Enter the name of the dish you want to delete:<br>
		<input type="text" name="dish" placeholder="Enter dishname">
		<br><br>
		<input type="submit" name="name" value="Delete Dish">
	
	</form>
		</div>
		</div>
		<?php
		$d=$_POST['dish'];
if(isset($_POST["name"]))
{
	$query="DELETE FROM menu WHERE  dishname = '$d';";	

if ($conn->query($query) === TRUE)
{
			echo "Deleted successfully";
}
else
{
	echo "error";
}
}

		?>
		</body>
		</html>
