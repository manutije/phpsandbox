<?php
session_start();
$servername = "localhost";
$username = "adminer";
$password = "@Avanti2";
$dbname = "Rancho";
$id = $_SESSION['updateID'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM Caballos WHERE ID=".$id;

echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: ../");
exit();
?>