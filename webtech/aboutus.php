<?php
session_start();

	if (!isset($_SESSION['uname']))

	{
		//echo $_SESSION['uname'];
		
		header('Location: Login.html');

	}
	else
	{
		$logged=$_SESSION['uname'];
	//echo $logged;
	}
	?>
<html>
<head>
<title> Elibrary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="linksnew.css">
<style>
body{
background-image: url("aboutus.jpg"); /*You will specify your image path here.*/
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
width:100%;
}
#p{
	font-size:70px;
	//text-decoration:line-through;
	text-shadow:5px 2px black;
	font-weight:bold;
	color:white;
	margin-top:50px;
}	
#d{
		float:right;
		margin-left:1237px;
		
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
    z-index: 100;
	text-decoration:underline;
}
#b3{
		font-size:25px;
		margin-left:760px;
}
</style>
</head>
<body onload="displog()">

<ul id="u">
  <li><a href="HOME.php">Home</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Genre</a>
    <div class="dropdown-content">
      <a href="http://localhost/Project/drama/drama.php">Drama</a>
      <a href="http://localhost/Project/romance/romance.php">Romance</a>
      <a href="http://localhost/Project/scifi/fiction.php">Science Fiction</a>
      <a href="http://localhost/Project/action/action.php">Action and Adventure</a>
      <a href="http://localhost/Project/horror/horror.php">Horror</a>
      <a href="http://localhost/Project/mystery/mystery.php">Mystery</a>
      <a href="http://localhost/Project/SelfHelp/selfhelp.php">Self H</a>

    </div>
  </li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>
<hr id="a">
<p id="p"><b>ABOUT</b></p>
<div class="b2" id="b3">
<blockquote><b>"Read, read, read. Read everything -- trash, classics, good and bad, and see how they do it. Just like a carpenter who works as an apprentice and studies the master. Read! You'll absorb it.
Then write. If it's good, you'll find out. If it's not, throw it out of the window."
<p>Good stories humanize your brand,providing context and meaning for your product. 
Whats more,good stories are sticky-which means people are more likely to connect with them and pass them on.</p>
<p>Find thousands of books to read online and download free eBooks.
 Discover and read free books by indie authors as well as tons of classic books. 
 Browse categories to find your favorite literature genres: Drama,Romance, Science Fiction, Action and Adventure, Horror, Mystery and Self Help…
 There are eBooks for everyone.And You can also upload any book which is not available in our site.</p>
 <p>We have hundreds of classic books you can read right now, all absolutely free! It is an ideal way to expand your horizons,
 catch up on your reading list, or read books that it seems like everyone else has already read. Fix yourself a drink, get comfortable and Start Reading<p></b><blockquote>
</div>
<script>
function displog()
{
	//if(<?phpif(isset($_SESSION['uname'])){echo 1;}?>)
	if(<?php if(isset($logged)){echo 1;}?>)
	{
		var l=document.createElement("li");
		var t=document.getElementById("u");
		t.appendChild(l);
		var ll=document.createElement("a");
		l.appendChild(ll);
		ll.setAttribute("href","Logout.php");
		ll.setAttribute("target","_self");
		ll.setAttribute("class","button");
		ll.setAttribute("id","d");
		ll.innerHTML="logout";
		
	}
	else
	{
		var l=document.createElement("li");
		var t=document.getElementById("u");
		t.appendChild(l);
		var ll=document.createElement("a");
		l.appendChild(ll);
		ll.setAttribute("href","Login.html");
		ll.setAttribute("target","_self");
		ll.setAttribute("class","button");
		ll.setAttribute("id","d");
		ll.innerHTML="Login";
		
	}					
					
}
</script>
</html>
