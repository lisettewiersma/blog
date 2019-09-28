<?php

function blogs(){
    include 'connect.php';

    $sql = "SELECT * FROM blogs";
    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "<div class='blog'>" . "<div class='wrapper'>" . 
        "<div><h1 class='title'>" . $row['title'] . "</h1> 
        <p>". $row['author'] . " " . $row['date'] ."</p></div>" .
        "<img class='blogimg'src='$row[image]'>" . "</div>" . 
        "<p class='content'>" . $row['content'] . "</p>" . "</div>";
    }
}
?>
