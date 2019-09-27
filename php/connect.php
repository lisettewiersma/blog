<?php
    $servername = "localhost";
    $dbname = "blog";
    $username = "root";
    $password = "pizzadoos1";
    
    // maak connectie 
    $connect = new mysqli($servername, $username, $password, $dbname);
    // kijk of de connectie werkt 
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
?>