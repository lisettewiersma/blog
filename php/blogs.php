<?php
error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);

//If you are feeling old school
ini_set('error_reporting', E_ALL);

include 'connect.php';

$sql = "SELECT * FROM blogs";
$result = $connect->query($sql);
function blogs(){
    include 'connect.php';

    $sql = "SELECT * FROM blogs";
    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "<div class='blog'>";
        echo "<h1 class='title'>" . $row['title'] . "</h1>";
        echo "<div class='info'>" . $row['author'] . " " . $row['date'] . "</div>";
        echo "<img src='$row[image]'>";
        echo "<p class='content'>" . $row['content'] . "</p>";
        echo "</div>";
    }
}
?>
