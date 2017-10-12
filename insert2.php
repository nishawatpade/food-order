<?php
include'connection.php';

$name = $_POST['name'];
$email =  $_POST['email'];
$mobile=  $_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address = $_POST['address'];
$errmsg="Passwords don't match";
$sql_query = "SELECT email FROM customer where email like '$email';";
$result = mysqli_query($conn,$sql_query);
if(mysqli_num_rows($result)>0)
{
echo "<center>User account already exists!!</center>";
//header("Location:signupform.html");	
}

 $sql = "INSERT INTO customer (log_id,name,mob_no,address,password,cpassword) VALUES ('$email','$name','$mobile','$address','$password','$cpassword')";




if ($conn->query($sql) === TRUE) {

  //echo "<center>New record created successfully</center>";
header("Location:home.html");	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


