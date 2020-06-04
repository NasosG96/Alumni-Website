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
$user = $_POST["uname"];

$query = "SELECT username FROM applicants WHERE username ='".$user."' ";
$result = $conn->query($query);
if ($result->num_rows > 0) {

echo "Username already exists";
header( "refresh:10;url=http://localhost/IndustrialProject/AlumniRegistration.html" );

}
else{

echo "Registration Complete";
header( "refresh:10;url=http://localhost/IndustrialProject/alumniapply.php" );

}

$conn->close();
?>
