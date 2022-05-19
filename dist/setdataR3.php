<?php
include("connectBD.php");
if (isset($_POST['username']) && $_POST['email'] && $_POST['massege']) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $massege = $_POST['massege'];

   $sql_add = "INSERT INTO reviews (username, email, massege) VALUES ('${username}', '${email}', '${massege}') ";
   $mysqli->query($sql_add); // Выполнение запроса
   if (mysqli_affected_rows($mysqli) > 0) // если нет ошибок при выполнении запроса
   {
      echo "Отзыв успешно отправлен";
   } else {
      echo "Что-то пошло не так Серьезно";
   }
} else {
   echo json_encode(array('Что-то пошло не так' => false));
}
