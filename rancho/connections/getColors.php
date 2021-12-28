<?php
  $servername = "localhost";
  $username = "adminer";
  $password = "@Avanti2";
  $dbname = "Rancho";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo "Connection failed";
    die("Connection failed: " . $conn->connect_error);
  }else{
    //Empty Array
    $Colores = [];

    //Query
    $sql = "SELECT * FROM Colors";

    //Execute Query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $Colores[]=$row["ID"] => $row["ColorName"];
        echo "$row['ID']: $row['ColorName']";
      }
    } else {
        $Colores[]="NoData";
    }
    $conn->close();
    print_r($Colores);
}
?>