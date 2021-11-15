<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="myCss.css">
</head>
<body>  

<?php
// define variables and set to empty values
$fname=$lname =$age=$Designation=$L1=$L2=$L3  = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $age= test_input($_POST["age"]);
  $Designation = test_input($_POST["Designation"]);
  $L1 = test_input($_POST["L1"]);
  $L2 = test_input($_POST["L2"]);
  $L3 = test_input($_POST["L3"]);
  $email = test_input($_POST["email"]);
  if(strlen(test_input($_POST["password"]))<=8)
  {$password = test_input($_POST["password"]);}
  else
  {echo "Sorry, there was an error entering password.";}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". 
   basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
    echo "Sorry, there was an error uploading your file.";
    }

?>

<h2 class='p'>ABC Management System
<br>
 We Create Future</h1>
<br>
<h4 class=table1> Home  About us  Shop </h4>
<br>
<hr>
<form action="Task3_Final.php" method="post" enctype="multipart/form-data">  
<table ><tr><td><h4>First Name: </h4></td><td><h4><input type="text" name="fname"></h4></td></tr>
  <br>
  <tr><td><h4> Last Name:  </h4></td><td><h4><input type="text" name="lname"></h4></td></tr>
  <br>
  <tr><td><h4>Age: </h4></td><td><h4><input type="text" name="age"></h4></td></tr>
  <br>
  <tr><td><h4>Designation:</h4></td><td><h4>
  <input type="radio" name="Designation" value="Junior Programmer">Junior Programmer
  <input type="radio" name="Designation" value="Senior Programmer">Senior Programmer
  <input type="radio" name="Designation" value="Project Lead">Project Lead</h4></td></tr>
  <br>
  <tr><td><h4>Prefferred Language:</h4></td><td><h4> 
  <input type="checkbox" name="L1" value="JAVA">JAVA
  <input type="checkbox" name="L2" value="PHP">PHP
  <input type="checkbox" name="L3" value="C++">C++</h4></td></tr>
  <br>
  <tr><td><h4> E-mail:</h4></td><td><h4> <input type="text" name="email"></h4></td></tr>
  <br>
  <tr><td><h4>Password: </h4></td><td><h4><input type="password" name="password"></h4></td></tr>
  <br>
  <tr><td><h4> Please choose a file: </h4></td><td><h4><input type="file" name="fileToUpload" id="fileToUpload"></h4></td></tr>
  <br>
  <tr><td><h4>  <input type="submit" name="submit" value="Submit">  
  </h4></td><td><h4><input type="reset" name="reset" value="reset">  </h4></td></tr>
</form>
</body>
</html>
<?php

echo "<h2 class='box reg'>Registration Form</h2>";
echo $fname;
echo " ";
echo $lname;
echo "<br>";
echo $age;
echo "<br>";
echo $Designation;
echo "<br>";
echo $L1;
echo " ";
echo $L2;
echo " ";
echo $L3;
echo "<br>";
echo $email;
echo "<br>";

?>

