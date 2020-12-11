<?php
$servername = "hostname";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
            $name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['message'];
			
		

$sql = "INSERT INTO contactus (name,email,message)
    VALUES('$name','$email','$message')";
   if ($conn->query($sql) === TRUE) 
	{
    //echo "New record created successfully";

	  //$success = '<html>
	   //<meta http-equiv="refresh"
        //content="; url = https://codingstudio.club/contact.html" />  
	   //</html>';
	   //echo $success;
	   $message = '<html>
	   <script>
alert("Thank you, we will be reaching you soon.");
  location.replace("https://codingstudio.club/contact.html")
  
  </script>
  </html>';
  echo $message;
  
	    
	} else {
   $fail = '<html>
   <script>
 alert("could not record response please try again.");
  location.replace("https://codingstudio.club/contact.html")
 
  </script>
  </html>';
  echo $fail;
}
	

$conn->close();
?>
