<!DOCTYPE html>

<html>
<head>
<style>
*{
margin:0px;
padding:0px;

}
.total
{ 
  
}
.gallery {
    
    margin-top:80px;
    margin-left:110px;
   
    border: 1px solid #ccc;
    float: left;
    width: 300px;
}

.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    
   
}
.dishname {
    padding: 10px;
    text-align: center;
    background-color:black;
    color:white;
opacity:0.5;
 font-weight: bold;
}
.heading{
margin-top:50px;
margin-left:400px;
margin-right:400px;
padding:20px;
color:white;
background-color:black;
font-family:times;
opacity:0.5;
font-size:30px;
 font-weight: bold;
}
.navbar{
position:fixed;
text-decoration:none;
}
 ul{
list-style:none;
padding:0px;

}
li{
background-color:black;
color:white;
text-align:center;
width:310px;
line-height:50px;
height:50px;
float:left;
opacity:0.8;
margin-right:2px;


}
li a{
text-decoration:none;
color:white;
}
 ul li:hover{
background-color:brown;

}
 ul ul{
display:none;
text-decoration:none;

}
 ul li:hover > ul{
display:block

}
ul ul li:hover{
background-color:grey;
text-decoration:none;
}
ul ul li a{
text-decoration:none;
color:white;
}
body{
 background-color:black;

 background-attachment: fixed;
 background-image:url('images/empty-cutting-board-paprika-28172847.jpg');
background-repeat: no-repeat;
 background-size: 100%;
}
.modal{
display:none;
position:fixed;
z-index:1;
padding-top:100px;
left:0;
top:0;
width:100%;
height:100%;
overflow:auto;
background-color:rgb(0,0,0);
background-color:rgba(0,0,0,0.8);

}
.modal-content{
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 250px;
    height:300px;
    
}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
<div class="navbar">
<ul>
	<li><a style="display:block;" href="home.html">Home</a></li>
	<li><a style="display:block;">Menu</a>
		<ul>
			<li><a style="display:block;" href="sandwich.php">Sandwiches</a></li>
			<li><a style="display:block;" href="burger.php">Burgers</a></li>
			<li><a style="display:block;" href="pizza.php">Pizza</a></li>
			<li><a style="display:block;" href="beverages.php">Beverages</a></li>
			<li><a style="display:block;" href="desserts.php">Desserts</a></li>
		</ul>
	</li>
	<li ><a style="display:block;" id="mybtn">Order</a></li>
<li><a style="display:block;">Contact Us</a></li>
</ul>
</div>
<div style="padding-top:130px;padding-left:500px;padding-right:500px;	">
<center><p style="color:white;text-align:center;font-size:30px;padding-right:250px;padding-left:90px;padding-top:20px;padding-bottom:20px;background-color:black;opacity:0.5;">Beverages</p></center>
</div>
<?php 
include 'connection.php';
$sql="SELECT * FROM menu WHERE category='Beverage';";
	$result2=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result2)>0)
	{
		while( $row = mysqli_fetch_assoc( $result2 ) )
		{
			$r=$row['path'];
		?>
		<div class="total">
		<div class="gallery">
		<img style="width:300px;height:200px;" src="<?php echo $row['img_path']; ?>" alt="" >
		<div class="dishname"><?php echo $row['dishname']?></div>
		<div class="dishname">INR:<?php echo $row['cost']?></div>
		</div>
		<?php
		}
	}
?>

	<form method="post" action="mapping.php">
<div id="mymodal" class="modal">
 <div class="modal-content">
	<span class="close">&times;</span>
	<p>
	<center><h3>LOGIN </h3></center>
	<br>
	Username:<br>
	<input type="email" name="uname" id="uname" placeholder="Enter email address">
	<br>
	<br>
	Password:<br>
	<input type="password" name="pass" id="pass">
	<br><br><br>
	<div >
	<!--<center><button style="padding:10px;background-color:blue;color:white;box-size:20px;">Login</button></center>-->
	<input type=submit value="Login">
	</div>
	<br>
	<br>
	<a style="color:blue" href="signup.html">Sign Up</a>
	
	<a style="padding-left:30px;color:blue;">Forgot Password?</a>

	</p>
	
</div>
</div>
</form>
<script>
var modal=document.getElementById("mymodal");
var btn = document.getElementById("mybtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";

}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
