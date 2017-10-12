<?php
include 'connection.php';
session_start();
$username=$_SESSION['uname'];
$d=$_SESSION['date'];
$t=$_SESSION['time'];
$q=0;
	
?>
<html>
<body>
<img src='images/food2.jpg' style='position:fixed;top:0px;left:0px;height:100%;width:100%;z-index:-1;'>
<div style="border:1px solid black;background-color:black;color:white;margin-left:300px;padding:30px;margin-right:300px;margin-top:100px;opacity:0.8;" >
<p>
<h2><b><center>Cart List</center></b></h2> 
<?php
$q=0;


?>
<table style="width:100%;text-align:left";>
	<tr><th style="color:white;">Items </th>
	    <th style="color:white;">Quantity</th>
	    <th style="color:white;">Cost</th>
	</tr>
	
	
<?php
echo "Username :  ";
echo $username;
echo "<br>";

$sql="SELECT * FROM ordmenu,items WHERE log_id = '$username' AND date = '$d' AND time='$t' AND ordmenu.order_id=items.order_id ;";
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
		 	 	 <td style="color:white;"><?php  echo "{$row['dishname']}";  ?></td>     
		 	 	 <td style="color:white;"><?php echo "{$row['quantity']}";?> </td>
		 	 	 <td style="color:white;"><?php echo "{$row['cost']}";?></td>
		 	 	
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
	<form method="post" action="cancel.php">
	<input type="submit" value="Place Order" name="place">
	<input type="submit" value ="Cancel Order" name="submit">
	<input type="submit" value="Add More" name="more">
	</form>
</div>
</body>
</html>

