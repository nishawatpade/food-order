<?php
include 'admin.php';
include 'connection.php';
?>
<html>
	<body>
		<div style="padding-top:100px;">
		<div style = "background-color:black;padding:30px;margin-left:500px;margin-right:200px;opacity:0.8;">
		<form  method="post" >
	
		<p style="color:white;">Enter the name of the dish to be updated</p>
		<br>
		<input type="text" placeholder="Enter the dish name " name="newdish" required>
		<br><br>
		<input type="submit" value="submit" name="submit">
	
	</form>
		</div>
		</div>		
	</body>
</html>
<?php

session_start();
$update=$_POST['newdish'];
$_SESSION['newdish']=$update;
if(isset($_POST["submit"]))
{
	$sql="SELECT * FROM menu WHERE dishname = '$update';";
	$result=mysqli_query($conn,$sql);
	
	 if( mysqli_num_rows( $result ) >0 )
	 {
	 header("Location:update.php");
	 }
	else
	{?>
	<p style="color:white;">
	<?php
	echo "Invalid dishname";
	?>
	</p>
	<?php }
	
}
?>
