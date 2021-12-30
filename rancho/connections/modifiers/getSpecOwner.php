<?php
include('../modifiers/getSpecOwner.php');
$servername = "localhost";
$username = "adminer";
$password = "@Avanti2";
$dbname = "Rancho";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Owners";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["FirstName"]." ".$row["LastName"] == $caballo["FirstName"]." ".$caballo["LastName"]){
      echo "<option value='".$row["ID"]."' selected>".$row["FirstName"]." ".$row["LastName"]."</option>";
    }else{
      echo "<option value='".$row["ID"]."'>".$row["FirstName"]." ".$row["LastName"]."</option>";
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>