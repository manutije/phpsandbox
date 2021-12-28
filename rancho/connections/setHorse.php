<?php
    $servername = "localhost";
    $username = "adminer";
    $password = "@Avanti2";
    $dbname = "Rancho";
    $hname = $_GET["hname"];
    $owner = $_GET["owner"];
    $sex = $_GET["sex"];
    $color = $_GET["color"];

    $sql = "INSERT INTO Caballos (Name,Owner,Color,Sex)
    VALUES (".
    $hname.",".
    $owner.",".
    $sex.",".
    $color.")";
    echo $sql;

    /*
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Caballos (Name,Owner,Color,Sex)
    VALUES (".
    $name.",".
    $owner.",".
    $sex.",".
    $color.")";
    echo $sql;
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    */

    $conn->close();
?>