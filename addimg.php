<?php
include'connection.php';
include 'admin.php';?>

<html>
	<body>
		<div style="padding-top:100px;">
		<div style = "background-color:black;padding:30px;margin-left:500px;margin-right:200px;opacity:0.8;">
		<form  method="post" action="" enctype="multipart/form-data" >
	
		<p style="color:white;">Enter the name of the dish to be added</p>
		
		<input type="text" placeholder="Enter the dish name " name="dish" required>
		<br><br>
		<p style="color:white;">Enter the cost of the dish to be added</p>
		<input type="text" placeholder="Enter the cost  " name="cost" required>
		<br><br>
		<p style="color:white;"> Select Category</p>
		<select name="category" >
		<option>Sandwich</option>
		<option>Burger</option>
		<option>Pizza</option>
		<option>Beverage</option>
		<option>Dessert</option>
		
		</select>
		<br><br>
		<p style="color:white;">Browse Image</p>
		<input type="file" name="image">
		<br><br>
		
		<input type="submit" value="Upload" name="upload">
		
	</form>
		</div>
		</div>		
	</body>
</html>
<?php
$cat=$_POST['category'];
$co=$_POST['cost'];
$dishn=$_POST['dish'];
if(isset($_POST['upload']))      
{
	$query3="SELECT dishname FROM menu where dishname='$dishn'";
	//echo $query3;
	$result2=mysqli_query($conn,$query3);
	if(mysqli_num_rows($result2)===0)
	{
    echo "hi";
	if (!empty($_FILES["image"]["name"])) {

	 echo "yes";
	    $file_name=$_FILES["image"]["name"];
	    $name="images/".$file_name;

		
	    $query_upload="INSERT into menu (category,dishname,cost,img_path) VALUES('$cat','$dishn','$co','$name')";
	 
	
	    if ($conn->query( $query_upload) === TRUE)
		{
			?><center><?php echo "Dish added successfully";?></center>
			<?php
		}
     
	else{
	 
	   echo "Error While uploading image on the server";

	}

}
}
else
{
	echo "Dish is already present";
}	 
}
$conn->close();
?>
