<?php

function blogs(){
    include 'connect.php';
    
    // selecteer id's met een even getal
    $query = "SELECT id FROM blogs WHERE ( id % 2 ) = 0";
    $evennumber = $connect->query($query);

    // selecteer id's met een oneven getal
    $sql1 = "SELECT id FROM blogs WHERE ( id % 2 ) <> 0";
    $oddnumber = $connect->query($sql1);

    // alle input vanuit de database
    $sql = "SELECT * FROM blogs";
    $result = $connect->query($sql);


    if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($evennumber) {
                    $wrapperclass = 'wrapperright';
                    $class = 'imgleft';
                    $evennumber = false;
                }
                else{
                    $evennumber = true;
                    $wrapperclass = 'wrapperleft';
                    $class = 'imgright';
                }

                echo "<div class='blog'>" . "<div class='wrapper'>" . 
                "<div class='$wrapperclass'><h1 class='title'>" . $row['title'] . "</h1> 
                <p>". "Geschreven door " . $row['author'] . " op " . $row['date'] ."</p></div>" .
                "<img class='blogimg $class'  src='$row[image]'>" . "</div>" . 
                "<p class='content'>" . $row['content'] . "</p>" . "</div>";
            }
    } else {
        echo "Geen blogs";
    }
}
?>
