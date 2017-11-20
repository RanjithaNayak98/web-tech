<link rel="stylesheet" type="text/css" href="linksnew.css">
<?php
session_start();

	if (!isset($_SESSION['uname']))

	{
		//echo $_SESSION['uname'];
		
		header('Location: Login.html');

	}
	else
		$logged=$_SESSION['uname'];
	?>
<html>
<head>
<title> Elibrary</title>
<link rel="stylesheet" type="text/css" href="linksnew.css">

<style>
body{
/*background-image: url("back2.jpg");*/ /*You will specify your image path here.*/
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
}


.foo
{
  background-color: #666;
  height: 170px;
  //width:1200px;
}

#a
{
  background-color: transparent;
  width: 750px;
  height: 250px;
  margin-left: 100px;

}
#ha
{
  width:500px;
  height:500px;
}

.slideshow-container {
  
  position: relative;
  margin: auto;
}

button{
	background-color:white;
	width:50px;
	height:30px;
	}

span{
  color : red;
}
.img1{
  height: 500px;
  width:100%;
}
.text {
  color: #f2f2f2;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 200px;
  width: 100%;
  text-align: center;
  font-family: Courier New;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


#img_cont {
  display: table;
  //width: 90%;
  margin: 20px auto;
}

#img_cont a {
  display: table-cell;
  text-align: center;
  width: 16%;
}

#img_cont img {
  width: 100%;
  //max-width: 150px;
}



.container {
    position: relative;
    width: 300px;
}

.image {
  opacity: 1;
 // display: block;
  width: 300px;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text{
		font-family:Baskerville Old Face;
		
}
#d{
		float:right;
		margin-left:1218px;
}
#uo{
	font-family: comic Sans MS;
	font-variant:small-caps;
	font-size:40px;
	text-align:center;

	color:white;
	position:top-left;
	//text-shadow:3px 2px black;
	
	padding:40px;
	height: 100px; 
	background-color: #f2d13e; 
	margin-top: 0px
	
}

</style>
</head>
		

<body onload="displog()">

<h1 id="b" style="background-color:#22AACD;">Bens Book Barn</h1>

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
      <a href="http://localhost/Project/SelfHelp/selfhelp.php">Self Help</a>

    </div>
  </li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img class="img1" src="slide45.jpg">
  <div class="text"><b>Get on board <br>Pick a book <br> Travel to the stars<br> READ!</b></div>
</div>

<div class="mySlides fade">
  
  <img class="img1" src="slide34.jpg">
  <div class="text"><b>Get on board pick a book  travel to the stars. Read!</b></div>
</div>

<div class="mySlides fade">
  
  <img class="img1" src="slide12.jpg">
  <div class="text"><b>Blast of with the books,<br> because we have loads of 'em.</b></div>
</div>

</div>

<h1 id="uo">PLUNGE INTO THE WONDERFUL WORLD OF BOOKS</h1>





<script type="text/javascript">
var myIndex = 0;
carousel();

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
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
function AlertIt() {
alert("Please Login");
}

</script>
<p style="font-size:60px; font-family: Arial">Preview</p>
<p id="img_cont">
  <a href="kav.pdf" target="_blank"><img src="kav.jpg" style="width:275px; height:400px ;" /></a>
  <a href="cant.pdf" target="_blank"><img src="cant.jpg" style="width:275px; height:400px ;" /></a>
  <a href="correction.pdf" target="_blank"><img src="cor.jpg" style="width:275px; height:400px ;" /></a>
  <a href="smoke.pdf" target="_blank"><img src="tree.jpg" style="width:275px; height:400px ;" /></a>
  
  
</p>
</p>
<pre><h3 style=" color: #f2d13e;font-size:20px;"> 	   KAVALIER & CLAY                    A CANTICLE FOR LEIBOWITZ        		THE CORRECTIONS                    TREE OF SMOKE: A NOVEL</h3></pre> 
<pre><p>    		   BY MICHAEL CHABON                    		     BY WALTER M. MILLER JR.                   			 BY JONATHAN FRANZEN                     		       BY DENIS JOHNSON</p>

<p style="font-size:60px; font-family: Arial;"> Most Popular</p>
<p id="img_cont">
  <a href="road.pdf" target="_blank"><img src="road.jpg" style="width:275px; height:400px ;"></a>
  <a href="int.pdf" target="_blank"><img src="int.jpg" style="width:275px; height:400px ;" /></a>
  <a href="mid.pdf" target="_blank"><img src="min.jpg" style="width:275px; height:400px ;" /></a>
  <a href="gil.pdf"><img src="gil.jpg" style="width:275px; height:400px ;" /></a>

</p>
<pre> <h3 style="color: #f2d13e;font-size:20px;" > 	       THE ROAD                	       INTERPRETER OF MALADIE                 MIDDLESEX: A NOVEL      		      GILEAD: A NOVEL</h3></pre> 
<pre><p>  		    BY CORMAC MCCARTHY                 	 		         BY JHUMPA LAHIRI                        	         BY JEFFREY EUGENIDES                		           BY MARILYNNE ROBINSON</p></pre>



<p style="font-size:60px; font-family: Arial"> About Us</p>
<hr>	
<p style="font-family:Times New Roman;font-size:20px;">"Read, read, read. Read everything -- trash, classics, good and bad, and see how they do it. Just like a carpenter who works as an apprentice and studies the master.Read! You'll absorb it. Then write. <br>If it's good, you'll find out. If it's not, throw it out of the window."
Good stories humanize your brand,providing context and meaning for your product. Whats more,good stories are sticky-which means people are more likely to connect with them and pass them on.

We have hundreds of classic books you can read right now, all absolutely free! It is an ideal way to expand your horizons, catch up on your reading list, or read books that it seems <br>like everyone else has already read. Fix yourself a drink, get comfortable and Start Reading
</p>
<hr>


<div class="foo">
  <pre>                                                                   			<a href="https://www.facebook.com/Bens-Book-Barn-308173099664340/" target="_blank"><img width="40x" height="35px" src="facebook.png" id="fb"></a> <a href="https://twitter.com/ranjithanayak48" target="_blank"><img  onclick="twitter()"id="tw" width="40px" height="35px" src="twitter.png"></a> <a href="https://www.linkedin.com/in/priyanka-askani-803009154/" target="_blank"><img onclick="linkedin()" width="40px" height="35px" src="Linkedin.png" id="lk"></a> <a href="https://plus.google.com/108609258968978062312" target="_blank"><img onclick="plus()" width="40px" height="35px" id="gp" src="gplus.png"  id="gp"></a> <a href="https://www.instagram.com/bensbookbarn/?hl=en" target="_blank"><img onclick="instagram()" width="40px" height="40px" src="insta.png"  id="ins"></a></pre>
  <pre>                                                                              			   <a href="HOME.php">TO THE TOP</a></pre>
</div></body></html>


