<html>
	<body>
	<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
	<form method="post" action="">
	<div style="padding-top:80px;">
	<div style=" background-color:black;color:white;opacity:0.8;padding:30px;margin-left:330px;margin-right:330px;margin-bottom:40px;height:300px;" >
	
	<center><h2 ><b>Admin Login Page</b></h2><br>
	
	
	<label>Email:</label><br>
	<input type="email" name="email" id="email" placeholder="Enter Email" required>
	<br><br>
	
	Password:<br>
	<input type="password" name="password" id ="password"  placeholder="Enter Password" required>
	<br><br>
	<br>
	<input type="submit" name="submit" value="Submit" ";></center>
	<br><br>
	
</div>
</div>
</form>
<?php
include 'connection.php';
$username=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$username;
$a=$_SESSION['email'];

$query ="SELECT * FROM admin WHERE  name= '$username' and password = '$password';";
//echo $query;
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) >0)
{

header("Location:admin.php");
}
else
{

//header("Location:new.html");
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}
//}
$conn->close();
?>
	</body>
</html>
