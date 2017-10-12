
<?php
include 'connection.php';
session_start();
//$today=$_POST['date'];
$username=$_SESSION['uname'];
$d=$_SESSION['date'];
$t=$_SESSION['time'];
$q=0;
echo "<br>";
echo $d;
	$sql="SELECT * FROM abc WHERE log_id = '$username' AND date = '$d'AND time= '$t' ;";
	if($res= mysqli_query($conn,$sql))
	{
	?>
	 <table width="100%" border="1px solid black">
            <thead>
                <tr>
                    <td>Log_id</td>
                    <td>dishname</td>
                    <td>Cost</td>
                    <td>Quantity</td>
                </tr>
            </thead>
            <tbody>
          <?php
		 if( mysqli_num_rows( $res ) >0 )
		 {
		 	
		 	 while( $row = mysqli_fetch_assoc( $res ) )
		 	 {
		 	 $q=$q+$row['cost'];
		 	 ?>
		 	 <tr>
		 	 	<td><?php echo "{$row['log_id']}";?></td>
		 	 	
		 	 	<td><?php echo "{$row['dishname']}";?></td>
		 	 	<td><?php echo "{$row['cost']}";?></td>
		 	 	<td><?php echo "{$row['quantity']}";?></td>
		 	 </tr>
		 	 	<?php
		 	 }
		 	 echo "Total amount:";
		 	 echo $q;
		 }
	
}
$conn->close();
?>
</tbody>
</table>
