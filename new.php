<?php
session_start();
include 'connection.php';
date_default_timezone_set("India/Pune");
$_SESSION['time']=date("H:i:s");
$_SESSION['date']=date("Y-m-d");
$check=$_POST['c'];
$qunt=$_POST['q'];
$username=$_SESSION['uname'];
$cnt=0;
$sq="SELECT * FROM menu;";
echo $sq;
$result=mysqli_query($conn,$sq);
		$row=mysqli_num_rows($result);
		echo $row;
for($i=0;$i<$row;$i++)
{
echo $qunt[$i]."<br>";
if(!empty($qunt[$i]))
{
//echo "Hello";
$quantity[$cnt++]=$qunt[$i];
//echo $quantity[$cnt-1];
}
}
//$j=0;

if(isset($_POST["submit"]))
{
$j=0;
$j=count($check);

echo $j;


$sql="INSERT INTO ordmenu (log_id,date,time) VALUES('$username',CURDATE(),CURTIME());";
$query="SELECT order_id FROM ordmenu WHERE log_id = '$username' AND date = '$_SESSION['date']' AND time='$_SESSION['time']';";
$result2=mysqli_query($conn,$query);
$row2=mysqli_fetch_assoc($result2);
	for($i=0;$i<$j;$i++)
	{
	
	
		$price="SELECT cost FROM menu WHERE dishname = '$check[$i]';";
		//$n=mysqli_query($price);
		$result=mysqli_query($conn,$price);
		$row=mysqli_fetch_assoc($result);
		$z=$row['cost'];
		 $z2= $z * $quantity[$i];
		//echo $z;
		echo $username;
		$que="INSERT INTO items (order_id,dishname,cost,quantity) VALUES('$row2['order_id']','$check[$i]','$z2','$quantity[$i]');";
		//echo "$sql";
		
		if ($conn->query($que) === TRUE && $j===$cnt) {
		
  		echo "<center>New record created successfully</center>";
  		echo $cnt;
		echo $j;
  		}
  		else
  		{
  			echo "error";
  		}
		
	}
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
