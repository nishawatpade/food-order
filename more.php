<?php
include 'connection.php';

	
	
	if(isset($_POST["add"]))
	{
		header("Location:bur2.php");
		
	}
	if(isset($_POST["place"]))
	{
		header("Location:money.php");
	}
	if(isset($_POST["log"]))
	{
	
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	echo "Logged out successfully";
	//header("Location:home.html");
	}
	$conn->close();
?>
