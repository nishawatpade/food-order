<?php
include 'newsand.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<body style="background-color:black;" >

<div style="padding-top:30px;padding-left:500px;padding-right:500px;	">
<center><p style="color:white;text-align:center;font-size:30px;padding-right:250px;padding-left:90px;padding-top:20px;padding-bottom:20px;background-color:black;opacity:0.5;">Sandwiches</p></center>
</div>
<div>
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
		<div class="dishname">
		<input type="checkbox" value="<?php echo $row['dishname']?>" name="c[]"></input>
		INR:<?php echo $row['cost']?>
		</div>
		<div class="dishname">Quantity:<input type ="number" width="30px" name="q[]"></div>
		
		</div>
		
		<?php
		}
	}?>
	

</div>
<form method="post" action="neword.php">
<div style="margin-top:30px;" ><input type="submit" value="Order Now" name="submit"></div>
</form>
</body>
</html>
