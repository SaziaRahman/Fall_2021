<?php
session_start();


?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$fname=$lname =$mobile=$dateOfBirth=$password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
  $fname = test_input($_POST["fname"]);
 
$password = test_input($_POST["password"]);

$mobile= test_input($_POST["mobile"]);

$dateOfBirth= test_input($_POST["dateOfBirth"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form action="Page2.php" method="post" enctype="multipart/form-data">
User Name: <input type="text" name="name">
  <br>  
  Password: <input type="password" name="password">
  <br>
  Full Name: <input type="text" name="fname">
  <br>
  Mobile Number: <input type="text" name="mobile">
  <br>
  Date of Birth:
  <input type="date" name="dateOfBirth">
 
 <a href="Page2.php">
 <input type="submit" name="next" value="Submit"></a>
 
</form>
</body>
</html>
<?php
//include("Page2.php");
?>