<?php

class db{
function OpenCon()
{
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
return $conn;
}

function SearchD($conn,$table,$p)
{
    $result= $conn->query("SELECT * FROM $table WHERE Designation like ('".$p."%')");
    
    return $result;
}
function SearchN($conn,$table,$p)
{
    $result= $conn->query("SELECT * FROM $table WHERE Name like ('".$p."%')");
    
    return $result;
}

function SearchI($conn,$table,$p)
{
    $result= $conn->query("SELECT * FROM $table WHERE Interest like ('".$p."%')");
    
    return $result;
}

function CloseCon($conn)
{
    $conn->close();
}
}
?>
<!DOCTYPE HTML>  
<html>
<head>

    <title>Faculty</title>
    
</head>
<body>
<?php

if(empty($_POST["Search"]))
  {
      echo "<p class='box error'> please fill up </p>";
  }else{
     $f_name=$_POST['f_name'];
     $Research=$_POST['Research'];
     $Designation=$_POST['Designation'];
     $connection= new db();
     $connobj=$connection->OpenCon();
     $userQuery1=$connection->SearchN($connobj,"faculty",$f_name);
     $userQuery2=$connection->SearchI($connobj,"faculty",$Research);
     $userQuery3=$connection->SearchD($connobj,"faculty",$Designation);
     if($userQuery1->num_rows > 0 && $f_name!="")
  {
      echo "<table ><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
      while($row=$userQuery1->fetch_assoc())
      {
          echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";   
      }
      echo "</table>";
  }
  else{
    echo "";
  }
  if($userQuery2->num_rows > 0 && $Research!="")
  { echo "<table ><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
    while($row=$userQuery2->fetch_assoc())
    {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";  
        
    }
    echo "</table>";}
    else{
        echo "";
      }
    
    if($userQuery3->num_rows > 0 && $Designation!="")
    { echo "<table ><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
      while($row=$userQuery3->fetch_assoc())
      {
          echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";   
      }
      echo "</table>";} 
      else{
        echo "";
      }
  $connection->CloseCon($connobj);
     }
     
?>
 
<h1 class>Search Faculty</h1>
<hr>
<br><p id="demo1"></p>
  <br>  
<form action="FTLabExam.php"  method="post" enctype="multipart/form-data">
Search by Faculty Name: <br><input id="f_name" type="text" name="f_name" onkeyup=MyAjaxFunc() placeholder="Enter your Name">
  
  
  
  Search by Research Interest: <br><input id="Research" type="text" name="Research" placeholder="Enter your PhoneNo">

  Search by Designation:<br>
<select id="Designation" name="Designation" >
<option value="">Select Designation</option>
    <option value="Lecturer">Lecturer</option>
    <option value="Assistant_Professor">Assistant Professor</option>
    <option value="Professor">Professor</option>
  </select>

  
  <input class type="submit" onclick=MyAjaxFunc() name="Search" value="Search"> 
 
 <br>
  

 

</form>
<script src="myAjax.js">
    </script>
</body>
</html>
