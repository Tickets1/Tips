<?php
session_start();
require "connection.php";
$array1 = $_SERVER['REQUEST_URI'];
$array2 = str_split($array1);
$count_arr2 = count($array2);
//$array3 = [];
  for ($i=0; $i<$count_arr2; $i++){
    if ($array2[$i]=="="){
      $i++;
      for ($i, $j=0; $i<$count_arr2; $i++, $j++){
        $array3[$j]=$array2[$i];
        $id_str_concert .= $array3[$j];
      }
    }
  }
//echo $id_str_concert;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Покупка билета</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js">
    <?php require "navbar.php"?>
  </head>
  <body class="text-center">
    <div align="center" class="mt-5">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal ">Введите свои данные для покупки билета</h1>
      <input type="text" class="form-control mb-3" name="first_name" placeholder="Имя" required>
      <input type="text" class="form-control mb-3" name="last_name" placeholder="Фамилия" required>
      <input type="email" class="form-control mb-3" name="email" placeholder="E-mail" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Подтвердить</button>
    </form>
    </div>
  </body>
</html>
