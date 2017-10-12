<?php
include 'connection.php';
session_start();
$unique=$_POST['newp'];
$nmobi=$_SESSION['mob'];

$sql ="UPDATE customer SET password = '$unique' WHERE mob_no = '$nmobi';";
//$sql ="UPDATE customer SET cpassword = '$unique' WHERE mob_no = '$nmobi';";

$result=mysqli_query($conn,$query);
if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Password Changed successfully')</script>";

}

$conn->close();
?>

