<!DOCTYPE HTML>  
<html>
<head>
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
  $password = test_input($_POST["password"]);}
 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(array_key_exists('fileToUpload', $_FILES)){
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
      echo "Sorry, there was an error uploading your file.";
      }
    }
        
?>

<h2>PHP Form Validation Example</h2>
<form action="FT_Task2.php" method="post" enctype="multipart/form-data">  
  First Name: <input id="fname" type="text" name="fname"onkeyup="ValidationForm()" placeholder="Enter your Name">
 <p id="demo1"></p>
 <br>
  Last Name: <input id="lname" type="text" name="lname"onkeyup="ValidationForm()" placeholder="Enter your Name">
 <p id="demo2"></p>
  <br>
  Age: <input type="text" name="age">
  <br>
  Designation:
  <input type="radio" name="Designation" value="Junior Programmer">Junior Programmer
  <input type="radio" name="Designation" value="Senior Programmer">Senior Programmer
  <input type="radio" name="Designation" value="Project Lead">Project Lead
  <br>
  Prefferred Language 
  <input type="checkbox" name="L1" value="JAVA">JAVA
  <input type="checkbox" name="L2" value="PHP">PHP
  <input type="checkbox" name="L3" value="C++">C++
  <br>
  E-mail: <input id="email" type="text" name="email" onkeyup="ValidationForm()" placeholder="Enter your Password">
 <p id="demo4"></p>
  <br>
  Password: <input id="password" type="password" name="password"onkeyup="ValidationForm()" placeholder="Enter your Password">
 <p id="demo3"></p>
  <br>
  Please choose a file: <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="reset">  
</form>
<script src="FTask2_myjs.js">

</script>
<?php

echo "<h2>Your Input:</h2>";
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

</body>
</html>