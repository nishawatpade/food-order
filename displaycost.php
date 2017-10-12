<?php
	include 'connection.php';
	$sql="SELECT cost,dishname FROM menu  ;";
	$j=0;
	if($res= mysqli_query($conn,$sql))
	{
	
		$n=mysqli_num_rows( $res );
		for($i=0;$i<$n;$i++)
		{
			$row=mysqli_fetch_assoc($res);
			echo $row['cost'] ;
			echo "<br>";
			$a[$j++]=$row['cost'];
			$s[$j++]=$row['dishname'];
			echo $row['dishname'];
		}
		
	}
?>

