<?php include 'admin.php';?>
<?php include 'connection.php';?>
<html>
	<body>
	<div style="padding-top:100px;">
	<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:300px;opacity:0.8;">
	<form method="post">
		<input type="submit" name="daily" value="Daily Sale">
		<input type="submit" name="monthly" value="Monthly Sale">
		<input type="submit" name="year"  value="Yearly Sale">
		<input type="submit" name="cust" value="Customer Data">
		<input type="submit" name="max" value="Max Sold Dish">
		
	</form>
	</div>
	</div>
	<br>
	<?php
	if(isset($_POST['daily']))
	{?>
	<form method="post" action="stat.php">
	
	<div style="padding-top:50px;">
	<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:300px;opacity:0.8;">
	<h3 style = "color:white;">Sale</h3>
	<p style="color:white;">Enter the date:<br></p>
	<br>
	<input type="date" placeholder="Enter date" name="date" required>
	<br><br>
	<input type="submit" value="submit" name="sub">
	</div>
	</div>
	</form>
	<?php
	}
	if(isset($_POST['monthly']))
	{?>
	<form method="post" action="stat.php">
	<div style="padding-top:50px;">
	<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:300px;opacity:0.8;">
	<h3 style = "color:white;">Sale</h3>
	<p style="color:white;">Enter the month:<br></p>
	<br>

	 <select name="month" >
		<option value="01">January</option>
		<option value="02">February</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>
		<option value="07">July</option>
		<option value="08">August</option>
		<option value="09">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
		</select>
	<br><br>
	<input type="submit" value="submit" name="sub2">
	</div>
	</div>
	</form>
	<?php
	}
	if(isset($_POST['year']))
	{
	?>
		<form method="post" action="stat.php">
	<div style="padding-top:50px;">
	<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:300px;opacity:0.8;">
	<h3 style = "color:white;">Sale</h3>
	<p style="color:white;">Enter the year:<br></p>
	<br>

	 <select name="yr" >
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		
		</select>
	<br><br>
	<input type="submit" value="submit" name="sub3">
	</div>
	</div>
	</form>
	<?php
	}
	
	if(isset($_POST['cust']))
	{?>
		
		<div style="padding-top:50px;">
		<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:300px;opacity:0.8;color:white;">
		<?php
			$query="select ordmenu.log_id,sum(cost) as total from items,ordmenu where items.order_id=ordmenu.order_id group by log_id;";
			
			 if($res2= mysqli_query($conn,$query))
			 {//echo "yes";
	 			if( mysqli_num_rows( $res2 ) >0 )	
	 			{//echo "y";?>
	 			<table style="width:100%;color:white;">
	 			<thead>
	 		 	<tr>
	 		 		<td>Log_id</td>
	 		 		<td>Total amount</td>
	 		 	</tr>
	 		 	</thead>
	 		 	<tbody>
	 		 	<?php
	 			 while( $n= mysqli_fetch_assoc( $res2 ) )
	 		 	{?>
	 		 	
	 		 	<tr>
	 		 	<td><?php echo $n['log_id'];?></td>
	 		 	<td><?php echo $n['total'];?></td>
	 		 	
	 		 	</tr>
	 		 	
	 		 	<?php
	 		 	}
	 			}
	 		}
		?>
		</div>
		</div>
	
	<?php
	}?>
	
		<?php
	if(isset($_POST['max']))
	{?><div style="padding-top:50px;">
		<div style = "background-color:black;padding:30px;margin-left:250px;margin-right:300px;opacity:0.8;color:white;">
		<?php
		$que="SELECT dishname,count(dishname) as counter from items group by dishname 
		order by counter desc limit 3;";
		
			 if($res2= mysqli_query($conn,$que))
			 
			 {//echo "yes";
	 			if( mysqli_num_rows( $res2 ) >0 )	
	 			{echo "Maximum sold dishes are";
	 			echo "<br>";
	 			echo "<br>";	
	 			?><table style="color:white;width:100%;">
	 					<thead>
	 					<tr>
	 					<td><b><?php echo"Dishname";?></b></td>
	 					<td><b><?php echo"Quantity";?></b></td>
	 					</tr>
	 					</thead>
	 					<tbody >
	 					<?php
	 				while( $n= mysqli_fetch_assoc( $res2 ) )
	 				{	?>
	 					<tr>
	 					<td ><?php echo $n['dishname'];?></td>
	 					<td><?php echo $n['counter'];?></td>
	 					
	 					</tr>
	 					
	 					<?php
	 				}
	 			}
	 		}
	}?>
	</div>
	<div>
	
</tbody>
</table>
	</tbody>
	 </table>
	</body>
</html>
	
