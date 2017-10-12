
 <?php

include 'connection.php';
session_start();

$username=$_POST['uname'];
$password=$_POST['pass'];
$_SESSION['uname']=$username;
$query ="SELECT * FROM customer WHERE log_id = '$username' and password = '$password';";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) >0)
{

header("Location:newsand.php");
//include'newsand.php';
//echo "<script type='text/javascript'>alert('Logged in successfully!!')</script>";
}
else
{

include'home.php';
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}
//}
$conn->close();
?>
