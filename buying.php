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
$query = "SELECT * FROM `tickets` WHERE `id_concert` = '$id_str_concert' AND `id_user` is NULL AND `id_no_user` is NULL";
$result = mysqli_query($connect, $query);
$select_mas = mysqli_fetch_all($result);
//echo $select_mas[0][0];
$select_mas_nikita = $select_mas[0][0];
$vash_bilet = $select_mas[0][1];
$idconcertmy = $select_mas[0][4];
$query3 = "SELECT `name_concert` FROM `concerts` WHERE `id_concert` = '$idconcertmy'";
$result2 = mysqli_query($connect, $query3);
$name_concerts = mysqli_fetch_array($result2);
//echo $name_concerts[0];
$_SESSION['name_concertmy'] = $name_concerts[0];
$_SESSION['number_ticketmy'] = $vash_bilet;
$i = 0;
foreach($_SESSION['user'] as $user => $item_count) {
    //echo "user=" . $user . ", Value=" . $item_count;
  $id_user_a[$i] = $item_count;
  $i++;
}
$id_us = $id_user_a[0];
$query2 = "UPDATE `tickets` SET `id_user` = $id_us WHERE `id_ticket` = $select_mas_nikita";
$result2 = mysqli_query($connect, $query2);
echo "Уважаемый $id_user_a[1] $id_user_a[2], ваш билет: $vash_bilet";
?>
<a href="pdf_generate.php">Ссылка на электронный билет</a>
<script>
window.onload = function() {
    history.replaceState("", "", "index.php");
}
</script>
