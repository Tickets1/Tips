<?php
require "connection.php";
if (isset($_POST['name']) && isset($_POST['description'])){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $count_tickets = $_POST['count_tickets'];
  $datatime = $_POST['datatime'];
  $location = $_POST['location'];
  // работа с бд
  $query = "INSERT INTO `concerts` (`name_concert`, `description`, `datatime`, `location`, `count_tickets`) VALUES ('$name', '$description', '$datatime', '$location', '$count_tickets')";
  $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
  // генерация билетов
  $query_choose_id_concert = "SELECT `id_concert` FROM `concerts` WHERE `name_concert`='$name'";
  $mid = mysqli_query($connect, $query_choose_id_concert);
  $idf = mysqli_fetch_array($mid);
  $id = $idf[0];
  for ($i = 0; $i <$count_tickets;$i++){
    $number_ticket = uniqid("$name");
    $query_add_oneticket = "INSERT INTO `tickets` (`number_ticket`, `id_user`, `id_no_user`, `id_concert`) VALUES ('$number_ticket', NULL, NULL, '$id')";
    $result_add_ticket = mysqli_query($connect,$query_add_oneticket) or die (mysqli_error($connect));
  }
}
  ?>
