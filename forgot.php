<?php
include 'connection.php';
session_start();
$mob=$_POST['mobno'];
$_SESSION['mobno']=$mob;
if(isset($_POST['submit']))
{
$query ="SELECT * FROM customer WHERE mob_no like '$mob' ;";
//echo $query;
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) >0)
{

header("Location:newpassword.php");
}
else
{
echo "<script type='text/javascript'>alert('Incorrect Mobile number!!')</script>";
}
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<title>Page Title</title>
<style>
div{
align:center;
width:300px;

padding:50px 20px;
 border: 1px solid #ccc;
margin-top:250px;
margin-left:500px;
background-color:black;
opacity:0.4;
color:white;
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
                
                 text-align:center;
                 display:inline-block;
                margin-left:500px;
margin-top:10px;
                 width:340px;
            	  height:40px;
                 cursor:pointer
                 
                }
        .button:hover{
                        box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                       }


}

</style>

<body>
<img src='images/tasty.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
<div>
<form method="post" action=" ">
<center>Enter your Registered Mobile no:</center><br>
<center><input type="number" value="mobno" name="mobno">
</center>
</div>
<a  style="text-decoration:none;margin-left:640px;"><input  type="submit" name="submit" value="Submit"></a>
</form>
</body>
</html>
