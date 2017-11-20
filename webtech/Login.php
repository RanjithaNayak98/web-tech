<?php
session_start();
if(isset($_SESSION['username'])){
header("location: newhome.html");
}
if(isset($_SESSION['error'])){
	$error=$_SESSION['error'];
}
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="linksnew.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#f1{
	border:1px solid lightgrey;
	border-radius:5px;
	width:27%;
	justify-content:center;
	align-item:center;
	margin-top:200px;
	margin-left:1000px;
	}

form{
	text-align:center;
    margin-left: 10px;
    margin-top: 10px;
	margin-right:20px;
	margin-bottom:10px;
	padding:70px;
    width: 290px;
    background: #f5f5f5;
    border: 1px solid #e9e9e9;
    line-height: 150%;
	}
	
	
body{
background-image:url("loginn.jpg");
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:cover;
	
	}
#demo{
		text-align:center;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
    z-index: 100;
	text-decoration:underline;
}

</style>
</head>
<body>
<ul>
    <li><a href="newhome.php">Home</a></li>
  <li><a href="javascript:AlertIt();">Upload</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Genre</a>
    <div class="dropdown-content">
      <a href="javascript:AlertIt();">Drama</a>
      <a href="javascript:AlertIt();">Romance</a>
      <a href="javascript:AlertIt();">Science Fiction</a>
      <a href="javascript:AlertIt();">Action and Adventure</a>
      <a href="javascript:AlertIt();">Horror</a>
      <a href="javascript:AlertIt();">Mystery</a>
      <a href="javascript:AlertIt();">Self H</a>

    </div>
  </li>
<li><a href="javascript:AlertIt();">About Us</a></li>
<li><a href="javascript:AlertIt();">Contact Us</a></li>
   
</ul>
<div id="f1">
<form  style="background-color:transparent" action="Login_new.php" method="POST">
<br>
<input type="text" placeholder="username" name="uname" size="20">
<br>
<br>
<input type="password" placeholder="password" name="pwd">

<br>
<br>

<input type="submit" name="log" value="Login" style="background-color:brown;color:white;" >
<br>
<h5 style="text-align:center">Not Registered?<a href="registration.php">Create New</a></h5>
<p id="demo"><?php echo $error?></p>
</form>

</div>
<script>
function AlertIt() {
alert("Please Login");
}
</script>
</body>
</html>