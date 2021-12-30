<?php
    include('./getHorse.php');
    $servername = "localhost";
    $username = "adminer";
    $password = "@Avanti2";
    $dbname = "Rancho";
    $hname = $_GET["hname"];
    $owner = $_GET["owner"];
    $sex = $_GET["sex"];
    $color = $_GET["color"];
    $id = $caballo["ID"];
    print_r($caballo);

    /*
    $sql = "UPDATE Caballos (Name,Owner,Sex,Color)
    VALUES ('".
    $hname."',".
    $owner.",'".
    $sex."',"
    $color.")WHERE ID = 9";
    echo $sql;
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
    */
?>