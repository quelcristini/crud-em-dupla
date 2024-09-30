<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "crudAulas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Sua conexão falhou:( " . $conn->connect_error);
    }
?>
