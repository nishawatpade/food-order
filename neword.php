<?php
session_start();


include 'connection.php';
//include 'order.php';
date_default_timezone_set("India/Pune");
$_SESSION['time']=date("H:i:s");
$_SESSION['date']=date("Y-m-d");
$da=$_SESSION['date'];
$ti=$_SESSION['time'];
//echo $da;
//echo $ti;
$check=$_POST['c'];
$qunt=$_POST['q'];
$username=$_SESSION['uname'];
$cnt=0;
$sq="SELECT * FROM menu;";
//echo $sq;
$result=mysqli_query($conn,$sq);
		$row=mysqli_num_rows($result);
//		echo $row;

for($i=0;$i<$row;$i++)
{
//echo $qunt[$i]."<br>";
if(!empty($qunt[$i]))
{
//echo "Hello";
$quantity[$cnt++]=$qunt[$i];
//echo $quantity[$cnt-1];
}
}
if(isset($_POST["submit"]))
{
$j=0;
$j=count($check);
//echo $j;
$sql="INSERT INTO ordmenu (log_id,date,time) VALUES('$username',CURDATE(),CURTIME());";
//echo $sql;
if ($conn->query($sql) === TRUE) {
$query="SELECT order_id FROM ordmenu WHERE log_id = '$username' AND date='$da' AND time='$ti';";
//echo $query;
$result2=mysqli_query($conn,$query);
$row2=mysqli_fetch_assoc($result2);
//echo $row2['order_id'];
$t= $row2['order_id'];
$_SESSION['order_id']=$t;
	for($i=0;$i<$j;$i++)
	{
	//echo "yes";
		$price="SELECT cost FROM menu WHERE dishname = '$check[$i]';";
		//echo $price;
		$result=mysqli_query($conn,$price);
		$row=mysqli_fetch_assoc($result);
		$z= $row['cost'];
		$z2= $z * $quantity[$i];
		//echo $z2;
			$que="INSERT INTO items (order_id,dishname,cost,quantity) VALUES('$t','$check[$i]','$z2','$quantity[$i]');";
			//echo $que;
			if ($conn->query($que) === TRUE && $j===$cnt) {
			
			header("Location:money.php");
			}
			else
			{
			echo "error";
			}
			
	}
}
else
{
echo "failure";
}
/*$query="SELECT order_id FROM ordmenu WHERE log_id = '$username' AND date = '$_SESSION['date']' AND time='$_SESSION['time']';";
$result2=mysqli_query($conn,$query);
$row2=mysqli_fetch_assoc($result2);
echo $row2['order_id'];*/
}
if(isset($_POST["log"]))
{
	
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	//echo "Logged out successfully";
	//include 'home.html';
	//echo "<script type='text/javascript'>alert('Logged Out Successfully!!')</script>";
}
$conn->close();
?>
