<?php
include 'connection.php';
session_start();
if(isset($_POST['adminlog']))
{
//echo"yes";
unset($_SESSION['email']);
	session_destroy();
	include 'home.html';
	echo "<script type='text/javascript'>alert(' Logged Out Successfully!!')</script>";
}
?>

