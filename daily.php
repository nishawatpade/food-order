<?php
include 'connection.php';
include 'admin.php';
?>
<html>
	<body>
	<div style="padding-top:100px;">
	<div style = "background-color:black;padding:30px;margin-left:450px;margin-right:100px;opacity:0.8;">
	<h3 style = "color:white;">Sale</h3>
	<br>
	<form  method="post">	
	<?php
	if(isset($_POST['daily']))
	{?>
	<p style="color:white;">Enter the date:<br>(yyyy/mm/dd)</p>
	<br>
	<input type="text" placeholder="Enter date" name="date" required>
	<br><br>
	<input type="submit" value="submit" name="sub">
	<?php}
	
	?>
	</form>
	</div>
	</div>
	</body>
</html>
