
<?php
include 'connection.php';
include 'admin.php';


$today=$_POST['date'];

$q=0;
echo "<br>";
echo $d;
if(isset($_POST["sub"]))
{
	$sql="SELECT * FROM items,ordmenu where items.order_id=ordmenu.order_id and date='$today';";
	
	if($res= mysqli_query($conn,$sql))
	{
	?>
	<div style="background-color:white;color:black;opacity:0.8;margin-left:450px;margin-right:100px;">
	 <table width="100%"  >
            <thead>
                <tr>
                    <td style="color:white;">Log_id</td>
                    <td style="color:white;">Dishname</td>
                    <td style="color:white;">Cost</td>
                    <td style="color:white;">Quantity</td>
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
		 	 	<td style="color:black;"><?php echo "{$row['log_id']}";?></td>
		 	 	<!--echo "<br>";-->
		 	 	<td style="color:black;"><?php echo "{$row['dishname']}";?></td>
		 	 	<td style="color:black;"><?php echo "{$row['cost']}";?></td>
		 	 	<td style="color:black;"><?php echo "{$row['quantity']}";?></td>
		 	 </tr>
		 	 	<?php
		 	 }
		 	
		 	?><b><?php echo "Total Sale:";?><b>
		 	<?php
		 	 
		 	 echo $q;
	 echo "<br>";
		 }
		 }
	
}
if(isset($_POST['sub2']))
{$s=0;
	$mon=$_POST['month'];//echo $mon;
	
	//$sql="select *from items,ordmenu where items.order_id=ordmenu.order_id and MONTH(date)='$mon';";
	 $sql="select log_id,sum(cost) as counter from items,ordmenu where items.order_id=ordmenu.order_id and MONTH(date)='$mon' group by log_id";
	//echo $sql;
	 if($res2= mysqli_query($conn,$sql))
	 {?><div style="padding-top:50px;">
		<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:350px;opacity:0.8;color:white;">
		<p><b>Monthly Sale</b><br></p><br>
		<?php
	 	if( mysqli_num_rows( $res2 ) >0 )	
	 	{
	 		?><table style="width:100%;color:white;">
	 		<thead>
	 		</tr>
	 		<td><b>Log_id</b></td>
	 		<td><b>Total Amount</b></td>
	 		</tr>
	 		</thead>
	 		<tbody>
	 		<?php
	 		 while( $n= mysqli_fetch_assoc( $res2 ) )
	 		 {
	 		 	?>
	 		 	<tr>
	 		 	<td><?php echo $n['log_id'];?></td>
	 		 	<td><?php echo $n['counter'];?></td>
	 		 	</tr>
	 		 	
	 		<?php }
	 	}?>
	 	</tbody>
	 	</table>
	 	<?php
	 }?>
	
	</div>
	</div>
	 
<?php
}
if(isset($_POST['sub3']))
{
	$a=0;
	$year=$_POST['yr'];//echo $mon;
	
	$sql="select log_id,sum(cost) as counter from items,ordmenu where items.order_id=ordmenu.order_id and YEAR(date)='$year' group by log_id;";
	//echo $sql;
	 if($res2= mysqli_query($conn,$sql))
	 {//echo "yes";
	 	?><div style="padding-top:50px;">
		<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:350px;opacity:0.8;color:white;">
		<p><b>Yearly Sale</b><br></p><br>
		<?php
	 	if( mysqli_num_rows( $res2 ) >0 )	
	 	{ ?>
	 	
	 	<table style="width:100%;color:white;">
	 		<thead>
	 		</tr>
	 		<td><b>Log_id</b></td>
	 		<td><b>Total Amount</b></td>
	 		</tr>
	 		</thead>
	 		<tbody>
	 		<?php
	 		 while( $n= mysqli_fetch_assoc( $res2 ) )
	 		 {?>
	 		 
	 		 	<tr>
	 		 	<td><?php echo $n['log_id'];?></td>
	 		 	<td><?php echo $n['counter'];?></td>
	 		 	</tr>
	 		<?php }
	 	}?>
	 	</tbody>
	 	</table>
	<?php }?>
	
	</div>
	</div>
	 <?php
}
$conn->close();
?>
</tbody>
</table>
</div>
