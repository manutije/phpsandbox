<?php
$servername = "localhost";
$username = "adminer";
$password = "@Avanti2";
$dbname = "Rancho";
$id=$_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Caballos.ID, Name,ColorName,FirstName, LastName,Sex from Caballos INNER JOIN Colors on Colors.ID = Caballos.Color INNER JOIN Owners on Owners.ID = Caballos.Owner WHERE Caballos.ID =".$_GET["id"];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $caballo = $row;
} else {
  $caballo=["No connection","No connection","No connection","No connection"];
}
echo "Run <br>";
echo $caballo;
$conn->close();
?>