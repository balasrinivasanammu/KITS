//Register.php

<!DOCTYPE HTML>
<html>
<body>
<?php
 
include("DBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
	 $inFullname = $_POST["fullname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
	 $inEmail = $_POST["email"];
	 $inUsername = $_POST["username"];
	 $inPassword = $_POST["password"];

	
	 $sql = "INSERT INTO customer (cname, address, email,mobile)
VALUES ('$inEmail','$inEmail','$inEmail','$inEmail')";

if (mysqli_query($db, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
$result=mysqli_affected_rows($db);
	
	if($result > 0)
	 {
		header("location: RegSuccess.php"); // user will be taken to the success page
	 }
	 else
	 {
		 echo "Oops. Something went wrong. Please try again"; 
		 ?>
		 <a href="RegisterForm.php">Try Login</a>
		 <?php 
	 }
}
?>
</body> 
</html>