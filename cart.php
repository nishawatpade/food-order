<?php
session_start();
include 'connection.php';
date_default_timezone_set("India/Pune");
$_SESSION['time']=date("H:i:s");
$_SESSION['date']=date("Y-m-d");
$da=$_SESSION['date'];
$ti=$_SESSION['time'];
$check=$_POST['c'];
$qunt=$_POST['q'];
$username=$_SESSION['uname'];
$cnt=0;
$sq="SELECT * FROM menu;";
$result=mysqli_query($conn,$sq);
		$row=mysqli_num_rows($result);
for($i=0;$i<$row;$i++)
{

if(!empty($qunt[$i]))
{
$quantity[$cnt++]=$qunt[$i];
}
}
if(isset($_POST["more"]))
{
$j=0;
$j=count($check);

echo $sql;

	for($i=0;$i<$j;$i++)
	{
		$price="SELECT cost FROM menu WHERE dishname = '$check[$i]';";
		$result=mysqli_query($conn,$price);
		$row=mysqli_fetch_assoc($result);
		$z= $row['cost'];
		$z2= $z * $quantity[$i];
			$que="INSERT INTO cart (log_id,item,cost,quantity) VALUES('$username','$check[$i]','$z2','$quantity[$i]');";
			$a="INSERT INTO ordmenu (log_id,date,time) VALUES ('$username','$da','$ti')";
			echo $a;
			if ($conn->query($a) === TRUE && $conn->query($que) === TRUE ) {
			$query="SELECT order_id FROM ordmenu WHERE log_id = '$username' AND date='$da' AND time='$ti';";
$result2=mysqli_query($conn,$query);
$row2=mysqli_fetch_assoc($result2);
$t= $row2['order_id'];
$_SESSION['order_id']=$t;
echo $t;
			$s="INSERT INTO items (order_id,dishname,cost,quantity) VALUES('$t','$check[$i]','$z2','$quantity[$i]')";
			echo $s;
			echo $que;
			if($conn->query($s)===TRUE)
			{
			
			header("Location:abc.php");
			}
			}
			else
			{
			echo "error";
			}
			
	}

/*$query="SELECT order_id FROM ordmenu WHERE log_id = '$username' AND date = '$_SESSION['date']' AND time='$_SESSION['time']';";
$result2=mysqli_query($conn,$query);
$row2=mysqli_fetch_assoc($result2);
echo $row2['order_id'];*/
}
if(isset($_POST['view']))
{


			
			header("Location:abc.php");
			
			
	

}
if(isset($_POST["log"]))
{
	
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	include 'home.html';
	echo "<script type='text/javascript'>alert('$username Logged Out Successfully!!')</script>";
}
$conn->close();
?>
