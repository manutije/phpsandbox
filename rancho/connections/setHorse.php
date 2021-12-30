<?php
    $servername = "localhost";
    $username = "adminer";
    $password = "@Avanti2";
    $dbname = "Rancho";
    $hname = $_GET["hname"];
    $owner = $_GET["owner"];
    $sex = $_GET["sex"];
    $color = $_GET["color"];

    $sql = "INSERT INTO Caballos (Name,Owner,Sex,Color)
    VALUES ('".
    $hname."',".
    $owner.",'".
    $sex."',".
    $color.")";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../");
    exit();
?>