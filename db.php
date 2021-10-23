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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
  $fname = test_input($_POST["fname"]);
 

  $password = test_input($_POST["password"]);

$mobile= test_input($_POST["mobile"]);

$dateOfBirth= test_input($_POST["dateOfBirth"]);
 
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
$sql="INSERT INTO Employee(University,Degree,Major,Results,Passing) VALUES ('$university','$degree','$major','$results','$yearpassed')";


    
if($conn->query($sql)==TRUE)
{
    echo "insertion successful";
}
else{echo "failed";}

$conn->close();
?>