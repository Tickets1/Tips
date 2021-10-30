<?php
require_once "connection.php";
$query = "SELECT * FROM `concerts`";
$concerts = mysqli_query($connect, $query);
$concerts = mysqli_fetch_all($concerts);
?>
<div class="flex-wrap d-flex">
<?php
foreach ($concerts as $concert) {
?>
  <div class="card mb-4 rounded-3 shadow-sm">
   <div class="card-header py-3">
     <h2 class="my-0 fw-normal"><?php echo $concert[1] ?></h2>
   </div>
   <div class="card-body">
       <h6 class="card-title pricing-card-title"><?php echo $concert[2] ?></h6>
       <h6 class="card-title pricing-card-title"><?php echo $concert[3] ?></h6>
       <h6 class="card-title pricing-card-title"><?php echo $concert[4] ?></h6>
     <h6 class="card-title pricing-card-title"><?php echo $concert[6] ?> Рублей<small class="text-muted fw-light">/1 билет</small></h6>
     <ul class="list-unstyled mt-3 mb-4">
       <li>Осталось билетов <?php echo $concert[5] ?></li>
       <li> <?php
        //$_SESSION['concert_id'] = [
        //"id" => $concert[0]
    //  ];
        //echo $_SESSION['concert_id']['id'] ; ?></li>
     </ul>
     <a class="w-100 btn btn-lg btn-outline-primary" href="buying.php?id=<?php echo $concert[0]?>" role="button">Купить</a>
   </div>
 </div>
 <?php
}
?>
</div>
