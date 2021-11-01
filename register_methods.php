<?php
require "connection.php";
if (isset($_POST['login']) && isset($_POST['password'])){
  $login = $_POST['login'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  // работа с бд
  $query = "INSERT INTO `users` (`first_name`, `last_name`, `login`, `password`, `email`) VALUES ('$first_name', '$last_name', '$login', '$password', '$email')";
  $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
  if ($result){
    $smsg = "Регистрация прошла успешно";
    $_POST['smsg'] = $smsg;
      //if (5==5){
        //header('Location: register.php');
    //  }
  }
    else{
    $fmsg = "Ошибка";
    $_POST['fmsg'] = $fmsg;
  }
}

//header('Location: register.php');
?>

<?php //header('Location: index.php');
//echo "<script>self.location='http://tickets/register.php';</script>";
?>
