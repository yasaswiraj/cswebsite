<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
            		$name=$_POST["name"];
			$roll=$_POST["roll"];
			$domain=$_POST["domain"];
			$email=$_POST["email"];
			$phone=$_POST["phone"];
			$year=$_POST["yr"];
			$branch=$_POST["branch"];
			$section = $_POST["sec"];
			$question = $_POST["ibques"];
			$response = $_POST["ibresp"];
			

//$unique_code=rand(0000,9999);
$sql = "INSERT INTO recruitments (name, roll, domain, email, phone, year, branch, section, question, response) 
				VALUES('$name','$roll','$domain[0]','$email','$phone','$year[0]','$branch[0]','$section[0]','$question','$response')";
			$suc = "success";
			$fail = "fail";
			if ($conn->query($sql) === TRUE) {
				echo json_encode($suc);
} else {
echo json_encode($fail);
}

$conn->close();
?>
