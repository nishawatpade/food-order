<html>
<body>
<form action="" method="post">
Enter the image id:<br>
<input type="text" name="id">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
include 'connection.php';
$i=$_POST['id'];
if(isset($_POST['submit']))
{
	 $result ="SELECT image FROM images WHERE id = '$i'";
    	 $result2=mysqli_query($conn,$result);
    if(mysqli_num_rows($result2) > 0){
        $imgData = mysqli_fetch_assoc($result2);
       

        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['images']; 

    }else{
        echo 'Image not found...';
    }
}
?>
