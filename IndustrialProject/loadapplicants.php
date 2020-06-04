<?php
session_start();

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


$query = "SELECT fname, lname, school FROM applicants WHERE accepted = 0";
$result = $conn->query($query);
if ($result->num_rows > 0) {
	$first = array();
	$last = array();
	$school = array();
	$i = 0;
	while($row = $result->fetch_row())
	{	
		$first[$i] = $row[0];
		$last[$i] = $row[1];
		$school[$i] = $row[2];
	    $i++;
    }
	 
	 
	  $_SESSION["fname"]=$first; 
	  $_SESSION["lname"]=$last;
	  $_SESSION["school"]=$school;
	  

	  header("refresh:0;url=http://localhost/IndustrialProject/AdminPage.php" );
	}
	
	else{
		echo "No applicants yet...";
		header("refresh:3;url=http://localhost/IndustrialProject/WelcomePage.html" );
	}
	$conn->close();	

?>