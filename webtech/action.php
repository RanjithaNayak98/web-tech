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

<!DOCTYPE html>
<html>
<head>
	<title>action and adventure</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="linksnew.css">
<style>
	body{
background-image: url("adventure.jpg"); /*You will specify your image path here.*/
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
width:150%;
}
#a
{
	background-color: transparent;
	width: 750px;
	height: 250px;
	margin-left: 100px;
	

}
img{
	float: left;
	margin-left: 15px;
	margin-right: 30px;
	width: 100px;
	height:175px;
}
p, h3{
	float: justify;
	color: white;
	font-weight: strong;
}
h3{color:black;}
h1{
	color: white;
	font-family: Comic Sans MS;
}

.button {
    background-color: black; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover {background-color:  #264d73}

.button:active {
  background-color:  #264d73;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.checked {
    color: orange;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
    z-index: 100;
	text-decoration:underline;
}

.popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            background: black;
            width: 500px;
            height: 500px;
            margin-left: 250px; /*Half the value of width to center div*/
            margin-top: -250px; /*Half the value of height to center div*/
            z-index: 200;
            border: black solid 1px;
        }
        .popupclose {
            float: right;
            padding: 10px;
            cursor: pointer;
        }
        #popupcontent {
            padding: 10px;
        }
        #button {
            cursor: pointer;
        }


        .mytxt{ 
        margin-left:30px;
        height:70px;
        width:400px;
		margin-bottom:30px;
        
        }


        .sav{
        
        height:50px;
        width:100px;
        background-color:grey;
        margin-left:150px;
        
        }
		#d{
		float:right;
		margin-left:1198px;
		
}
</style>
</head>
<body onload="displog()">
<ul id="u">
  <li><a href="http://localhost/Project/HOME.php">Home</a></li>
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
<li><a href="http://localhost/Project/aboutus.php">About US</a></li>
<li><a href="http://localhost/Project/contactus.php">Contact US</a></li>
</ul>

<h1 style="color: black;">Best Of Action </h1>


<div id="a">
<h2>1.</h2>
<img src="the sea wolf.jpg">
<h3>The Sea Wolf</h3>
<p>by Jack London</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="1" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('the_sea-wolf.pdf','_blank')" type="button" class="button">Read</button>

</div>
<br>

<div id="a">
<h2>2.</h2>
<img src="the lost hero.png">
<h3>The Lost Hero</h3>
<p>by Rick Riordan</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="2" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('01 - The Lost Hero.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>3.</h2>
<img src="sherlock.png">
<h3>The Memoirs Of Sherlock Holmes</h3>
<p>by Arthur Conan Doyle</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="3" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('Arthur+Conan+Doyle+-+The+Memoirs+of+Sherlock+Holmes.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>4.</h2>
<img src="cant.jpg">
<h3>The Call Of Wild</h3>
<p>by Jack London</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="4" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('Call Of Wild.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>5.</h2>
<img src="mocking jay.png">
<h3>Mocking Jay</h3>
<p>by Suzanne Collins </p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="5" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('Mocking Jay.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>6.</h2>
<img src="harry potter.jpg">
<h3>Harry Potter and The Philosopher's Stone</h3>
<p>by J. K. Rowling</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="6" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('The Lost Hero.pdf','_blank')" type="button" class="button">Read</button>

</div>
<br>

<div id="a">
<h2>7.</h2>
<img src="hunger.jpg">
<h3>The Hunger Games</h3>
<p>by Suzanne Collins</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="7" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('hunger.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>8.</h2>
<img src="3636.jpg">
<h3>The Giver</h3>
<p>by George Orwell</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="8" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('giver.pdf','_blank')"type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>9.</h2>
<img src="huckleberry.png">
<h3>The Adventures of Hckleberry Finn</h3>
<p>Douglas Adams</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="9" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('hitchhiker.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>10.</h2>
<img src="stranger.jpg">
<h3>Stranger in a Strange Land </h3>
<p>by Robert A. Heinlein</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="10" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('stranger.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>

<div id="a">
<h2>11.</h2>
<img src="count.png">
<h3>The Count Of Monte Cristo</h3>
<p>by Alex Dumo Pere</p>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
<input type="button" id="11" onclick="fun(this.id)" class="button" name="review" value="Review">	<button onclick="window.open('time.pdf','_blank')" type="button" class="button">Read</button>
</div>
<br>


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
		ll.setAttribute("href","http://localhost/Project/Logout.php");
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
		ll.setAttribute("http://localhost/Project/Login.html");
		ll.setAttribute("target","_self");
		ll.setAttribute("class","button");
		ll.setAttribute("id","d");
		ll.innerHTML="Login";
		
	}					
					
}


var count = 0;
    var flag1 =0;var flag2 =0;var flag3 =0;var flag4 =0;var flag5 =0;var flag6 =0;var flag7 =0;var flag8 =0;
    var flag9 =0;var flag10 =0;var flag11 =0;
    var flag ="flag";
function fun(s)
    {
		
        var x=flag+s;
        if(x=="flag1")
            var y=flag1;
        else if(x=="flag2")
            var y=flag2;
		else if(x=="flag3")
            var y=flag3;
		else if(x=="flag4")
            var y=flag4;
		else if(x=="flag5")
            var y=flag5;
		else if(x=="flag6")
            var y=flag6;
		else if(x=="flag7")
            var y=flag7;
		else if(x=="flag8")
            var y=flag8;
		else if(x=="flag9")
            var y=flag9;
		else if(x=="flag10")
            var y=flag10;
		else
            var y=flag11;
    if(y==0)
    {
    y++;
	var pop = document.createElement("div");
    pop.id = "popup"+s;
    pop.className = "popup"
    document.body.appendChild(pop);

    var control = document.createElement("div");
    control.id = "popupcontrols"+s;
    pop.appendChild(control);

    var span = document.createElement("span");
    span.id = "popupclose"+s;
    span.className = "popupclose"
    span.textContent = "X";
	span.style.color="white";
    control.appendChild(span);

    var content = document.createElement("div");
    content.id = "popupcontent"+s;
    pop.appendChild(content);

    var head = document.createElement("h1");
    head.textContent = "Reviews For Book"+s;
	head.style.padding="30px";
    content.appendChild(head);


    var re1 = document.createElement("textarea");
    re1.id = "mytxt";
    re1.className = "mytxt";
    re1.value = "Awesome book! Must read! Changed my life!";
    content.appendChild(re1);


    var re2 = document.createElement("textarea");
    re2.id = "mytxt"+s+count;
    re2.className = "mytxt";
    content.appendChild(re2);

    var w=document.createElement("input");
    w.setAttribute("id","b1"+s+count);
    w.setAttribute("type","button");
    w.setAttribute("value","Save review");
    w.setAttribute("class","sav");
    w.setAttribute("onclick","fun1(this.id)");
    

   content.appendChild(w);
    var closePopup = document.getElementById("popupclose"+s);
    var popup = document.getElementById("popup"+s);

    popup.style.display = 'block';

    closePopup.onclick = function() {
       
        popup.style.display = 'none';
    }
    count++;
    }


    else 
    {
		
        var pop = document.getElementById("popupcontent"+s);
         var re2 = document.createElement("textarea");
        re2.id = "mytxt"+s+count;
        re2.className = "mytxt";
        pop.appendChild(re2);


    var w=document.createElement("input");
    w.setAttribute("id","b1"+s+count);
    w.setAttribute("type","button");
    w.setAttribute("value","Save review");
    w.setAttribute("class","sav");
    w.setAttribute("onclick","fun1(this.id)");
    
    pop.appendChild(w);

    var closePopup = document.getElementById("popupclose"+s);
    var popup = document.getElementById("popup"+s);

    popup.style.display = 'block';

    closePopup.onclick = function() {
       
        popup.style.display = 'none';
    }
    count++;
    }
    }


function fun1(w)
{

    var d=document.getElementById(w);
    var p=d.parentNode;
    p.removeChild(d);

}
</script>
</body>
</html>
