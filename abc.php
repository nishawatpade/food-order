<?php
include 'connection.php';
include 'cust.php';
session_start();
$username=$_SESSION['uname'];
$d=$_SESSION['date'];
$t=$_SESSION['time'];
$q=0;
	
?>
<html>
<body>
<form method="post" action="cart.php">
	
	<input style="float:right;" type="submit" value ="Log Out" name="log">
	</form>
<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
<div style="padding-top:100px;">
<div style="border:1px solid black;background-color:black;color:white;margin-left:300px;padding:30px;margin-right:300px;opacity:0.8;" >
<p>
<h2><b><center>Cart List</center></b></h2> 
<?php
$q=0;


?>
<table style="width:100%;text-align:left";>
	<tr><th style="color:white;">Items </th>
	    <th style="color:white;">Quantity</th>
	    <th style="color:white;">Cost</th>
	    <th style="color:white;">Action</th>
	</tr>
	
	
<?php
echo "Username :  ";
echo $username;
echo "<br>";

$sql="SELECT * FROM cart WHERE log_id = '$username' ;";
//echo $sql;
//$result2=mysqli_query($conn,$query);
//$row2=mysqli_fetch_assoc($result2);
//$que="SELECT * FROM items WHERE order_id = 'row2['order_id]' AND date = '$_SESSION['date']' AND time='$_SESSION['time']';";
	if($res= mysqli_query($conn,$sql))
	{
		 if( mysqli_num_rows( $res ) >0 )
		 {
		 	 while( $row = mysqli_fetch_assoc( $res ) )
		 	 {
		 	 ?>
		 	 	 <tr>
		 	 	 <?php $q=$q+$row['cost'];?>
		 	 	 <td style="color:white;"><?php  echo "{$row['item']}";  $_SESSION['item']=$row['item'];?></td>     
		 	 	 <td style="color:white;"><?php echo "{$row['quantity']}"; $_SESSION['quantity']=$row['quantity'];?> </td>
		 	 	 <td style="color:white;"><?php echo "{$row['cost']}"; $_SESSION['cost']=$row['cost'];?></td>
				 <td ><a style="color:red;" href="remove.php?id=<?php echo $row['id']  ?>">Remove</a></td>	 	 	
		 	 	</tr>
		 	 	<?php
		 	 	
		 	 	
		 	 }
		 	 
		 }
	}

	
	
	echo "<br>";
	$_SESSION['amount']=$q;?>
	<tr>
	 
		
	<td style="color:white;"><?php echo "<br>";echo "Total amount:"; ?></td>
	<td style="color:white;"><?php echo " ";?> </td>
	<b><td style="color:white;"><?php echo $q;?></td></b>
		 	  </tr>
		 	
		 	 </table>
	</p>
	<form method="post" action="more.php">
	<input type="submit" value="Order Now" name="place">
	<input type="submit" value="Add More" name="add">
	</form>
</div>
</div>
</body>
</html>

