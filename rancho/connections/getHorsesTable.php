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
$Caballos = [];

$sql = "SELECT Caballos.ID, Name,ColorName,FirstName, LastName,Sex from Caballos INNER JOIN Colors on Colors.ID = Caballos.Color INNER JOIN Owners on Owners.ID = Caballos.Owner";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $caballo = [
            $row["Name"],
            $row["FirstName"].' '.$row["LastName"],
            $row["Sex"],
            $row["ColorName"],
            '<a class="btn btn-wanring" href="./connections/viewHorse.php?id='.$row["ID"].'">Complete View</a>'
        ];
        $Caballos[]=$caballo;
    }
  } else {
    $Caballos[]="NoData";
  }
  $conn->close();
?>