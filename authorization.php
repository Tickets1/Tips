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
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js">
    <?php require "navbar.php"?>
  </head>
  <body class="text-center">
    <div align="center" class="mt-5">
    <form class="form-signin" action="auth_function.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal ">Войдите в свой профиль</h1>
      <input type="text" class="form-control mb-3" name="login" placeholder="Логин" required>
      <input type="password" class="form-control mb-3" name="password" placeholder="Пароль" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      <p class="mt-5 mb-3 text-muted">&copy; Tickets 2021</p>
    </form>
    <?php
        if (isset($_SESSION['message'])){?>
          <div class="alert alert-danger" role="alert">
          <?php echo $_SESSION['message'];?>
          </div>
          <?php } ?>
          <?php unset($_SESSION['message']);?>
    </div>
  </body>
</html>
