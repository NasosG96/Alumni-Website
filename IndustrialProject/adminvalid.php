<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industrialproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// prepare and bind


// set parameters and execute
$user = $_POST["admnuname"];
$pass = $_POST["admnpsw"];
$adminpass = $_POST["admn"];

$query = "SELECT * FROM admins WHERE adminuser ='".$user."' && adminpass = '".$pass."' && adminsecure = '".$adminpass."'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
	while($row = $result->fetch_row())
	{
	 session_start();
	  $_SESSION["adminname"]=$row[3];
	  $_SESSION["adminlast"]=$row[4];
	
	header("refresh:0;url=http://localhost/IndustrialProject/loadapplicants.php" );
	}
}
else{
	$conn->close();
	echo "Invalid Credentials";
	header("refresh:2;url=http://localhost/IndustrialProject/WelcomePage.html" );
}

?>