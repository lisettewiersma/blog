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

                echo "<div class='blog'><div class='wrapper'><div class='$wrapperclass'><h1 class='title'>" . $row['title'] . "</h1> 
                <p class='info'> Geschreven door " . $row['author'] . " op " . $row['date'] ."</p></div> 
                <img class='blogimg $class'  src='$row[image]'></div> 
                <button id='readmorebttn".$row['id']."'> Lees meer </button> </div></div> </div>
    <div id='blogModal' class='blogModal'>
    <div class='modal-content-blog'>
    <span class='blogclose'>&times;</span>
    <image class='popupimg' scr=" . $row['image'] . "> <h1 class='popuptitle'>" . $row['title'] . " </h1>
    <p> Gechreven door: " . $row['author'] . " op " . $row['date'] . "<p class='popupblog'>" . $row['content'] . "
</div>
</div>
<script> 
var blogmodal = document.getElementById('blogModal');
var blogbtn = document.getElementById('readmorebttn" . $row['id'] . "');
var blogspan = document.getElementsByClassName('blogclose')[0];

blogbtn.onclick = function() {
  blogmodal.style.display = 'block';
}

blogspan.onclick = function() {
  blogmodal.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == blogmodal) {
    blogmodal.style.display = 'none';
  }
}</script>";
            }
    } else {
        echo "Geen blogs";
    }
}
?>
