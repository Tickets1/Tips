<?php
session_start();
if ($_SESSION['user']){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js">
    <?php require "navbar.php"?>
  </head>
  <body class="text-center">
    <div align="center" class="mt-5">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal ">Зарегистрируйтесь</h1>
      <input type="text" class="form-control mb-3" name="first_name" placeholder="Имя" required>
      <input type="text" class="form-control mb-3" name="last_name" placeholder="Фамилия" required>
      <input type="email" class="form-control mb-3" name="email" placeholder="E-mail" required>
      <input type="text" class="form-control mb-3" name="login" placeholder="Логин" required>
      <input type="password" class="form-control mb-3" name="password" placeholder="Пароль" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
      <p class="mt-5 mb-3 text-muted">&copy; Tickets 2021</p>
    </form>
    <script>
    window.onload = function() {
        history.replaceState("", "", "register.php");
    }
    </script>
    <?php require "register_methods.php";
     require "alerts.php";
    ?>
    </div>
  </body>
</html>
