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
$user = $_POST["alumniuname"];
$pass = $_POST["alumnipsw"];

$query = "SELECT * FROM applicants WHERE username ='".$user."' && password = '".$pass."'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_row())
	{
	if ($row[10]==1){
	  session_start();
	  $_SESSION["fname"]=$row[2];
	  $_SESSION["lname"]=$row[3];
	  $_SESSION["school"]=$row[4];
	  $_SESSION["mail"]=$row[5];
	  $_SESSION["phone"]=$row[6];
	  $_SESSION["bday"]=$row[7];
	  $_SESSION["bmonth"]=$row[8];
	  $_SESSION["byear"]=$row[9];
	  $_SESSION["accept"] = "Registered Alumni";

		$conn->close();
		header("refresh:0;url=http://localhost/IndustrialProject/LoginPage.php" );
	}
	else {
		$conn->close();
		echo "Your Application has not been accepted yet";
		header("refresh:3;url=http://localhost/IndustrialProject/WelcomePage.html" );
	}
	}
}
else{
	$conn->close();
	echo "Invalid Credentials";
	header("refresh:2;url=http://localhost/IndustrialProject/WelcomePage.html" );
}
?>