<?php
include 'connection.php';
session_start();
$username=$_SESSION['uname'];
$t=$_SESSION['time'];
$d=$_SESSION['date'];
$o=$_SESSION['id'];
$p=$_SESSION['order_id'];
$am=$_SESSION['amount'];
	
	if(isset($_POST["submit"]))
	{
		$sql="DELETE FROM cart WHERE id = '$o';";
		$a="DELETE FROM items WHERE order_id = '$p'";
	
	if ($conn->query($sql) === TRUE && $conn->query($a) === TRUE) {
	header("Location:mess.php");
	
	
	}
	}
	
	if(isset($_POST["place"]))
	{   //echo $am;
		$sq="INSERT INTO payment (log_id,amount) VALUES('$username','$am');";
		$n="DELETE FROM cart WHERE log_id='$username'";
	//	$s="INSERT INTO ordmenu(log_id,date,time) VALUES ('$username',CURDATE(),CURTIME());";
		//echo $s;
		if ($conn->query($sq) === TRUE && $conn->query($n) === TRUE) {
			?>
		
			<form method="post" action="">
			<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
			<div style="background-color:black;color:white;padding:30px;opacity:0.8;margin-left:200px;margin-top:150px;margin-right:150px;">
			Select Delivery Area:
			<select name="area" >
			<option>Katraj</option>
			<option>Swargate</option>
			<option>Balaji Nagar</option>
			<option>Bibwewadi</option>
			<option>Dhankawadi</option>
			
			</select>
			<input type="submit" name="area" value="Submit" >
			</div>
			</form>
					
			<?php
			
	//echo " Order placed successfully";
	}
	
	}
	
			if(isset($_POST["area"]))
			{
		
				?>
				<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
				<div style="background-color:black;color:white;padding:30px;opacity:0.8;margin-left:200px;margin-top:150px;margin-right:150px;">
				<form method="post" action="">
				Enter detailed address:<br>
				<textarea name="address" rows="2" cols="50" required></textarea>
				<br><br>
				<input type="submit" name="final" value="Order">
				</form>
				</div>
				
				<?php
			}
	
	if(isset($_POST["final"]))
	{?>
	<a style="margin-left:8px;text-decoration:none;" href="home.html"><input type="submit" name="home" value="Home"></a>
	<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
				<div style="background-color:black;color:white;padding:30px;opacity:0.8;margin-left:200px;margin-top:150px;margin-right:150px;">
		Your order is placed successfully!!!<br>
		It will be delivered to your place within 30 minutes.
		Thank you for using our service!!
		</div>
		<?php
	}
	if(isset($_POST["add"]))
	{
		header("Location:newsand.php");
		
	}
?>
