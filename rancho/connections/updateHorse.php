<?php
    session_start();
    $servername = "localhost";
    $username = "adminer";
    $password = "@Avanti2";
    $dbname = "Rancho";
    $hname = $_GET["hname"];
    $owner = $_GET["owner"];
    $sex = $_GET["sex"];
    $color = $_GET["color"];
    include '../Temp/ID.php';
    $id = $_SESSION['updateID'];

    $sql = "UPDATE Caballos SET
    Name = '".$hname."',
    Owner =".$owner.",
    Sex = '".$sex."'.
    Color= ".$color."
    WHERE ID =".$id;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>