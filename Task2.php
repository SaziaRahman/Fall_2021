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
?>

<h2>PHP Form Validation Example</h2>
<form action="Task2.php" method="post" enctype="multipart/form-data">  
  First Name: <input type="text" name="fname">
  <br>
  Last Name: <input type="text" name="lname">
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
  E-mail: <input type="text" name="email">
  <br>
  Password: <input type="password" name="password">
  <br>
  Please choose a file: <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="reset">  
</form>
<?php
if(strlen($password)<=8)
{
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
}
else
{echo "Sorry, there was an error entering password.";}
?>
<?php

$formcontrol = array(
    'fname'=>$_POST["fname"],
    'lname'=>$_POST["lname"],
    'age'=>$_POST["age"],
    'Designation'=>$_POST["Designation"],
    'L1'=>$_POST["L1"],
    'L2'=>$_POST["L2"],
    'L3'=>$_POST["L3"],
    'fileToUpload'=> $_FILES["fileToUpload"]["name"]
);

$existingdata=  file_get_contents('file1.json');
$tempJSONdata= json_decode($existingdata);
$tempJSONdata[]=$formcontrol;
$jsonconvert=json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("file1.json",$jsonconvert))
{
echo "Successful";
}
else
{
    echo "Failed";
}


?>

</body>
</html>