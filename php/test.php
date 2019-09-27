<?php
include 'connect.php';

$sql = "SELECT title FROM blogs";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()){
    echo $row['title'];
}
?>