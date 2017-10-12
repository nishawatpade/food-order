<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
Select the image
<input type="file" name="image">
<input type="submit" name="upload">

</form>

<?php
include 'connection.php';

		      
if(isset($_POST['upload']))
	      
{
    echo "hi";
	if (!empty($_FILES["image"]["name"])) {

	 
	    $file_name=$_FILES["image"]["name"];
echo $file_name;
	    $query_upload="INSERT into images (path) VALUES('$file_name')";
	 
	
	    if ($conn->query( $query_upload) === TRUE)
		{
			echo "inserted successfully";
		}
     
	else{
	 
	   echo "Error While uploading image on the server";

	}

}	 
}
$conn->close();
?>
<img src="<?php echo $file_name; ?>" alt="" />

	 
</body>
</html>
