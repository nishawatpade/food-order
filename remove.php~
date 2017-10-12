<?php
include 'connection.php';
session_start();

$id=$_GET['id'];
echo $a;
$sql="DELETE FROM cart WHERE id='$id';";
echo $sql;
if ($conn->query($sql) === TRUE) {
header("Location:abc.php");
}
?>
