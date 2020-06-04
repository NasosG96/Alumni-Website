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

$user = $_POST["uname"];
$query = "SELECT username FROM applicants WHERE username ='".$user."' ";
$result = $conn->query($query);
if ($result->num_rows > 0) {

echo "Username already exists";
header( "refresh:2;url=http://localhost/IndustrialProject/AlumniRegistration.html" );

}
else{

// prepare and bind
$stmt1 = $conn->prepare("INSERT INTO applicants (username, password, fname, lname, school, mail, phone, bday, bmonth, byear, accepted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt1->bind_param("sssssssiiii", $user, $pass, $fname, $lname, $school, $mail, $phone, $bday, $bmonth, $byear, $accept);


// set parameters and execute

$pass = $_POST["pword"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$school = $_POST["school"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$bday = $_POST["dd"];
$bmonth = $_POST["nn"];
$byear = $_POST["yyyy"];
$accept=0;


$stmt1->execute();

$stmt1->close();

echo "New User Registered Successfully.  You will be redirected shortly.";
}
$conn->close();
header("refresh:3;url=http://localhost/IndustrialProject/WelcomePage.html" );
?>