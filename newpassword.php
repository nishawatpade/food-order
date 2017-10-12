
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
div{
align:center;
width:300px;

padding:50px 20px;
 border: 1px solid #ccc;
margin-top:250px;
margin-left:500px;
}
input[type=submit]{
				background-color:
				padding:10px;
  				box-sizing:border-box;
				border-radius:4px;
				border:1px solid #ccc;
                                margin:8px 0;
			}
	.button{
                 background-color:#006666;
                 border:none;
                 color:black;
                 padding:10px;
                 text-align:center;
                 display:inline-block;
                
                 margin:4px 2px;
                 cursor:pointer
                 
                }
        .button:hover{
                        box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                       }


}





</style>
</head>
<body>
<img src='images/spice-herbs.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
<form method="post" action="">
<div>
<center>Enter new password</center><br>
<center><input type="password" name="newp"  ></center>

<center><input type="submit" name="submit" value="Submit"></center>
</div>
</form>
<?php
include 'connection.php';
session_start();
$unique=$_POST['newp'];
$nmobi=$_SESSION['mobno'];
if(isset($_POST['submit']))
{
$sql ="UPDATE customer SET password = '$unique'  WHERE mob_no = '$nmobi';";
$query ="UPDATE customer SET cpassword = '$unique' WHERE mob_no = '$nmobi';";
//echo $sql;
//echo $query;
$result=mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE && $conn->query($query) === TRUE) {
//echo "<script type='text/javascript'>alert('Password Changed successfully')</script>";
header("Location:home.html");
}
}
$conn->close();
?>

</body>
</html>
