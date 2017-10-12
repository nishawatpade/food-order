<html>
	<head>
		<style>
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
