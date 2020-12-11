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
           
			$email=$_POST['email'];

			
		

$sql = "INSERT INTO newsletter (email)
    VALUES('$email')";
   if ($conn->query($sql) === TRUE) 
	{
    $message = '<html>
	   <script>
alert("Thank you for subscribing to our newsletter.");
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
