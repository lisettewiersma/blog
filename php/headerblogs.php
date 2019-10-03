<?php
function headerblogs() {
include 'connect.php';

$query = "SELECT * FROM blogs WHERE id=(SELECT MAX(id) FROM blogs)";
$result = $connect->query($query);

while ($row = $result->fetch_assoc()) {
echo "<div class='bgheaderblog'>  <div class='headerblog'> <img class='headerimg' src= " 
. $row['image'] . "> <div class='headerwrapper'> <h2 class='headertitle'>" 
. $row['title'] . "</h2> <p> Geschreven door " . $row['author'] . " op " . $row['date'] . 
"</p> </div></div> </div>";
}
}

?>