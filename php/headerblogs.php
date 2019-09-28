<?php
function headerblogs() {
include 'connect.php';

$query = "SELECT * FROM blogs WHERE id=(SELECT MAX(id) FROM blogs)";
$result = $connect->query($query);

while ($row = $result->fetch_assoc()) {
echo "<div class='headerblog'>";
echo "<img class='headerimg' src= " . $row['image'] . ">";
echo "<div class='headerwrapper'>";
echo "<h2 class='headertitle'>" . $row['title'] . "</h2> ";
echo "<p>" . $row['author'] . " " . $row['date'] . "</p>" ;
echo "</div>";
echo "</div>";
}
}

?>