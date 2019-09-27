<?php
// error_reporting(E_ALL);

// //You can also report all errors by using -1
// error_reporting(-1);

// //If you are feeling old school
// ini_set('error_reporting', E_ALL);

// function headerblogs() {
//     include 'connect.php';

//     $newest ="SELECT MAX(id) FROM blogs";
//     $newpost = $connect->query($newest);
//     $row1 = fetch_assoc($newpost);
//     echo $row1['id'];
//     $headerPost = "SELECT * FROM blogs WHERE id=2";
//     $result1 = $connect->query($headerPost);

//     while ($row = $result1->fetch_assoc()) {
//         echo "<div class='headerblog'>";
//     ///echo "<img src='$row['image']'>";
//         echo "<h2 class='headertitle'>" . $row['title'] . "</h2> ";
//         echo "<p>" . $row['author'] . " " . $row['date'] . "</p>" ;
//         echo "</div>";
//     }
//     echo 'hoi';
// }

error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);

//If you are feeling old school
ini_set('error_reporting', E_ALL);

function headerblogs() {
include 'connect.php';


$query = "SELECT * FROM blogs WHERE id=(SELECT MAX(id) FROM blogs)";
$result = $connect->query($query);

while ($row = $result->fetch_assoc()) {
echo "<div class='headerblog'>";
// echo "<img src='$row['image']'>";
echo "<h2 class='headertitle'>" . $row['title'] . "</h2> ";
echo "<p>" . $row['author'] . " " . $row['date'] . "</p>" ;
echo "</div>";
}
}

?>