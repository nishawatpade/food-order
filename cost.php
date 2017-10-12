<?php

include 'connection.php';
include 'update.php';
session_start();
$d=$_SESSION['newdish'];
	if(isset($_POST['new']))
	{
		//echo "yes";
		$newc=$_POST['newcost'];
		$query="UPDATE menu SET cost='$newc' WHERE dishname = '$d';";
		if ($conn->query($query) === TRUE)
		{
		
			?><p style="color:white;"><center><?php echo "Updated successfully";?></center></p>
			<?php
		}
		else
			echo "error";
			
			
	}
	if(isset($_POST['newval']))
		{
		echo"yes";
		$newd=$_POST['newname'];
		$query="UPDATE menu SET dishname='$newd' WHERE dishname = '$d';";
		if ($conn->query($query) === TRUE)
		{
			echo "updated";
		}
		else
			echo "error";
		}

?>
