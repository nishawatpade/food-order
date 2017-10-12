<?php
include 'connection.php';
session_start();
$mob=$_POST['mobno'];
$_SESSION['mob']=$mob;
$query ="SELECT * FROM customer WHERE mob_no like '$mob' ;";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) >0)
{

header("Location:newpassword.php");
}
else
{
echo "error";
}
$conn->close();
?>
