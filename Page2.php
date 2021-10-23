

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$university=$degree =$major=$results=$yearpassed= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
$university = test_input($_POST["university"]);
  $degree = test_input($_POST["degree"]);
 
$major = test_input($_POST["major"]);
  
$results= test_input($_POST["results"]);

$yearpassed= test_input($_POST["yearpassed"]);


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form action="db.php" method="post" enctype="multipart/form-data">
University: <input type="text" name="university">
  <br>  
  Degree: <input type="text" name="degree">
  <br>
  Major: <input type="major" name="major">
  <br>
 
  Results: <input type="text" name="results">
  <br>
Passing Year:
  <input type="date" name="yearpassed">
 
 
  <a href="db.php"><input type="submit" name="Submit" value="Submit"> </a>
  <h2>Do You Want To <a href="logout.php">LogOut</a></h2>
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="CV";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$sql="INSERT INTO Employee(User_Name,Password,Full_Name,Mobile_No,Date_of_Birth) VALUES ('$name','$password','$fname','$mobile','$dateOfBirth')";


    
if($conn->query($sql)==TRUE)
{
    echo "insertion successful";
}
else{echo "failed";}

$conn->close();
?>