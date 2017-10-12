<html>
<body>
<form action="" method="post">
Enter the image u want to search
<input type="text" name="id">
<input type="submit" name="submit">
</form>

<?php
include 'connection.php';
$i=$_POST['id'];
if(isset($_POST['submit']))
{
	$sql="SELECT path FROM images WHERE id='$i';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		$row=mysqli_fetch_assoc($result2);
		$r=row['path'];
		
	}
}
?>
<img  style="width:50%" src="<?php echo $row['path']; ?>" alt="" />
</body>
</html>
