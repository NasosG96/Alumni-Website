<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alumni Profile</title>
	<link rel="stylesheet" href="LoginPage.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="left" src="$user">
        <img src="https://vectorified.com/images/empty-profile-picture-icon-14.png" 
        alt="user" width="150" height="200">
        <h4><?php echo $_SESSION["fname"]?> <?php echo $_SESSION["lname"]?></h4>
         <p><?php echo $_SESSION["school"]?></p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Contact Info</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php echo $_SESSION["mail"]?></p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p><?php echo $_SESSION["phone"]?></p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3></h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Birthday</h4>
                    <p><?php echo $_SESSION["bday"]?>/<?php echo $_SESSION["bmonth"]?>/<?php echo $_SESSION["byear"]?></p>
                 </div>
                 <div class="data">
                   <h4>Status</h4>
                    <p><?php echo $_SESSION["accept"]?></p>
              </div>
            </div>
        </div> 
    </div>
</div>

</body>
</html>