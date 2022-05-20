<?php
include("connectBD.php");
$result = $mysqli->query("SELECT title, img, text FROM news");

$news = [];

while ($row = mysqli_fetch_array($result)) { // для каждой строки из запроса
   array_push($news, ['title' => $row['title'], 'image' => $row['img'], 'text' => $row['text']]);
}

if (isset($_GET['tek']) && $_GET['kol']) {
   $tek = $_GET['tek'];
   $kol = $_GET['kol'];
   $news = array_slice($news, $tek, $kol);
   echo json_encode($news);
} else {
   echo json_encode(array('success' => false));
}
