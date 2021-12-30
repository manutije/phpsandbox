<?php
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
$sql = "SELECT Caballos.ID, Name,ColorName,FirstName, LastName,Sex from Caballos INNER JOIN Colors on Colors.ID = Caballos.Color INNER JOIN Owners on Owners.ID = Caballos.Owner WHERE Caballos.ID = 2";
$result = $conn->query($sql);
echo $result->num_rows;
if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  print_r($row);
  //$caballo = array($row["Name"], $row["FirstName"].' '.$row["LastName"], $row["Sex"], $row["ColorName"]);
} else {
  $caballo=["No connection","No connection","No connection","No connection"];
}
$conn->close();
?>