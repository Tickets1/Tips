<?php
session_start();
if (!$_SESSION['user']){
  header('Location: index.php');
}
require_once "connection.php";
$i=0;
foreach($_SESSION['user'] as $user => $item_count) {
    //echo "user=" . $user . ", Value=" . $item_count;
  $id_user_a[$i] = $item_count;
  $i++;
}
$id_us = $id_user_a[0];
//echo $id_us;
$query = "SELECT * FROM `tickets` WHERE `id_user` = $id_us";
$mytickets = mysqli_query($connect, $query);
$myticketsa = mysqli_fetch_all($mytickets);
//$foreach ($myticketsa as $ticket){
//}
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js">
    <?php require "navbar.php"?>
  </head>
  <body>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Номер билета</th>
      <!--<th scope="col">Фамилия</th>
      <th scope="col">Обращение</th>-->
    </tr>
  </thead>
  <?php
  $j=1;
    foreach ($myticketsa as $ticket) {
      ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $j ?></th>
      <td><?php echo $ticket[1] ?></td>
      <!--<td><?php //echo $ticket[2] ?></td>
      <td><?php //echo $ticket[3] ?></td>-->
    </tr>
  <?php
    $j++;
    }
    ?>
  </table>
  </body>
  </html>
