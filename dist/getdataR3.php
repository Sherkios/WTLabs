<?php
include("connectBD.php");
$result = $mysqli->query("SELECT username, email, massege FROM reviews");

$reviews = [];

while ($row = mysqli_fetch_array($result)) { // для каждой строки из запроса
   array_push($reviews, ['username' => $row['username'], 'email' => $row['email'], 'massege' => $row['massege']]);
}

if (isset($_GET['tek']) && $_GET['kol']) {
   echo json_encode($reviews);
} else {
   echo json_encode(array('success' => false));
}
