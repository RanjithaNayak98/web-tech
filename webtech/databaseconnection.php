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
<?php
//echo "1";

define('DB_HOST', 'localhost');
define('DB_NAME', 'registeration');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
//echo "2";
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

//echo "3";
extract($_POST);

if(isset($_POST['regis']) or mysqli_error($con))
{
	//echo "8";
	SignUp();
}
function NewUser()
{
	global $con;
	//echo "4";
	$firstname = $_POST['fname'];
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$password =  $_POST['pwd'];
	$query = "INSERT INTO login (firstname,username,email,password) VALUES ('$firstname','$username','$email','$password')";
	$data = mysqli_query ($con,$query)or die(mysqli_error($con));
	if($data)
	{
	//echo "YOUR REGISTRATION IS COMPLETED...";
	header('Location:newhome.php');
	}
	//echo "5";
}

function SignUp()
{
	//echo "6";
	global $con;
if(!empty($_POST['uname']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	//echo "7";
	$query = mysqli_query($con,"SELECT * FROM login WHERE username = '$_POST[uname]' AND password = '$_POST[pwd]'") or die(mysqli_error($con));

	if(!$row = mysqli_fetch_array($query) or die(mysqli_error($con)))
	{
		NewUser();
	}
	else
	{
		//echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		
	}
}

}

?>