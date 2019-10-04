<?php
function headerblogs() {
include 'connect.php';

$query = "SELECT * FROM blogs WHERE id=(SELECT MAX(id) FROM blogs)";
$result = $connect->query($query);

while ($row = $result->fetch_assoc()) {
echo "<div class='bgheaderblog'>  <div class='headerblog'> <img class='headerimg' src= " 
. $row['image'] . "> <div class='headerwrapper'> <h2 class='headertitle'>" 
. $row['title'] . "</h2> <p> Geschreven door " . $row['author'] . " op " . $row['date'] . 
"</p>
<button id='readmorebttnheader'> Lees meer </button> </div></div> </div>
<div id='headerModal' class='headerModal'>
<div class='modal-content-header'>
    <span class='headerclose'>&times;</span>
    <image class='popupimg' scr=" . $row['image'] . "> <h1 class='popuptitle'>" . $row['title'] . " </h1>
    <p> Gechreven door: " . $row['author'] . " op " . $row['date'] . "<p class='popupblog'>" . $row['content'] . "
</div>
</div>
<script src='../js/headermodal.js'></script>";
}
}

?>