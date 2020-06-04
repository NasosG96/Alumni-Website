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
$index = $_COOKIE["index"];

$query = "SELECT username, fname, lname, school FROM applicants WHERE accepted = 0";
$result = $conn->query($query);
if ($result->num_rows > 0) {
	$loguser = array();
	$logfirst = array();
	$loglast = array();
	$logschool = array();
	$i = 0;
	while($row = $result->fetch_row())
	{	
        $loguser[$i] = $row[0];
		$logfirst[$i] = $row[1];
		$loglast[$i] = $row[2];
		$logschool[$i] = $row[3];
	    $i++;
    }
	 

$alteruser = $loguser[$index];
$altername = $logfirst[$index];
$alterlast = $loglast[$index];
$alterschool = $logschool[$index];

$alterquery = "UPDATE applicants SET accepted = 1 WHERE username ='".$alteruser."' && fname = '".$altername."' && lname = '".$alterlast."' && school = '".$alterschool."'";
$result = $conn->query($alterquery);

echo "Application was accepted" ;
header("refresh:2;url=http://localhost/IndustrialProject/loadapplicants.php" );
}
else{
	echo "Something went wrong...";
	header("refresh:2;url=http://localhost/IndustrialProject/WelcomePage.html" );
}

?>