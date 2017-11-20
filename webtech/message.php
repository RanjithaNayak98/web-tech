<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$flag=0;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
    mysqli_select_db($conn,'message') or die (mysqli_error($conn));
  
    if(isset($_POST["send"]) && $_POST["send"]!=""){ 
        $name=$conn->real_escape_string($_POST["uname"]);
        $email=$conn->real_escape_string($_POST["email"]);
        $message=$conn->real_escape_string($_POST["message"]);
    if(mysqli_query($conn,"INSERT INTO msg (name, email, message) VALUES ('$name','$email','$message')")){
        
		header('Location: contactus.php');
		echo "<script>
             alert('message sent succesfully'); 
            
     </script>";
		
    }
	else
		die('Error: ' . mysqli_error($conn));
	}
		
	

?>